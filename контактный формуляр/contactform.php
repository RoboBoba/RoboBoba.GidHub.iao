<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject']
$message = $_POST['message']
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$subject = htmlspecialchars($subject);
$message = htmlspecialchars($message);
$name = urldecode($name);
$email = urldecode($email);
$subject = urldecode($subject);
$message = urldecode($message);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("iroboboba@gmail.com", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email , "телефон:" .$subject , "From: iroboboba@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>
