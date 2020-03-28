<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PanTłumacz</title>
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
</head>
<body>
	<header>
			<div class="header_menu">
				<div class="header_logo">PanTłumacz</div>
				<nav class="header_nav">
					<a class="header_nav_link" href="#">Languages</a>
					<a class="header_nav_link" href="#">What we can?</a>
					<a class="header_nav_link" href="#">About us</a>
					<a class="header_nav_link" href="#">Price list</a>
					<a class="header_nav_link" href="#">Application</a>
					<a class="header_nav_link" href="#">Comments</a>
				</nav>
			</div>

			<div class="header_title">
				<h1 class="header_text">Translation Agency</h1>
				<a class="main_button" href="#">Make a request</a>
				
			</div>
	</header>
<?php 
	require_once 'settings.php';

	$sql = "CREATE DATABASE `Reviews`";

	$conn->query($sql);
	$conn->query("USE `Reviews`");

	// Database creation
	$sql = "CREATE TABLE `comment` (
		id INT NOT NULL AUTO_INCREMENT,
		name VARCHAR(20) NOT NULL,
		comment TEXT NOT NULL,
		period VARCHAR(16) NOT NULL,
		isCheked BOOLEAN default FALSE,
		PRIMARY KEY(id))";

	$conn->query($sql);
	$conn->close();
?>

	<a href="form.html">HH</a><br>
	<a href="comments.html">BB</a>
	
	<script src="js/jQuery.js"></script>
	<!-- Все скрипты подключаем сюда -->
</body>
</html>