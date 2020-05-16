 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Admin Panel</title>
 	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i&display=swap" rel="stylesheet">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 	<link rel="stylesheet" href="admin.css?<?echo time();?>">
 </head>
 <body>
 	<?php
 	require_once 'SubDel.php';
	require (realpath('../settings.php'));

	$reviews 	= $conn->query("SELECT * FROM `comment` WHERE `isCheked` = FALSE");     // Selection of data marked "not verified"
	$conn->close();
	?>

	<header><h3>Admin Panel</h3></header>

	<div class="unchecked_comments">
	<?php $counter = 0;
 	while ($row = $reviews->fetch_assoc()) { ?>
 		<div class="comment_inner">

					<div class="comment_left">
						<div class="comment"><?php echo $row['comment']; ?> </div>
						<div class="comment_date"><b><i>Дата оставления отзыва: </i></b><?php echo $row['period']; ?></div>
					</div>

					<div class="comment_right">
						<div class="comment_SubDel_wrapper">
							<a href="index.php?sub=<?php echo $row['id']; ?>"><i class="fas fa-check fa-2x"></i></a>
							<a href="index.php?del=<?php echo $row['id']; ?>"><i data-id="<?php echo $row['id']; ?>" class="fas fa-times fa-2x"></i></a>
						</div>
						<div class="comment_author">by <?php echo $row['name']; ?></div>
					</div>

 				</div>
 		<?php $counter++;
 	}

 	if($counter == 0)
 	    { ?><div class='comment_NO'>Новых отзывов нет =(</div><?php } ?>
	</div>
 </body>
 </html>