<?php 
// Add comment information to a table

if(isset($_POST['nickname'], $_POST['review'])){
	require_once 'settings.php';

	$conn->query("USE `bearwh_main`");

	$name 	= htmlentities($_POST['nickname']);
	$review = htmlentities($_POST['review']);
	$date 	= strval(date('d.m.o G:i'));

	$sql = "INSERT INTO `comment` (`name`, `comment`, `period`) VALUES ('$name', '$review', '$date')";
	
	if($conn->query($sql))
		echo "Success";
	else 
		echo "ERROR: " . $conn->error;
}
else
	echo "Something is empty";

$conn->close();
?>