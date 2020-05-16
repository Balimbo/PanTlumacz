<?php
$servername     = "localhost";                    // Server name
// $username         = "bearwh";                        // Login to enter phpMyAdmin
// $password         = "X689Jty6pt";                    // Password to enter phpMyAdmin
$username         = "admin";                        // Login to enter phpMyAdmin
$password         = "";                            // Password to enter phpMyAdmin
$username         = "bearwh";                        // Login to enter DB
$password         = "X689Jty6pt";                    // Password to enter DB
// $username         = "admin";                        // Login to enter DB
// $password         = "";                            // Password to enter DB
$to             = "tm477301@gmail.com";            // Email to which letters should be sent
$SMTPService    = 'sigcum.kylos.pl';            // Service that provides SMTP services
$botMail         = 'requestbot@pantlumacz.pl';    // Login of the bot on a service that provides SMTP services
$botPassword     = '-M_%w$iERHaZ';                // Password from the same email


// Not for change
$conn = new mysqli($servername, $username, $password);    // Connect to DB


// $conn->query("USE `bearwh_PanTlumatcz`");
 $conn->query("USE `Reviews`");
?>
$conn->query("USE `bearwh_PanTlumacz`");
// $conn->query("USE `Reviews`");
?>
