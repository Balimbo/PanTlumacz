<?php
$servername 	= "localhost";					// Server name
$username 		= "bearwh";						// Login to enter phpMyAdmin
$password 		= "X689Jty6pt";					// Password to enter phpMyAdmin
$to 			= "tm477301@gmail.com";			// Email to which letters should be sent
$SMTPService	= 'smtp.mail.ru';				// Service that provides SMTP services
$botMail 		= 'pantlumatcz';				// Login of the bot on a service that provides SMTP services
$botPassword 	= 'M8yOgD^C1^@u2*R9iE@KcA7pRiEbDqIDZA3Y1lL&';		// Password from the same email


// Not for change
$conn 			= new mysqli($servername, $username, $password);	// Connect to phpMyAdmin

if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
}