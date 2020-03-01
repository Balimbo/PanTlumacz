<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

conn->query("USE Reviews");

$name = $_POST['name'];
$review = $_POST['review'];
$date = date('d.m.o G:i');

$sql = "INSERT INTO reviews(name, comment, period) VALUES ($name, $review, $date)";
 
conn->query($sql);
 ?>