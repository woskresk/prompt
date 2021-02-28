<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Форма обратной связи</title>
<meta http-equiv="Refresh" content="4; URL=/mail_bc/"> <!-- Страница на которую перейдет после отправки -->
</head>
<body>

<?php 
$sendto = "marketing@tchtz.ru, work-imark@mail.ru, sale@tchtz.ru"; //почта, на которую будет приходить письмо
$from_email = "info@agro-motors.ru"; //адрес сайта с доменом
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты

// Формирование заголовка письма
$subject  = "Перезвоните мне - agro-motors.ru"; // указать адрес сайта
 $headers = "From:".$from_email."\r\n".
$headers .=  "Reply-To: ".$sendto. "\n" .
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px solid #ccc; padding-bottom:16px'>Жду вашего звонка!</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$username."</p>\r\n";
//$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<center><img src='mail_send.png'></center>";
} else {
	echo "<center><img src='mail_not_send.png'></center>";
}

?>

</body>
</html>