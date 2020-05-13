<?php
$servername 	= "localhost";					// Server name
$username 		= "bearwh";						// Login to enter phpMyAdmin
$password 		= "X689Jty6pt";					// Password to enter phpMyAdmin
$to 			= "tm477301@gmail.com";			// Email to which letters should be sent
$SMTPService	= 'sigcum.kylos.pl';			// Service that provides SMTP services
$botMail 		= 'requestbot@pantlumacz.pl';	// Login of the bot on a service that provides SMTP services
$botPassword 	= '-M_%w$iERHaZ';				// Password from the same email


// Not for change
$conn = new mysqli($servername, $username, $password);	// Connect to phpMyAdmin

if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
}
?>