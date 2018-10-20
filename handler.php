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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Результат отправки сообщения</title>
</head>
<body>
    
    <?php if($result): ?>

        <p>Спасибо, ваше сообщение отправлено. Я отвечу вам в ближайщее время. <a href="<?php echo $backUrl; ?>">Вернуться на сайт</a></p>
    <?php else: ?>

        <p>Ошибка отправки сообщеня. Пожалуйста, свяжитесь со мной по email. <a href="<?php echo $backUrl; ?>">Вернуться на сайт</a></p>
    <?php endif; ?>


</body>
</html>


