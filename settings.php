<?php
$servername     = "localhost";                  // Server name
$username       = "admin";                    	// Login to enter DB
$password       = "";                 			// Password to enter DB
$to             = "biuro@pantlumacz.pl";        // Email to which letters should be sent
$SMTPService    = 'sigcum.kylos.pl';            // Service that provides SMTP services
$botMail        = 'requestbot@pantlumacz.pl';  	// Login of the bot on a service that provides SMTP services
$botPassword    = '-M_%w$iERHaZ';               // Password from the same email


// Not for change
$conn = new mysqli($servername, $username, $password);    // Connect to DB


$conn->query("USE `bearwh_PanTlumacz`");		// DB name
?>
