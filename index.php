<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PanTłumacz</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/reviews.css">
    <link rel="stylesheet" href="css/testmodal.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
</head>
<body>
        <!--Header-->

     <header>
            <div class="header_menu">
                <div class="header_logo">PanTłumacz</div>
                <nav class="header_nav" id="nav">
                    <div class="header_nav_link">
                        <a href="#" data-scroll="#about">About us</a>
                    </div>
                    <div class="header_nav_link">
                        <a href="#" data-scroll="#can">What we can? </a>
                    </div>
                    <div class="header_nav_link">
                        <a href="#" data-scroll="#price">Price list</a>
                    </div>
                    <div class="header_nav_link">
                        <a href="#" data-scroll="#comments">Comments</a>
                    </div>
                </nav>
            </div>

            <button class="nav-toggle" id="nav_toggle" type="button">
                <span class="nav-toggle_item"></span>
            </button>
            <div class="header_title">
                <h1 class="header_text">Biuro Tłumaczeń</h1>
                <!-- <div class="header_subtext">Lorem ipsum dolor sit amet, consectetur adipisicing.</div> -->
                <a id="modal__request__open" class="main_button" href="#">Make a request</a>

            </div>
        </header>

<!-- Request -->

<div id="modal__request" class="modal__request">
<span class="modal__request__close">&times;</span>

        <form class="modal__request__content" id="data" action="request.php" method="post" enctype='multipart/form-data'>


            <div class="modal__request__inner">

                <h3>Leave your application</h3>

                <!--Languages-->
                <div class="modal__request__languages">

                    <div class="modal__request__fromLang">

                        <p class="modal__request__p" for="modal__request__fromLang">From language</p>

                        <select class="modal__request__select" id="fromLang" name="fromLang" required="required" form="data">
                            <option disabled selected>language</option>
                            <option value="English">English</option>
                            <option value="Polski">Polski</option>
                            <option value="Deutsch">Deutsch</option>
                            <option value="Français">Français</option>
                            <option value="Italiana">Italiana</option>
                            <option value="Русский">Русский</option>
                            <option value="Український ">Український</option>
                        </select>

                    </div>

                    <div class="modal__request__toLang">

                        <p class="modal__request__p" for="modal__request__toLang">To language</p>

                        <select class="modal__request__select" id="toLang" name="toLang" required="required" form="data">
                            <option disabled selected>language</option>
                            <option value="English">English</option>
                            <option value="Polski">Polski</option>
                            <option value="Deutsch">Deutsch</option>
                            <option value="Français">Français</option>
                            <option value="Italiana">Italiana</option>
                            <option value="Русский">Русский</option>
                            <option value="Український ">Український</option>
                        </select>

                    </div>

                </div>


                <!-- Firstname-->
                <div class="modal__request__firstname">
                    <input class="modal__request__input" type="text" id="firstname" name="firstName" placeholder="Enter your name" required="required">
                </div>

                <!--Email-->
                <div>
                    <input class="modal__request__input" type="email" id="Email" name="email" placeholder="Enter your email" required="required">
                </div>

                <!--File-->
                <div>
                    <!-- <p for="file">Attach your file</p> -->
                    <input class="modal__request__input" type="file" id="modal__request__file" name="userfile[]">
                </div>

                <!--Comments-->
                <div>
                    <textarea class="modal__request__textarea" id="massage" name="massage" placeholder="Leave a comment" rows="10" cols="50"></textarea>
                </div>

                <!--Button-->
                <div>
                    <button class="modal__request__button" type="submit" name="submit">Send</button>
                </div>

            </div>


        </form>
    </div>


<!-- About us -->

<section class="section" id="about">
        <div class="container">

            <div class="section__header">
                <h2 class="section__title">About us</h2>
                <div class="section__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, fuga, quaerat. Aperiam repellat atque laborum, quasi libero, alias maiores optio culpa.</p>
                </div>
            </div>

        <div class="abus">

                <div class="abus__item">
                    <div class="abus__inner">
                        <div class="abus__img">
                            <img src="images/like.svg">
                        </div>
                    </div>
                    <div class="abus__text">
                        <h3>Качество</h3>
                        <div class="abus__description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem molestias aperiam, ad, eum perspiciatis error culpa perferendis, quisquam quia officiis quam optio blanditiis consectetur fuga asperiores itaque repellat quod quis!</p>
                        </div>
                    </div>
                </div>

                <div class="abus__item">
                    <div class="abus__inner">
                        <div class="abus__img">
                            <img src="images/clock.svg">
                        </div>
                    </div>
                    <div class="abus__text">
                        <h3>Пунктуальность</h3>
                        <div class="abus__description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem molestias aperiam, ad, eum perspiciatis error culpa perferendis, quisquam quia officiis quam optio blanditiis consectetur fuga asperiores itaque repellat quod quis!</p>
                        </div>
                    </div>
                </div>

                <div class="abus__item">
                    <div class="abus__inner">
                        <div class="abus__img">
                            <img src="images/speed.svg">
                        </div>
                    </div>
                    <div class="abus__text">
                        <h3>Срочность</h3>
                        <div class="abus__description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem molestias aperiam, ad, eum perspiciatis error culpa perferendis, quisquam quia officiis quam optio blanditiis consectetur fuga asperiores itaque repellat quod quis!</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
</section>

    <!--What we can?-->

    <section class="section" id="can">
         <div class="container">
            <div class="section__noText">
            <h2 class="section__title">What we can?</h2>
                    <div class="section__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore architecto, cum sed. Nemo veritatis at ipsam recusandae, autem nesciunt quasi atque enim perferendis alias, mollitia vel qui, voluptatum non sunt.</p>
                    </div>
                </div>
     <div class="can">
         <img class="can__photo1" src="images/about.webp" alt="">
          <div class="can__right">
            <div class="can__title">
              Ulotki reklamowe i strony internetowe
            </div>
            <div class="can__text">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh
   euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. Ut wisis enim
   ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl
   ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh
   euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. Ut wisis enim
   ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl
   ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh
   euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. Ut wisis enim
   ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl
   ut aliquip ex ea commodo consequat.
            </div>
          </div>
     </div>




     <div class="can">

          <div class="can__right">
            <div class="can__title">
              Dokumentacja techniczna i firmowe dokumenty
            </div>
            <div class="can__text">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh
   euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. Ut wisis enim
   ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl
   ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh
   euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. Ut wisis enim
   ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl
   ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh
   euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. Ut wisis enim
   ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl
   ut aliquip ex ea commodo consequat.
            </div>
          </div>
           <img class="can__photo1" src="images/can2.webp" alt="">
     </div>

     <div class="can">
         <img class="can__photo1" src="images/can3.webp" alt="">
          <div class="can__right">
            <div class="can__title">
              Prace dyplomowe i naukowe artykuły
            </div>
            <div class="can__text">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh
   euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. Ut wisis enim
   ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl
   ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh
   euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. Ut wisis enim
   ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl
   ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh
   euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. Ut wisis enim
   ad minim veniam, quis nostrud exerci tution ullamcorper suscipit lobortis nisl
   ut aliquip ex ea commodo consequat.
            </div>
          </div>
     </div>
 </div>
    </section>


<!-- Price list -->

<section class="section" id="price">
        <div class="container">

            <div class="section__noText">
                <h2 class="section__title">Price List</h2>
                <div class="section__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, fuga, quaerat. Aperiam repellat atque laborum, quasi libero, alias maiores optio culpa.</p>
                </div>
            </div>

            <div class="main_price_block">
                <div class="price_block">
                    <div class="price_block_image">
                        <a href="#">
                        <img src="images/rus.webp"  alt="Russian">
                        </a>
                    </div>

                     <div class="price_block_main_text">
                        <div class="price_block_title">
                            <h4>
                                Polski/Rosyjski,<br> Rosyjski/Polski
                            </h4>
                        </div>
                        <div class="price_block_text">
                            <p> tekst zwykły: 19 zł/str.<br>
                                specjalistyczny: 22 zł/str. <br>
                                tłumaczenie ekspresowe - do 15 stron dziennie: wycena indywidualna.<br>
                                jedna strona rozliczeniowa:  1125 znaków ze spacjami.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block">
                    <div class="price_block_image">
                        <a href="#">
                        <img src="images/brit.webp"  alt="Russian">
                        </a>
                    </div>

                    <div class="price_block_main_text">
                        <div class="price_block_title">
                            <h4>
                                Polski/Angielski,<br> Angielski/Polski
                            </h4>
                        </div>
                        <div class="price_block_text">
                        <p> tekst zwykły: 22 zł/str.<br>
                            specjalistyczny: 25 zł/str. <br>
                            tłumaczenie ekspresowe - do 15 stron dziennie: wycena indywidualna.<br>
                            jedna strona rozliczeniowa:  1125 znaków ze spacjami.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="price_block">
                    <div class="price_block_image">
                        <a href="#">
                        <img src="images/fr.webp"  alt="Russian">
                        </a>
                    </div>

                    <div class="price_block_main_text">
                        <div class="price_block_title">
                            <h4>
                                Polski/Francuski,<br> Francuski/Polski
                            </h4>
                        </div>
                        <div class="price_block_text">
                            <p> tekst zwykły: 25 zł/str.<br>
                                specjalistyczny: 28 zł/str. <br>
                            tłumaczenie ekspresowe - do 15 stron dziennie: wycena indywidualna.<br>
                            jedna strona rozliczeniowa:  1125 znaków ze spacjami.
                             </p>
                         </div>
                    </div>
                </div>

                <div class="price_block">
                    <div class="price_block_image">
                        <a href="#">
                        <img src="images/ukr.webp"  alt="Russian">
                        </a>
                    </div>

                     <div class="price_block_main_text">
                        <div class="price_block_title">
                            <h4>
                                Polski/Ukraiński,<br> Ukraiński/Polski
                            </h4>
                        </div>
                        <div class="price_block_text">
                            <p> tekst zwykły: 19 zł/str.<br>
                                specjalistyczny: 22 zł/str. <br>
                                tłumaczenie ekspresowe - do 15 stron dziennie: wycena indywidualna.<br>
                                jedna strona rozliczeniowa:  1125 znaków ze spacjami.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block">
                    <div class="price_block_image">
                        <a href="#">
                        <img src="images/germ.webp"  alt="Russian">
                        </a>
                    </div>

                     <div class="price_block_main_text">
                        <div class="price_block_title">
                            <h4>
                                Polski/Niemiecki,<br> Niemiecki/Polski
                            </h4>
                        </div>
                        <div class="price_block_text">
                            <p> tekst zwykły: 22 zł/str.<br>
                                specjalistyczny: 25 zł/str. <br>
                                tłumaczenie ekspresowe - do 15 stron dziennie: wycena indywidualna.<br>
                                jedna strona rozliczeniowa:  1125 znaków ze spacjami.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block">
                    <div class="price_block_image">
                        <a href="#">
                        <img src="images/ital.webp"  alt="Russian">
                        </a>
                    </div>

                  <div class="price_block_main_text">
                        <div class="price_block_title">
                            <h4>
                                Polski/Włoski, <br>Włoski/Polski
                            </h4>
                        </div>
                         <div class="price_block_text">
                            <p> tekst zwykły: 32 zł/str.<br>
                                specjalistyczny: 35 zł/str. <br>
                                tłumaczenie ekspresowe - do 15 stron dziennie: wycena indywidualna.<br>
                                jedna strona rozliczeniowa:  1125 znaków ze spacjami.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>

<!-- Reviews -->

<section class="section" id="comments">
    <div class="container">

        <div class="section__header">
            <h2 class="section__title">Reviews</h2>
            <div class="section__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ratione illum ab eos, optio nemo eveniet corporis, sapiente omnis dicta! Quaerat laboriosam aut, nihil voluptatum voluptatem assumenda dignissimos cumque, similique.</p>
            </div>
        </div>

        <div class="reviews__window">

            <div class="reviews__arrow">
                <button class="reviews__button">
                    <img class="reviews__pic" src="images/arrow_left.svg">
                </button>
            </div>

            <div class="reviews">

                <div class="reviews__item">
                    <p class="reviews__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam itaque laborum libero, repellat similique repudiandae accusantium, totam possimus nisi molestias, officiis aliquam debitis, earum dicta hic. Similique atque, soluta fuga minus, dolorum, debitis illum doloremque porro consectetur perferendis laborum rem nobis, magnam? Dignissimos at pariatur illum architecto quibusdam fuga nesciunt.
                    </p>
                    <div class="reviews__author">
                    bxr1nG
                    </div>
                </div>

                <div class="reviews__item">
                    <p class="reviews__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolores inventore, quibusdam adipisci voluptates obcaecati sint quas ipsum voluptatum nisi?
                    </p>
                    <div class="reviews__author">
                        Andrej
                    </div>
                </div>

                <div class="reviews__item">
                    <p class="reviews__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At modi dolor officia error, corporis debitis, possimus ut ea voluptatibus. Magni asperiores corporis ut reiciendis ducimus aut tenetur modi voluptate maxime pariatur blanditiis molestiae, impedit, ex?
                    </p>
                    <div class="reviews__author">
                        Balimbo
                    </div>
                </div>

            </div>

            <div class="reviews__arrow">
                <button class="reviews__button">
                    <img class="reviews__pic" src="images/arrow_right.svg">
                </button>
            </div>

        </div>

    </div>
</section>

<!-- Footer -->

<footer>
    <div class="footer__right">
        <a href="#">
            <img src="images/twitter.svg">
        </a>
        <a href="#">
            <img src="images/facebook.svg">
        </a>
        <a href="#">
            <img src="images/mail.svg">
        </a>
    </div>
    <div class="footer__left">
        <p class="footer__links underline-animation">
            <a href="#">Home</a>
            <a href="#">What we can?</a>
            <a href="#">About us</a>
            <a href="#">Price list</a>
            <a href="#">Application</a>
            <a href="#">Comments</a>
        </p>
        <p>PanTłumacz &copy; 2020</p>
    </div>
</footer>

<script type = "text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript" src="js/testmodal.js"></script>
<!-- Все скрипты подключаем сюда -->
   <?php
    require_once 'settings.php';

    //$sql = "CREATE DATABASE `Reviews`";

    $conn->query($sql);
    $conn->query("USE `bearwh_PanTlumatcz`");

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
</body>
</html>
