<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["phone"]);
$email = htmlspecialchars($_POST["email"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);
 
/* Ваш адрес и тема сообщения */
$address = "fs18@yandex.ru";
$sub = "Заказ звонка с сайта Fraktal - Главная страница";
 
/* Формат письма */
$mes = "Заказ звока (Главная страница).\n
Телефон отправителя: $tel"
;
 
 
if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: Zvonok Fractal.ru <info@fraktal.ru> \r\n";
if (mail($address, $sub, $mes, $from)) {  

$roistatData = array(
    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
    'key'     => 'MjI1NDk6MjU0NDI6YjI2NzAzNDU0YmYxNzVkZGY4YzY1MjEzOTNiMDc3ZDE=',
    'phone'   => $tel,
    'is_need_callback' => '1', 
);
  
file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));


	header('Refresh: 5; URL=http://best-landing.ru');
	echo 'Письмо отправлено, через 5 секунд вы вернетесь на сайт XXX';}
else {  
	header('Refresh: 5; URL=http://best-landing.ru');
	echo 'Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>