$(document).ready(function () {

    // мобильное меню
    $('.menu-button').click(function (e) {
        e.preventDefault();
        $('.mobile-nav').show();
    });

    $('.mobile-nav a, .mobile-nav-close').click(function () {
        $('.mobile-nav').hide();
    });
    // end

    //слайдеры
    $('.projects-slider').slick({
        autoplay: true,
        dots: true,
        slidesPerRow: 1,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.reviews-slider').slick({
        slidesPerRow: 2,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false,
        dots: true,
        responsive: [{
            breakpoint: 576,
            settings: {
                slidesPerRow: 1,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    //end

    //показ сообщения об успехе/ошибки
    function displayResult(selector, time) {
        $(selector).show('slow');
        setTimeout(function () {
            $(selector).hide('slow');
        }, time);
    }
    // end

    //отправка формы
    $(".feedback form").on('submit', function (event) {
        //обратите внимание на то что в теле обработчика мы вырубаем штатный обработчик события submit (который гавесил сам браузер по дефолты)
        event.preventDefault();

        //2 получаем данные введеные в форму
        let data = {
            name: $("#name").val(),
            email: $("#email").val(),
            text: $("#text").val()
        }
        $(".submit").prop("disabled", true);

        //отправка данных на сервер и обработка результата
        $.post('server.php', data, function (response) {
            if (response.result) {
                // console.log("success");
                displayResult(".submit.submit-success", 10000);
            } else {
                // console.log("error")
                displayResult(".submit.submit-error", 10000);
            }

            $(".submit").prop("disabled", false);
        }, 'json');
    });
    // end
});