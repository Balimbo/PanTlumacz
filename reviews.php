<?php 
if(isset($_POST['nickname'], $_POST['review'])){
	$servername = "localhost";
	$username 	= "root";
	$password 	= "";

	$conn = new mysqli($servername, $username, $password);

	$conn->query("USE Reviews");

	$name 	= htmlentities($_POST['nickname']);
	$review = htmlentities($_POST['review']);
	$date 	= strval(date('d.m.o G:i'));

	$sql = "INSERT INTO comment(name, comment, period) VALUES ('$name', '$review', '$date')";
	
	if($conn->query($sql))
		echo "Success";
	else 
		echo "ERROR: " . $conn->error;
}
else
	echo "Что-то не заполнено";
?>