<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PanTłumacz</title>
</head>
<body>
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