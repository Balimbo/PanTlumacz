<?php 
// Add comment information to a table

if(isset($_POST['nickname'], $_POST['review'])){
	require_once 'settings.php';

	$name 	= htmlentities($_POST['nickname']);
	$review = htmlentities($_POST['review']);
	$date 	= strval(date('d.m.o G:i'));

	$sql = "INSERT INTO `comment` (`name`, `comment`, `period`) VALUES ('$name', '$review', '$date')";
	
	if($conn->query($sql))
		{
			//	Удача
			$conn->close();
			header("Location: ./");
			exit;
		}
	else 
		{
			//echo "ERROR: " . $conn->error;
			$conn->close();
			header("Location: ./");
			exit;
		}
}
else
	{
		//echo "Something is empty";
		header("Location: ./");
		exit;
	}

?>