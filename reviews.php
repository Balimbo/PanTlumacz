<?php 
// Add comment information to a table

if(isset($_POST['nickname'], $_POST['review'])){
	require_once 'settings.php';

	$name 	= htmlentities($_POST['nickname']);
	$review = htmlentities($_POST['review']);
	$date 	= strval(date('d.m.o G:i'));

	// Insert data into table namely 'comment'
	$sql = "INSERT INTO `comment` (`name`, `comment`, `period`) VALUES ('$name', '$review', '$date')";
	
	if($conn->query($sql))
		{
			$conn->close();
			// code 20 - success
			header("Location: ./?data=20");
			exit;
		}
	else 
		{
			//echo "ERROR: " . $conn->error;
			$conn->close();
			// code 21 - sql query error
			header("Location: ./?data=21");
			exit;
		}
}
else
	{
		//echo "Something is empty";
		// Impossible error. Added for test
		header("Location: ./data=21");
		exit;
	}

?>