<?php

$result = false;

if (count($_POST) > 0) {
    
    //получаем данные формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'] ;

    //настройки отрпавки
    $to = 'aleksandr1995g@yandex.ru';
    $subject = 'Сообщение с сайта';
    $message = "Имя: {$name}, email-адрес: {$email}, сообщение: {$text}.";

    //результат отправки сохранили в переменную
    $result = mail($to, $subject, $message);
    // $result = true;
}
//возвращаем ответ сервера
header('Content-type: application/json');
echo json_encode(['result' => $result]);
