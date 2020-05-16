<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PanTłumacz</title>
    <link rel="stylesheet" href="fonts/fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/reviews.css">
    <link rel="stylesheet" type="text/css" href="css/testmodal.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/popupWindow.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/weCan.css">
    <link rel="stylesheet" type="text/css" href="css/priceList.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reviewsForm.css">

    <script src="js/wow.min.js"></script>
    <script src="js/wowStart.js"></script>
    <link rel="stylesheet" type="text/css" href="css/preloader.css">
</head>

<body>

    <?php
    require (realpath('settings.php'));

    // Database creation
    $sql = "CREATE TABLE `comment` (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL,
        comment TEXT NOT NULL,
        period VARCHAR(16) NOT NULL,
        isCheked BOOLEAN default FALSE,
        PRIMARY KEY(id))";

    $conn->query($sql);
    $conn->close();
?>


    <!-- Preloader -->
    <div class="loader__inner">
        <div class="loader">
          <div class="loader__bar"></div>
          <div class="loader__bar"></div>
          <div class="loader__bar"></div>
          <div class="loader__bar"></div>
          <div class="loader__bar"></div>
          <div class="loader__ball"></div>
        </div>
    </div>

    <!-- PopUp Window -->

    <div id="myPopup" class="popup">
        <div class="popupContent popupHidden popupVisuallyHidden">
            <div class="popupBody"></div>
        </div>
    </div>

    <!--Header-->

    <header id="header">
        <div class="header_menu">
            <div class="header_logo wow animate__bounceInLeft" data-wow-duration="1s">PanTłumacz</div>
            <nav class="header_nav wow animate__bounceInRight" data-wow-duration="1s" id="nav">
                <div class="header_nav_link">
                    <a href="#" class="animated__link" data-scroll="#about">O nas</a>
                </div>
                <div class="header_nav_link">
                    <a href="#" class="animated__link" data-scroll="#can">Oferta</a>
                </div>
                <div class="header_nav_link">
                    <a href="#" class="animated__link" data-scroll="#price">Cennik</a>
                </div>
                <div class="header_nav_link">
                    <a href="#" class="animated__link" data-scroll="#comments">Opinie</a>
                </div>
                <div class="header_nav_link">
                    <a href="#" class="animated__link" data-scroll="#footer">Kontakt</a>
                </div>
            </nav>
        </div>

        <button class="nav-toggle" id="nav_toggle" type="button">
            <span class="nav-toggle_item"></span>
        </button>
        <div class="header_title">
            <h1 class="header_text wow animate__zoomInUp" data-wow-duration="1s">Biuro Tłumaczeń</h1>
            <div id="modal__request__open" class="button wow animate__zoomInDown" data-wow-duration="1s">
                <a href="#">Prześlij swoją aplikację<span class="shift">›</span></a>
                <div class="mask"></div>
            </div>
        </div>
    </header>

    <!-- Request -->

    <div id="modal__request" class="modal__request">
        <span class="modal__request__close">&times;</span>

        <form class="modal__request__content" id="data" action="request.php" method="post" enctype='multipart/form-data'>

            <span class="modal__request__close modal__request__mobile__close">&times;</span>

            <div class="modal__request__inner">

                <h3>Prześlij swoją aplikację</h3>

                <!--Languages-->
                <div class="modal__request__languages">

                    <div class="modal__request__fromLang">

                        <p class="modal__request__p" for="modal__request__fromLang">Z języka</p>

                        <select class="modal__request__select" id="fromLang" name="fromLang" required="required" form="data">
                            <option disabled selected>zaznacz język</option>
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

                        <p class="modal__request__p" for="modal__request__toLang">Na język</p>

                        <select class="modal__request__select" id="toLang" name="toLang" required="required" form="data">
                            <option disabled selected>zaznacz język</option>
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
                    <input class="modal__request__input" type="text" id="firstname" name="firstName" placeholder="Imię" required="required">
                </div>

                <!--Email-->
                <div>
                    <input class="modal__request__input" type="email" id="Email" name="email" placeholder="Adres E-mail" required="required">
                </div>

                <!--File-->
                <div>
                    <!-- <p for="file">Attach your file</p> -->
                    <input class="modal__request__input" type="file" id="modal__request__file" name="userfile[]">
                </div>

                <!--Comments-->
                <div>
                    <textarea class="modal__request__textarea" id="massage" name="massage" placeholder="Uwagi" rows="4"></textarea>
                </div>

                <!--Button-->
                <div>
                    <button class="modal__request__button" type="submit" name="submit">Wysłać na wycenę</button>
                </div>

            </div>


        </form>
    </div>


    <!-- About us -->

    <section class="section" id="about">
        <div class="container">

            <div class="section__header wow animate__bounceIn" data-wow-duration="1s">
                <h2 class="section__title">O nas</h2>
                <div class="section__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, fuga, quaerat. Aperiam repellat atque laborum, quasi libero, alias maiores optio culpa.</p>
                </div>
            </div>

            <div class="abus">

                <div class="abus__item wow animate__bounceInLeft" data-wow-duration="1s">
                    <div class="abus__inner">
                        <div class="abus__img">
                            <img src="images/like.svg">
                        </div>
                    </div>
                    <div class="abus__text">
                        <h3>JAKOŚĆ</h3>
                        <div class="abus__description">
                            <p>Nasze biuro tłumaczeń w Olsztynie zatrudnia wyłącznie zaufanych specjalistów z wieloletnią praktyką w zawodzie. Uważamy, że najlepsze efekty uzyskuje się przekładając teksty na język ojczysty, więc mamy w swoim zespole tłumaczy z Niemiec, Ukrainy, Francji, Wielkiej Brytanii, Polski, Białorusi oraz Rosji. Każde zlecenie jest realizowane poprzez pracę w grupie, dzięki czemu tekst ulega wielokrotnemu sprawdzeniu, co znacząco redukuje ryzyko błędu. JAKOŚĆ jest zawsze naszym najwyższym priorytetem.</p>
                        </div>
                    </div>
                </div>

                <div class="abus__item wow animate__bounceInUp" data-wow-duration="1s">
                    <div class="abus__inner">
                        <div class="abus__img">
                            <img src="images/clock.svg">
                        </div>
                    </div>
                    <div class="abus__text">
                        <h3>PUNKTUALNOŚĆ</h3>
                        <div class="abus__description">
                            <p> Nie stanowi też dla nas problemu zlecenie z ograniczeniem czasowym – jesteśmy w stanie przygotować nawet 15 stron tekstu dziennie. Na początek, dokonujemy wyceny przesłanych nam treści i określamy termin realizacji zlecenia. Jeśli spotkamy się z aprobatą klienta, przekazujemy tekst osobie, która specjalizuje się w związanej z nim dziedzinie. Potem następuje ponowna weryfikacja poprawności i korekta, przy udziale dwóch innych tłumaczy oraz rodzimego użytkownika języka tekstu oryginalnego.</p>
                        </div>
                    </div>
                </div>

                <div class="abus__item wow animate__bounceInRight" data-wow-duration="1s">
                    <div class="abus__inner">
                        <div class="abus__img">
                            <img src="images/speed.svg">
                        </div>
                    </div>
                    <div class="abus__text">
                        <h3>TERMINOWOŚĆ</h3>
                        <div class="abus__description">
                            <p>Realizacja każdego zadania NA CZAS jest naszym kredo, co pozwala nam cieszyć się dużym gronem w pełni zadowolonych, stałych klientów.Niezależnie od tego, czy zamawiają Państwo w naszym biurze tłumaczeń przekład na język rosyjski, ukraiński, angielski czy inny, tekst zostaje podwójnie sprawdzony przez pracujących u nas NATIVE SPEAKER-ów.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--What we can?-->

    <section class="section" id="can">
        <div class="container">
            <div class="section__noText wow animate__bounceIn" data-wow-duration="1s">
                <h2 class="section__title">Oferta</h2>
                <div class="section__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore architecto, cum sed. Nemo veritatis at ipsam recusandae, autem nesciunt quasi atque enim perferendis alias, mollitia vel qui, voluptatum non sunt.</p>
                </div>
            </div>
            <div class="can wow animate__bounceInLeft" data-wow-duration="1s">
                <img class="can__photo1" src="images/about.webp" height="350" width="500" alt="">
                <div class="can__right">
                    <div class="can__title">
                        Tłumaczenie szeptane
                    </div>
                    <div class="can__text can__text__right">
                        Tłumaczenie szeptane (potocznie zwane też „szeptanką”, od francuskiego słowa „chuchotage”) polega na cichym przekładaniu wypowiedzi przemawiającej osoby dla małej grupy słuchaczy na bieżąco. Technika ta zazwyczaj znajduje zastosowanie w momencie, gdy tylko kilka osób (najlepiej maksymalnie trzy) nie zna języka, w którym prowadzone jest spotkanie. Nasze biuro tłumaczeń z Olsztyna oferuje Państwu tego rodzaju usługę w j. rosyjskim, ukraińskim i polskim.
                    </div>
                </div>
            </div>
            <div class="can wow animate__bounceInRight" data-wow-duration="1s">

                <div class="can__right">
                    <div class="can__title" id="can__title__right">
                        Tłumaczenie konsekutywne
                    </div>
                    <div class="can__text">
                        Tłumaczenie konsekutywne to metoda, w której przekład następuje dopiero w momencie, kiedy prelegent skończy mówić (lub też gdy zrobi pauzę). Zwykle tłumacz stoi bądź siedzi wtedy blisko wypowiadającej się osoby, uważnie jej słucha i notuje najpotrzebniejsze informacje. Gdy mowa się skończy lub zostanie przerwana, przekłada całość wypowiedzi w języku znanym odbiorcom tak, jakby to on przemawiał. Oferta naszego biura tłumaczeń obejmuje również taką usługę, dostępną w trzech językach: polskim, rosyjskim i ukraińskim.
                    </div>
                </div>
                <img class="can__photo1" src="images/can2.webp" height="350" width="500" alt="">
            </div>

            <div class="can wow animate__bounceInLeft" data-wow-duration="1s">
                <img class="can__photo1" src="images/can3.webp" height="350" width="500" alt="">
                <div class="can__right">
                    <div class="can__title">
                        Dokumentacja techniczna i firmowa,<br> prace dyplomowe i naukowe artykuły
                    </div>
                    <div class="can__text can__text__right">
                        Jesteśmy w stanie przełożyć nawet 55 stron dokumentacji technicznej każdego dnia. Może to dotyczyć dowolnego sprzętu lub instalacji – od czajnika po wyciąg szybowy. <br>
                        Bez obaw mogą nam Państwo powierzyć korespondencję firmową, umowy, karty gwarancyjne lub certyfikaty.<br>
                        Częściowo lub w całości pracy licencjackie, magisterskie lub doktorskie. Używanie narzędzi tłumaczenia takich jak MemoQ pozwala na zachowanie terminologii na każdej ilości stron.<br>
                        Mamy spore doświadczenie w tłumaczeniu artykułów technicznych, naukowych, historycznych oraz informacyjnych.
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Price list -->

    <section class="section" id="price">
        <div class="container">

            <div class="section__noText wow animate__bounceIn" data-wow-duration="1s">
                <h2 class="section__title">Cennik</h2>
                <div class="section__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, fuga, quaerat. Aperiam repellat atque laborum, quasi libero, alias maiores optio culpa.</p>
                </div>
            </div>

            <div class="main_price_block">
                <div class="price_block wow animate__bounceInLeft" data-wow-duration="1s">
                    <div class="price_block_image">
                        <a href="#">
                            <img src="images/rus.webp" alt="Russian">
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
                                jedna strona rozliczeniowa: 1125 znaków ze spacjami.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block wow animate__bounceIn" data-wow-duration="1s">
                    <div class="price_block_image">
                        <a href="#">
                            <img src="images/brit.webp" alt="Russian">
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
                                jedna strona rozliczeniowa: 1125 znaków ze spacjami.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block wow animate__bounceInRight" data-wow-duration="1s">
                    <div class="price_block_image">
                        <a href="#">
                            <img src="images/fr.webp" alt="Russian">
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
                                jedna strona rozliczeniowa: 1125 znaków ze spacjami.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block wow animate__bounceInLeft" data-wow-duration="1s">
                    <div class="price_block_image">
                        <a href="#">
                            <img src="images/ukr.webp" alt="Russian">
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
                                jedna strona rozliczeniowa: 1125 znaków ze spacjami.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block wow animate__bounceIn" data-wow-duration="1s">
                    <div class="price_block_image">
                        <a href="#">
                            <img src="images/germ.webp" alt="Russian">
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
                                jedna strona rozliczeniowa: 1125 znaków ze spacjami.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block wow animate__bounceInRight" data-wow-duration="1s">
                    <div class="price_block_image">
                        <a href="#">
                            <img src="images/ital.webp" alt="Russian">
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
                                jedna strona rozliczeniowa: 1125 znaków ze spacjami.
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
            <div class="section__noText wow animate__bounceIn" data-wow-duration="1s">
                <h2 class="section__title">Opinie</h2>
                <div class="section__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, fuga, quaerat. Aperiam repellat atque laborum, quasi libero, alias maiores optio culpa.</p>
                </div>
            </div>

            <div class="reviews">

                <div class="reviews wow animate__bounceIn" data-wow-duration="1s">
                    <div class="slider">
                        <?php
                        require (realpath('settings.php'));

                        if(!$conn->query("USE `bearwh_PanTlumacz`"))
                            {?>
                                <div class="reviews__item">
                                   Комментарии временно недоступны из-за неполадок с сервером. Приносим свои извинения.
                                </div>
                            <?php }
                        else{

                        $sql = "SELECT * FROM `comment` WHERE `isCheked` = TRUE ORDER BY RAND() LIMIT 6";
                        $reviews = $conn->query($sql);

                        $conn->close();

                        while($row = $reviews->fetch_assoc())
                        { ?>
                        <div class="reviews_item">
                            <div class="reviews_text">
                                "<?php echo $row['comment']?>"
                            </div>
                            <div class="reviews_author"><?php echo $row['name']?></div>
                        </div>
                        <?php }} ?>
                    </div>
                </div>

                <!-- Review create -->

                <div class="reviewCreate">
                    <form action="reviews.php" class="reviewCreate__form">

                        <div class="reviewCreate__title">
                            <p>Leave your review</p>
                        </div>

                        <div class="reviewCreate__form__inner">

                                <div id="CommentsNickname">
                                    <input type="text" id="Nickname" name="nickname" maxlength="50" placeholder="Enter your nickname">
                                </div>

                                <div id="CommentsText">
                                    <textarea id="review" name="review" placeholder="Enter your review" rows="12"></textarea>
                                </div>

                                <div id="SubmitForComments">
                                    <button type="submit">Send</button>
                                </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </section>

    <!-- Footer -->

    <footer id="footer">
        <div class="footer__right">
            <a href="#">
                <img src="images/twitter.svg">
            </a>
            <a href="#">
                <img src="images/facebook.svg">
            </a>
            <a href="mailto:hello@mail.ru">
                <img src="images/mail.svg">
            </a>
        </div>
        <div class="footer__left">
            <p class="footer__links">
                <a href="#" class="animated__link" data-scroll="#header">Główna</a>
                <a href="#" class="animated__link" data-scroll="#can">Oferta</a>
                <a href="#" class="animated__link" data-scroll="#about">O nas</a>
                <a href="#" class="animated__link" data-scroll="#price">Cennik</a>
                <a href="#" class="animated__link">Aplikacja</a>
                <a href="#" class="animated__link" data-scroll="#comments">Opinie</a>
            </p>
            <p>PanTłumacz &copy; 2020</p>
        </div>
    </footer>

    <script type="text/javascript" src="js/jQuery.js"></script>
    <script type="text/javascript" src="js/preloader.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/wowStart.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/testmodal.js"></script>
    <script type="text/javascript" src="js/reviews.js"></script>
    <script type="text/javascript" src="js/popupWindow.js"></script>

    <!-- Все скрипты подключаем сюда -->
</body>

</html>
