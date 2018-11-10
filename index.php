<?php

$currentUrl = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$submit = false;
$result = false;

if (count($_POST) > 0) {
    $submit = true;

    //получаем данные формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'] ;

    //настройка переадресайии
    $backUrl = $_SERVER['HTTP_REFERER']; //взял адрес страницы отправки формы из служебного массива $_SERVER;

    //настройки отрпавки
    $to = 'aleksandr1995g@yandex.ru';
    $subject = 'Сообщение с сайта';
    $message = "Имя: {$name}, email-адрес: {$email}, сообщение: {$text}.";

    //результат отправки сохранили в переменную
    $result = mail($to, $subject, $message);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lending</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h1>Александр Хорчев</h1>
                </div><!-- /.col -->
                <div class="col-8 offset-1">
                    <nav>
                        <ul>
                            <li>
                                <a href="#about">Обо мне</a>
                            </li>
                            <li>
                                <a href="#projects">Проекты</a>
                            </li>
                            <li>
                                <a href="#reviews">Отзывы</a>
                            </li>
                            <li>
                                <a href="#contacts">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <figure>
                        <img src="img/about/photo.jpg" alt="Александр Хорчев &mdash; веб-разработчик">
                    </figure>
                </div>
                <div class="col-8 offset-1">
                    <p>
                        Доброго времени суток, меня зовут Александр. Занимаюсь разработкой сайтов с нуля, под ключ.
                        Специалист по CMS WordPress, OpenCart, Elgg. Выполняю верстку и программирование сайтов. Делаю
                        верстку на Bootstrap, таким образом Ваш сайт будет отлично выглядеть на всех устройствах.
                    </p>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /#about -->

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2>Проекты</h2>
                </div>
                <div class="col-8">
                    <div class="projects-slider">

                        <figure>
                            <img src="img/projects/Chat.jpg" alt="Программа виртуального общения по локальной сети">
                            <figcaption>
                                <div class="row">
                                    <div class="col-9">
                                        <h3>Программа виртуального общения по локальной сети</h3>
                                    </div>
                                    <div class="col-3">
                                        <div class="counter">1/10</div>
                                    </div>
                                </div><!-- /.row -->
                                <div class="meta">
                                    2018 &#183; Программирование &#183; C#
                                </div>
                            </figcaption>
                        </figure>

                        <figure>
                            <img src="img/projects/Game.jpg" alt="Браузерная игра Арканоид">
                            <figcaption>
                                <div class="row">
                                    <div class="col-9">
                                        <h3>Браузерная игра Арканоид</h3>
                                    </div><!-- /.col-9 -->
                                    <div class="col-3">
                                        <div class="counter">2/10</div>
                                        <!-- /.counter -->
                                    </div><!-- /.col-3 -->
                                </div><!-- /.row -->
                                <div class="meta">
                                    2018 &#183; Программирование &#183; HTML, CSS, JavaScript
                                </div>
                                <!-- /.meta -->
                            </figcaption>
                        </figure>

                    </div><!-- /.projects-slider -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.conatiner -->
    </section><!-- /#projects -->

    <section id="reviews">
        <div class="container">
            <div class="wrapper">
                <h2>Отзывы</h2>

                <div class="reviews-slider">

                    <div class="row">
                        <div class="col-4">
                            <figure>
                                <img src="img/reviews/1.jpg" alt="Максим, Санкт-Петербург">
                            </figure>
                        </div>
                        <div class="col-8">
                            <h3>Максим, Санкт-Петербург</h3>
                            <p>Mollit cillum sit eu excepteur commodo culpa in esse sit magna esse non et commodo.
                                Ut reprehenderit cillum proident excepteur id occaecat reprehenderit cupidatat. Ad
                                consequat aliquip labore qui. Proident aliquip ipsum ullamco sint est et. Elit
                                eiusmod fugiat mollit mollit fugiat non duis. Eiusmod laborum officia exercitation
                                id irure ex cupidatat tempor aliquip nulla et eu aute.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <figure>
                                <img src="img/reviews/2.jpg" alt="Глебан, Душанбе">
                            </figure>
                        </div>
                        <div class="col-8">
                            <h3>Глебан, Душанбе</h3>
                            <p>Aliquip esse dolore ullamco laborum dolor ex aliquip velit. Fugiat ut cupidatat ut
                                fugiat in sit officia minim laboris dolore. Cupidatat est Lorem ea qui anim
                                occaecat
                                veniam consequat laborum Lorem sunt anim nisi ullamco. Nulla consectetur sint
                                reprehenderit sint eiusmod dolor aliqua deserunt.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <figure>
                                <img src="img/reviews/3.jpg" alt="Блейз Шарп, Карибы">
                            </figure>
                        </div>
                        <div class="col-8">
                            <h3>Блейз Шарп, Карибы</h3>
                            <p>Aliquip esse dolore ullamco laborum dolor ex aliquip velit. Fugiat ut cupidatat ut
                                fugiat in sit officia minim laboris dolore. Cupidatat est Lorem ea qui anim
                                occaecat
                                veniam consequat laborum Lorem sunt anim nisi ullamco. Nulla consectetur sint
                                reprehenderit sint eiusmod dolor aliqua deserunt.</p>
                        </div>
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-4">
                            <figure>
                                <img src="img/reviews/3.jpg" alt="Блейз Шарп, Карибы">
                            </figure>
                        </div>
                        <div class="col-8">
                            <h3>Блейз Шарп, Карибы</h3>
                            <p>Aliquip esse dolore ullamco laborum dolor ex aliquip velit. Fugiat ut cupidatat ut
                                fugiat in sit officia minim laboris dolore. Cupidatat est Lorem ea qui anim
                                occaecat
                                veniam consequat laborum Lorem sunt anim nisi ullamco. Nulla consectetur sint
                                reprehenderit sint eiusmod dolor aliqua deserunt.</p>
                        </div>
                    </div><!-- /.row -->

                </div><!-- /.reviews-slider -->

            </div><!-- wrapper -->
        </div><!-- container -->
    </section><!-- /#reviews -->

    <section id="contacts">
        <div class="container">
            <div class="wrapper">
                <div class="row">
                    <div class="col-6">
                        <h2>Контакты</h2>

                        <div class="contacts">
                            <p>
                                Я сейчас нахожуся в в Тайланде. У меня сейчас 22:04. Здесь все кто по кайфу, ингуши,
                                кабардинцы.
                            </p>
                            <p>
                                Быстрее всего отвечу <a href="mailto:">по почте</a>.
                            </p>

                            <ul class="links">
                                <li>
                                    <a href="https://vk.com/ahorchev" title="Профиль ВКонтакте">
                                        <img src="img/contacts/vk.svg" alt="Александр Хорчев">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100014505130151" title="Профиль Facebook">
                                        <img src="img/contacts/fb.svg" alt="Александр Хорчев">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/Alexzer123" title="Профиль GitHub">
                                        <img src="img/contacts/gh.svg" alt="Александр Хорчев">
                                    </a>
                                </li>
                            </ul>

                        </div><!-- /.contacts -->
                    </div><!-- /.col-6 -->

                    <div class="col-6">
                        <div class="feedback">
                            <h2>Обратная связь</h2>
                            <form method="POST" action="<?php echo $currentUrl ?>#contacts">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="name">Имя</label>
                                        <input name="name" id="name" maxlength="255" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="email">Почта</label>
                                        <input type="email" name="email" id="email" required>
                                    </div>
                                </div>
                                <label for="text">Сообщение</label>
                                <textarea name="text" id="text" rows="10" required></textarea>
                                <button type="submit">Отправить форму</button>
                            </form>
                            <?php if ($submit && $result): ?>
                            <div class="submit submit-success">Спасибо, ваше сообщение отправлено. Я отвечу вам в
                                ближайщее время.</div>
                            <?php endif; ?>
                            <?php if ($submit && !$result): ?>
                            <div class="submit submit-error">Ошибка отправки сообщеня. Пожалуйста, свяжитесь со мной по
                                email.</div>
                            <?php endif; ?>
                        </div>

                    </div><!-- /.col-6 -->
                </div><!-- /.row -->

            </div><!-- wrapper -->
        </div><!-- /.container -->
    </section><!-- /.contacts -->

    <footer>
        Александр Хорчев &copy; 2018
    </footer>


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.projects-slider').slick({
                autoplay: true,
                dots: true
            });

            $('.reviews-slider').slick({
                slidesPerRow: 2,
                slidesToShow: 2,
                arrows: false,
                dots: true,
            });


            //TODO: доделать
            $(".feedback form").on('submit', function(event) {

                event.preventDefault();

                //2 получаем данные введеные в форму
                let data = {
                    name: "wwww",
                    email: "asdasd",
                    text: "asdasdasd"
                }
                console.log(data);


                //3 Отправляем данные на сервер
            });

            //обратите внимание на то что в теле обработчика мы вырубаем штатный обработчик события submit (который гавесил сам браузер по дефолты)


        });
    </script>

</body>

</html>