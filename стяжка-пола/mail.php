<?php
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["phone"]);
$vopros = htmlspecialchars($_POST["vopros"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);
 
/* Ваш адрес и тема сообщения */
$address = "fs18@yandex.ru";
$sub = "Письмо с сайта Fraktal - Стяжка";
 
/* Формат письма */
$mes = "Письмо со страницы (Стяжка).\n
Вопрос: $vopros
Телефон отправителя: $tel"
;
 

$roistatData = array(
    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
    'key'     => 'MjI1NDk6MjU0NDI6YjI2NzAzNDU0YmYxNzVkZGY4YzY1MjEzOTNiMDc3ZDE', // Замените SECRET_KEY на секретный ключ из пункта меню Настройки -> Интеграция со сделками в нижней части экрана и строчке Ключ для интеграций
    'title'   => 'Новая сделка',
    'comment' => 'http://фрактал-строй.рф/стяжка-пола',
    'name'    => '',
    'email'   => '',
    'phone'   => $tel,
    'is_need_callback' => '0', // Для автоматического использования обратного звонка при отправке контакта и сделки нужно поменять 0 на 1
    'fields'  => array(
    // Массив дополнительных полей, если нужны, или просто пустой массив. Более подробно про работу доп. полей можно посмотреть в видео в начале статьи
    // Примеры использования:
        "price" => 123, // Поле бюджет в amoCRM
        "responsible_user_id" => 3, // Ответственный по сделке
        "1276733" => "Текст", // Заполнение доп. поля с ID 1276733
    // Подробную информацию о наименовании полей и получить список доп. полей вы можете в документации amoCRM: https://developers.amocrm.ru/rest_api/#lead
    // Более подробную информацию по работе с дополнительными полями в amoCRM, вы можете получить у нашей службы поддержки
        "charset" => "utf-8", // Сервер преобразует значения полей из указанной кодировки в UTF-8
        "tags" => "Тег1, Тег2", // Название тегов через запятую
    ),
);
  
file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));





 
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