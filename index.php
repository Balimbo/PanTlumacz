<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PanTłumacz</title>
</head>
<body>
<?php 
	$servername = "localhost";
	$username 	= "root";
	$password 	= "";

	$conn = new mysqli($servername, $username, $password);

	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "CREATE DATABASE Reviews";

	$conn->query($sql);
	$conn->query("USE Reviews");

	$sql = "CREATE TABLE comment(
		id INT NOT NULL AUTO_INCREMENT,
		name varchar (30) NOT NULL,
		comment TEXT NOT NULL,
		period varchar (20) NOT NULL,
		isCheked boolean default 0,
		PRIMARY KEY(id))";

	$conn->query($sql);
?>
	<a href="form.html">HH</a>
	<script src="js/jQuery.js"></script>
	<!-- Все скрипты подключаем сюда -->
</body>
</html>