<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Обратная связь</title>
</head>
<body>
<?php
  
// Данные должны быть в кодировке UTF-8! Иначе — это может привести к ошибке.
// Если вы используете кодировку Windows-1251, то можно преобразовать все переменные через $value = iconv("Windows-1251", "UTF-8", $value);
// Или указать в доп. полях ключ 'charset' с используемой на сайте кодировкой, сервер Roistat, конвертирует все значения из указанной кодировки в UTF-8.
  
// ...
// где-то здесь вызывается текущая функция создания лида, например, функция mail()
// ...
  
$roistatData = array(
    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
    'key'     => 'SECRET_KEY', // Замените SECRET_KEY на секретный ключ из пункта меню Настройки -> Интеграция со сделками в нижней части экрана и строчке Ключ для интеграций
    'title'   => 'Название сделки',
    'comment' => 'Комментарий к сделке',
    'name'    => 'Имя клиента',
    'email'   => 'client@email.com',
    'phone'   => '79111234567',
    'is_need_callback' => '0', // Для автоматического использования обратного звонка при отправке контакта и сделки нужно поменять 0 на 1
    'fields'  => array(
    // Массив дополнительных полей, если нужны, или просто пустой массив. Более подробно про работу доп. полей можно посмотреть в видео в начале статьи
    // Примеры использования:
        "price" => 123, // Поле бюджет в amoCRM
        "responsible_user_id" => 3, // Ответственный по сделке
        "1276733" => "Текст", // Заполнение доп. поля с ID 1276733
    // Подробную информацию о наименовании полей и получить список доп. полей вы можете в документации amoCRM: https://developers.amocrm.ru/rest_api/#lead
    // Более подробную информацию по работе с дополнительными полями в amoCRM, вы можете получить у нашей службы поддержки
        "charset" => "Windows-1251", // Сервер преобразует значения полей из указанной кодировки в UTF-8
        "tags" => "Тег1, Тег2", // Название тегов через запятую
    ),
);
  
file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));

?>
    
<?php
if (isset($_POST['title'])) {$title = $_POST['title'];}
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['text'])) {$text = $_POST['text'];}


$to = "dacent20@yahoo.com";
$to = "fs18@yandex.ru";
$to = "sergsh10@list.ru";

$headers = "Content-type: text/plain; charset = utf-8";
$subject = "Заявка с сайта";
$message = "Форма заявки: $title \nИмя пославшего: $name \nНомер телефона: $phone \nТекст: $text";
$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')
{
echo "<b>Спасибо за отправку вашего сообщения!<p>";
echo "<a href=index.html>Нажмите,</a> чтобы вернуться на главную страницу";

}
else 
{
echo "<p><b>Ошибка. Сообщение не отправлено!";
}



?>

<!-- Google Code for &#1047;&#1072;&#1103;&#1074;&#1082;&#1072; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 951046342;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "bZlDCJmmoGgQxqG_xQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/951046342/?label=bZlDCJmmoGgQxqG_xQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Yandex.Metrika counter -->
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter38463925 = new Ya.Metrika({ id:38463925, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <!-- /Yandex.Metrika counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69276749-1', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>