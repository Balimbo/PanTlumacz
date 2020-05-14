 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Admin Panel</title>
 	<link rel="icon" href="http://pantlumacz.pl/favicon.ico" type="image/x-icon">
 	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i&display=swap" rel="stylesheet">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 	<link rel="stylesheet" href="admin.css?<?echo time();?>">
 </head>
 <body>
 	<?php
 	require_once 'SubDel.php';
	require (realpath('../settings.php'));

	$reviews 	= $conn->query("SELECT * FROM `comment` WHERE `isCheked` = FALSE");     // Selection of data marked "not verified"
	?>

	<header><h3>Admin Panel</h3></header>

	<?php
	echo "<div class=\"unchecked_comments\">";
	$counter = 0;
 	while ($row = $reviews->fetch_assoc()) { 
 		echo 	"<div class=\"comment_inner\">

					<div class=\"comment_left\">
						<div class=\"comment\">".$row['comment']."</div>
						<div class=\"comment_date\"><b><i>Дата оставления отзыва:</i></b> ".$row['period']."</div>
					</div>

					<div class=\"comment_right\">
						<div class=\"comment_SubDel_wrapper\">
							<a href=\"index.php?sub=".$row['id']."\"><i class=\"fas fa-check fa-2x\"></i></a>
							<a href=\"index.php?del=".$row['id']."\"><i data-id=\"".$row['id']."\" class=\"fas fa-times fa-2x\"></i></a>
						</div>
						<div class=\"comment_author\">by ".$row['name']."</div>
					</div>

 				</div>";
 		$counter++;
 	}

 	if($counter == 0)
 	    echo "<div class='comment_NO'>Новых отзывов нет =(</div>";

 	echo "</div>";
 	$conn->close();
 	?>
 </body>
 </html>