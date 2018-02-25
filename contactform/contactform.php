<?php 
$to = "iroboboba@gmail.com";
$mail = trim(strip_tags($_POST['mail']));
if (!isset($_POST['mail'])) {
	$mail = " ";
}
if (!isset($_POST['name'])) {
	$name = " ";
}
if (!isset($_POST['place'])) {
	$name = " ";
}
$subject="Заявка на обучение";
$name = trim(strip_tags($_POST['name']));
$phone = trim(strip_tags($_POST['phone']));
$place = trim(strip_tags($_POST['place']));
$message = "Имя:".$name."<br>Телефон:".$phone."<br>E-mail:".$mail."<br>Адрес:".$place;
 //if (isset($_POST['price'])) {
// 	$from = trim(strip_tags($_POST['from']));
// 	$toc = trim(strip_tags($_POST['to']));
// 	$weight = trim(strip_tags($_POST['weight']));
// 	$space = trim(strip_tags($_POST['space']));
// 	$subject = "Просьба рассчитать стоимость заказа";
// 	$message = "Телефон: ".$phone."<br>Из: ".$from."<br>В: ".$toc."<br>Вес: ".$weight."кг<br>Объем: ".$space."м3";
// }
 if (isset($_POST['present'])) {
	$subject = "Заявка на получение презентации и расписания";
 }
// if (isset($_POST['osob'])) {
// 	$subject = "Просьба разобрать особый случай";
// 	$message = "E-mail: ".$mail;
// }	
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Капоэйра <noreply@email.com> \r\n";
mail($to, $subject, $message, $headers);

?>