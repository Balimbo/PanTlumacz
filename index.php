<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PanTłumacz</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/langchange.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
</head>
<body>
	<header>
			<div class="header_menu">
				<div class="header_logo">PanTłumacz</div>
				<nav class="header_nav">
					<a class="header_nav_link" href="#">Languages</a>
					<a class="header_nav_link" href="#">What we can?</a>
					<a class="header_nav_link" href="#">About us</a>
					<a class="header_nav_link" href="#">Price list</a>
					<a class="header_nav_link" href="#">Application</a>
					<a class="header_nav_link" href="#">Comments</a>
				</nav>
			</div>

			<div class="header_title">
				<h1 class="header_text">Translation Agency</h1>
				<a class="main_button" href="#">Make a request</a>
				
			</div>
	</header>

	<!-- Language change -->

	<section class="section">
        <div class="container">

            <div class="section__header">
                <h3 class="section__suptitle">Lorem ipsum</h3>
                <h2 class="section__title">Lorem ipsum dolor</h2>
                <div class="section__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, fuga, quaerat. Aperiam repellat atque laborum, quasi libero, alias maiores optio culpa. Vel reiciendis inventore sed nisi libero, soluta ex velit, temporibus voluptatem, deleniti illo perferendis nam nulla nostrum eum molestias quam ipsam, dolor minima quae numquam quasi! Ad, minima deleniti!</p>
                </div>
            </div>

            <div class="card">

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="images/rus.png" height="300px" width="300px">
                        </div>
                        <div class="card__text">Polski/Rosyjski, Rosyjski/Polski</div>
                    </div>
                </div>

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="images/germ.png" height="300px" width="300px">
                        </div>
                        <div class="card__text">Polski/Niemiecki, Niemiecki/Polski</div>
                    </div>
                </div>

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="images/fr.png" height="300px" width="300px">
                        </div>
                        <div class="card__text">Polski/Francuski, Francuski/Polski</div>
                    </div>
                </div>

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="images/ukr.png" height="300px" width="300px">
                        </div>
                        <div class="card__text">Polski/Ukraiński, Ukraiński/Polski</div>
                    </div>
                </div>

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="images/brit.png" height="300px" width="300px">
                        </div>
                        <div class="card__text">Polski/Angielski, Angielski/Polski</div>
                    </div>
                </div>

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="images/ital.png" height="300px" width="300px">
                        </div>
                        <div class="card__text">Polski/Włoski, Włoski/Polski</div>
                    </div>
                </div>

            </div>

        </div>
    </section>

<?php 
	require_once 'settings.php';

	$sql = "CREATE DATABASE `Reviews`";

	$conn->query($sql);
	$conn->query("USE `Reviews`");

	// Database creation
	$sql = "CREATE TABLE `comment` (
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
	
	<script src="js/jQuery.js"></script>
	<!-- Все скрипты подключаем сюда -->
</body>
</html>