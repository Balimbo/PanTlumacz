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
	<a href="admin/admin.php">NN</a>
	
	<script src="js/jQuery.js"></script>
	<!-- Все скрипты подключаем сюда -->
</body>
</html>