 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Admin Panel</title>
 	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i&display=swap" rel="stylesheet">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 	<link rel="stylesheet" href="../css/admin.css">
 </head>
 <body>
 	<?php
 	$servername = "localhost";
	$username 	= "root";
	$password 	= "";

	$conn 		= new mysqli($servername, $username, $password);

	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	
	$conn->query("USE Reviews");

	$count 		= $conn->query("SELECT COUNT(*) FROM `comment`");
	$reviews 	= $conn->query("SELECT * FROM `comment`");//Надо будет добавить выборку именно непроверенных комментариев
	?>

	<header><h3>Admin Panel</h3></header>

	<?php
	echo "<div class=\"uncheked_comments\">";
 	while ($row = $reviews->fetch_row()) { 
 		echo 	"<div class=\"comment_inner\">
					<div class=\"comment_left\">
						<div class=\"comment\">".$row[2]."</div>
						<div class=\"comment_date\">".$row[3]."</div>
					</div>
					<div class=\"comment_right\">
						<div class=\"comment_submit\"><i class=\"fas fa-check\"></i></div>
						<div class=\"comment_delete\"><i class=\"fas fa-times\"></i></div>
						<div class=\"comment_author\">by ".$row[1]."</div>
					</div>
					</div>
 				</div>"; 	
 	}
 	echo "</div>";
 	$conn->close();
 	?>

 	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
 </body>
 </html>