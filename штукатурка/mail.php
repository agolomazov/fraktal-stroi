<?php
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["phone"]);
$vopros = htmlspecialchars($_POST["vopros"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);
 
/* Ваш адрес и тема сообщения */
$address = "fs18@yandex.ru";
$sub = "Письмо с сайта Fraktal - Штукатурка";
 
/* Формат письма */
$mes = "Письмо со страницы (Штукатурка).\n
Вопрос: $vopros
Телефон отправителя: $tel"
;
 
 
if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: Fractal.ru <info@fraktal.ru> \r\n";
if (mail($address, $sub, $mes, $from)) {  
	header('Refresh: 5; URL=http://best-landing.ru');
	echo 'Письмо отправлено, через 5 секунд вы вернетесь на сайт XXX';}
else {  
	header('Refresh: 5; URL=http://best-landing.ru');
	echo 'Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>