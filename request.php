<?php
if (isset($_POST['firstName']) && isset($_POST['fromLang']) && isset($_POST['toLang']) && isset($_POST['email']))
{
	$name = htmlentities($_POST['firstName']);
	$fromLang = $_POST['fromLang'];
	$toLang = $_POST['toLang'];
	$email = htmlentities($_POST['email']);
	$comment = htmlentities($_POST['massage']);


	$message = "
Имя заказчика: $name
Язык оригинала: $fromLang
Язык перевода: $toLang
email: $email
Комментарий к заказу: $comment";


	$to = "";
	$from = "pantlumatcz@mail.ru";
	$subject = "Заявка на перевод!";
	$subject = "=?utf-8?D?".base64_encode($subject)."?=";
	$headers = "From: $from\r\nReply-to: $from\t\nContent-type: text/plain; chatset=utf-8\r\n";

	if(mail($to, $subject, $message, $headers))
		echo "success";
	
}
else 
	echo "ERROR";
?>