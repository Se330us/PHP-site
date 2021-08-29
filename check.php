<?php
    $email = $_POST['email']; // из массива $_POST получаем емеил
    $message = $_POST['message'];

    $error = '';
    if(trim($email) == '') { // если нет имейла
        $error = 'Введите email';
    }
    elseif(trim($message) == '') { // если нет текста
        $error = 'Введите текст';
    }
    elseif (strlen($message) < 10) { // если мало символов в тексте
        $error = 'Мало символов в сообщении';
    }

    if($error != ''){ // отображение ошибки
        echo $error;
        exit;
    }
    $subject = "=?utf-8?B?".base64_encode("Сообщение из сайта")."?="; // тема сообщения
    $headers = "From: $email\r\n\Reply-to: $email\r\n\Content-type: text/html; charset=utf-8\r\n";
    mail('spudkomixail@yandex.ru', $subject, $message, $headers)
    header(Location: /about.php)
?>