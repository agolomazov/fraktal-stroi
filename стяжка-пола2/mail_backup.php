<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Обратная связь</title>
</head>
<body>

    
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


</body>
</html>