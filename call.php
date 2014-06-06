<?php
if ($_POST['firstname']) {
    $firstname       = filter_input(INPUT_POST, firstname, FILTER_SANITIZE_STRING);
} else {
    $firstname       = filter_input(INPUT_POST, firstname1, FILTER_SANITIZE_STRING);
}
if ($_POST['lastname']) {
    $lastname        = filter_input(INPUT_POST, lastname, FILTER_SANITIZE_STRING);
} else {
    $lastname        = filter_input(INPUT_POST, lastname1, FILTER_SANITIZE_STRING);
}
if ($_POST['phone']) {
    $phone           = filter_input(INPUT_POST, phone, FILTER_SANITIZE_STRING);
} else {
    $phone           = filter_input(INPUT_POST, phone1, FILTER_SANITIZE_STRING);
}
if ($_POST['email']) {
    $email           = filter_input(INPUT_POST, email, FILTER_SANITIZE_STRING);
} else {
    $email           = filter_input(INPUT_POST, email1, FILTER_SANITIZE_STRING);
}
if ($_POST['text']) {
    $text            = filter_input(INPUT_POST, text, FILTER_SANITIZE_STRING);
} else {
    $text            = filter_input(INPUT_POST, text1, FILTER_SANITIZE_STRING);
}
if ($_POST['url']) {
    $url             = filter_input(INPUT_POST, url, FILTER_SANITIZE_STRING);
} else {
    $url             = filter_input(INPUT_POST, url1, FILTER_SANITIZE_STRING);
}


$subject = "Письмо с сайта Prime от: ".$firstname . " " . $lastname;
$headers = "Content-Type: text/html; charset=UTF-8\r\n";
$message = "<h1>Добрый день! Получено новое письмо с сайта Prime.ru</h1> <br> "
        . "<h2>Данные: </h2><br> "
        . "<b>Имя:</b> ". $firstname .".<br> "
        . "<b>Фамилия:</b> ". $lastname ."<br>"
        . "<b>Телефон:</b> ". $phone ."<br>"
        . "<b>Электропочта:</b> ". $email ."<br>"
        . "<b>Сообщение:</b> ". $text ."<br>"
        . "<b>URL:</b> ". $url ."<br>";

 $res = mail( 'hello@daprime.ru', $subject, $message, $headers );


if($res){
	header('location: /');
}
else {
	print 'Error';
}