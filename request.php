<?php
	require 'phpMailer/class.phpmailer.php';
	require 'phpMailer/class.smtp.php';

	$name 		= htmlentities($_POST['firstName']);
	$fromLang 	= $_POST['fromLang'];
	$toLang 	= $_POST['toLang'];
	$email 		= htmlentities($_POST['email']);
	$comment 	= htmlentities($_POST['massage']);
	$message 	= "Имя заказчика: $name<br>Язык оригинала: $fromLang<br>Язык перевода: $toLang<br>Email: $email<br>Комментарий к заказу: $comment";


	$to 		= "yegor.l@mail.ru";//Адрес, на который должны приходить заказы
	$from 		= "pantlumatcz@mail.ru";
	$subject 	= "Заявка на перевод!";

	$mail = new PHPMailer;

	$mail->isSMTP();
	$mail->CharSet 		= "utf-8"; 
	$mail->Host 		= 'smtp.mail.ru';  
	$mail->SMTPAuth 	= true;                      
	$mail->Username 	= 'pantlumatcz'; 
	$mail->Password 	= 'M8yOgD^C1^@u2*R9iE@KcA7pRiEbDqIDZA3Y1lL&'; 
	$mail->SMTPSecure 	= 'ssl';                            
	$mail->Port 		= 465;
	$mail->setFrom($from);
	$mail->addAddress($to);
	   
	// Прикрепление файлов
  	for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
        $filename = $_FILES['userfile']['name'][$ct];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    } 
 
                               
	// Письмо
	$mail->isHTML(true); 
	$mail->Subject = $subject;
	$mail->Body    = $message;

	$mail->send();
?>