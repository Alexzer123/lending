<?php 

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

//выводим сообщение в зависимости от результата
if($result){
    echo "Спасибо, ваше сообщение отправлено. Я отвечу вам в ближайщее время. <a href='{$backUrl}'>Назад</a>";
} else {
    echo "Ошибка отправки сообщеня. Пожалуйста, свяжитесь со мной по email. <a href='{$backUrl}'>Назад</a>";
}

