<?php
// Sending an order for email

require_once 'phpMailer/class.phpmailer.php';
require_once 'phpMailer/class.smtp.php';
require_once 'settings.php';

$name 		= htmlentities($_POST['firstName']);
$fromLang 	= $_POST['fromLang'];
$toLang 	= $_POST['toLang'];
$email 		= htmlentities($_POST['email']);
$comment 	= htmlentities($_POST['massage']);
$message 	= "Имя заказчика: $name<br>Язык оригинала: $fromLang<br>Язык перевода: $toLang<br>Email: $email<br>Комментарий к заказу: $comment";


$from 		= $botMail;
$subject 	= "Заявка на перевод!";

$mail = new PHPMailer;

// Bot setup
$mail->isSMTP();
$mail->CharSet 		= "utf-8";
$mail->Host 		= $SMTPService;
$mail->SMTPAuth 	= true;                      
$mail->Username 	= $botMail; 
$mail->Password 	= $botPassword; 
$mail->SMTPSecure 	= 'ssl';                            
$mail->Port 		= 465;
$mail->setFrom($from);
$mail->addAddress($to);
   
// File attachment
	for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
    $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
    $filename = $_FILES['userfile']['name'][$ct];
    if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
        $mail->addAttachment($uploadfile, $filename);
    } else {
        $msg .= 'Failed to move file to ' . $uploadfile;
    }
} 

                           
// Sending email
$mail->isHTML(true); 
$mail->Subject = $subject;
$mail->Body    = $message;

if(!$mail->send()) {
    // echo "Message was not sent.\n";
    // echo 'Mailer error: ' . $mail->ErrorInfo;
    header("Location: ./10");
    exit;
} else {
    //echo 'Message has been sent.';
    header("Location: ./11");
    exit;
}
?>