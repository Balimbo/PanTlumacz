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
			$conn->close();
			header("Location: ./?data=20");
			exit;
		}
	else 
		{
			//echo "ERROR: " . $conn->error;
			$conn->close();
			header("Location: ./?data=21");
			exit;
		}
}
else
	{
		//echo "Something is empty";
		header("Location: ./data=21");
		exit;
	}

?>