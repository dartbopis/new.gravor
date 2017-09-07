<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Недорогая гостиница Гравор в Москве</title>
<meta http-equiv="Refresh" content="4; URL=http://new.hotel-gravor.ru/"> 
</head>
<body>

<?php 

$sendto   = "dartbopis@gmail.com"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$userarrival = $_POST['arrival'];
$userdeparture = $_POST['departure'];
$userpeople = $_POST['people'];
$usermessage = $_POST['message'];
$fromsite = $_POST['fromsite'];

// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>Откуда:</strong> ".$fromsite."</p>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>Дата приезда:</strong> ".$userarrival."</p>\r\n";
$msg .= "<p><strong>Дата выезда:</strong> ".$userdeparture."</p>\r\n";
$msg .= "<p><strong>Количество человек:</strong> ".$userpeople."</p>\r\n";
$msg .= "<p><strong>Сообщение:</strong> ".$usermessage."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<center><img src='images/spasibo.png'></center>";
} else {
	echo "<center><img src='images/ne-otpravleno.png'></center>";
}

?>

</body>
</html>