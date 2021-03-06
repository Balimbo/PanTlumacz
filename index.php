<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PanTłumacz - tłumaczenia olsztyn | tekstu | artykułów</title>
    <link rel="shortcut icon" href="http://www.pantlumacz.pl/favicon.ico" type="image/x-icon">
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
    <link rel="stylesheet" type="text/css" href="fonts/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/preloader.css">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "logo": "http://www.pantlumacz.pl/image/logo.png",
            "url": "http://www.pantlumacz.pl/",
            "name": "PanTłumacz",
            "description": "Biuro tłumaczeń",
            "telephone": "794922852",
            "email": "biuro@pantlumacz.pl "
        }

    </script>
</head>

<body>

    <?php
    require (realpath('settings.php'));

    // Table creation
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
            <div class="header_logo wow animate__fadeInLeft" data-wow-duration="1s">PanTłumacz</div>
            <nav class="header_nav wow animate__fadeInRight" data-wow-duration="1s" id="nav">
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
                <a href="#">Wyceń tłumaczenie<span class="shift">›</span></a>
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

            <div class="section__header wow animate__fadeIn" data-wow-duration="1s">
                <h3 class="section__title">O nas</h3>
                <div class="section__text">
                    <p>Dlaczego dokładnie my? W tej sekcji możesz zapoznać się z naszymi możliwościami, drobnymi szczegółami naszej pracy.</p>
                </div>
            </div>

            <div class="abus">

                <div class="abus__item wow animate__fadeInLeft" data-wow-duration="1s">
                    <div class="abus__inner">
                        <div class="abus__img">
                            <img src="images/like.svg">
                        </div>
                    </div>
                    <div class="abus__text">
                        <h3>JAKOŚĆ</h3>
                        <div class="abus__description">
                            <div class="abus__description">
                                <p>Nasze biuro tłumaczeń w Olsztynie zatrudnia wyłącznie zaufanych <span>specjalistów</span> z wieloletnią praktyką w zawodzie. Uważamy, że najlepsze efekty uzyskuje się przekładając teksty na język ojczysty, więc mamy w swoim zespole tłumaczy z Niemiec, Ukrainy, Francji, Wielkiej Brytanii, Polski, Białorusi oraz Rosji. Każde zlecenie jest realizowane poprzez <span>pracę w grupie</span>, dzięki czemu tekst ulega wielokrotnemu sprawdzeniu, co znacząco redukuje ryzyko błędu. <span>JAKOŚĆ</span> jest zawsze naszym najwyższym priorytetem.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="abus__item wow animate__fadeInUp" data-wow-duration="1s">
                    <div class="abus__inner">
                        <div class="abus__img">
                            <img src="images/clock.svg">
                        </div>
                    </div>
                    <div class="abus__text">
                        <h3>PUNKTUALNOŚĆ</h3>
                        <div class="abus__description">
                            <p> Nie stanowi też dla nas problemu zlecenie z ograniczeniem czasowym – jesteśmy w stanie przygotować nawet <span>15 stron tekstu dziennie</span>. Na początek, dokonujemy wyceny przesłanych nam treści i określamy termin <span>realizacji zlecenia</span>. Jeśli spotkamy się z aprobatą klienta, przekazujemy tekst osobie, która specjalizuje się w związanej z nim dziedzinie. Potem następuje ponowna weryfikacja poprawności i korekta, przy udziale dwóch innych tłumaczy oraz rodzimego użytkownika języka tekstu oryginalnego.</p>
                        </div>
                    </div>
                </div>

                <div class="abus__item wow animate__fadeInRight" data-wow-duration="1s">
                    <div class="abus__inner">
                        <div class="abus__img">
                            <img src="images/speed.svg">
                        </div>
                    </div>
                    <div class="abus__text">
                        <h3>TERMINOWOŚĆ</h3>
                        <div class="abus__description">
                            <p>Realizacja każdego zadania NA CZAS jest <span>naszym kredo</span>, co pozwala nam cieszyć się dużym gronem w pełni zadowolonych, stałych klientów. Niezależnie od tego, czy zamawiają Państwo w naszym biurze tłumaczeń przekład na język rosyjski, ukraiński, angielski czy inny, tekst zostaje podwójnie sprawdzony przez pracujących u nas <span>NATIVE SPEAKER-ów</span>.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--What we can?-->

    <section class="section" id="can">
        <div class="container">
            <div class="section__noText wow animate__fadeIn" data-wow-duration="1s">
                <h3 class="section__title">Oferta</h3>
                <div class="section__text">
                    <p>Nasze biuro ma dużą listę naszych możliwości. Poniżej możesz zapoznać się z głównymi, ale wiedz, że możemy zrobić znacznie więcej.</p>
                </div>
            </div>
            <div class="can wow animate__fadeInLeft" data-wow-duration="1s">
                <img class="can__photo1" src="images/about.webp" height="350" width="500" alt="">
                <div class="can__right">
                    <div class="can__title">
                        <h2> Dokumentacja techniczna i firmowa,<br> prace dyplomowe i naukowe artykuły</h2>
                    </div>
                    <div class="can__text can__text__right">
                        Jesteśmy w stanie przełożyć nawet 55 stron dokumentacji technicznej każdego dnia. Może to dotyczyć dowolnego sprzętu lub instalacji – od czajnika po wyciąg szybowy.
                        Bez obaw mogą nam Państwo powierzyć korespondencję firmową, umowy, karty gwarancyjne lub certyfikaty.
                        Częściowo lub w całości pracy licencjackie, magisterskie lub doktorskie. Używanie narzędzi tłumaczenia takich jak MemoQ pozwala na zachowanie terminologii na każdej ilości stron.
                        Mamy spore doświadczenie w tłumaczeniu artykułów technicznych, naukowych, historycznych oraz informacyjnych.


                    </div>
                </div>
            </div>
            <div class="can wow animate__fadeInRight" data-wow-duration="1s">

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

            <div class="can wow animate__fadeInLeft" data-wow-duration="1s">
                <img class="can__photo1" src="images/can3.webp" height="350" width="500" alt="">
                <div class="can__right">
                    <div class="can__title">
                        Tłumaczenie szeptane
                    </div>
                    <div class="can__text can__text__right">
                        Tłumaczenie szeptane (potocznie zwane też „szeptanką”, od francuskiego słowa „chuchotage”) polega na cichym przekładaniu wypowiedzi przemawiającej osoby dla małej grupy słuchaczy na bieżąco. Technika ta zazwyczaj znajduje zastosowanie w momencie, gdy tylko kilka osób (najlepiej maksymalnie trzy) nie zna języka, w którym prowadzone jest spotkanie. Nasze biuro tłumaczeń z Olsztyna oferuje Państwu tego rodzaju usługę w j. rosyjskim, ukraińskim i polskim.
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Price list -->

    <section class="section" id="price">
        <div class="container">

            <div class="section__noText wow animate__fadeIn" data-wow-duration="1s">
                <h3 class="section__title">Cennik</h3>
                <div class="section__text">
                    <p>Jeśli mówimy o cenie, uczciwie oceniamy ilość wykonanej pracy i nigdy nie staramy się zapewnić, aby klient był nadmiernie wynagrodzony.</p>
                </div>
            </div>

            <div class="main_price_block">
                <div class="price_block wow animate__fadeInLeft" data-wow-duration="1s">
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
                            <p> tekst zwykły:<span> 19 zł/str</span>.<br>
                                specjalistyczny: <span>22 zł/str</span>. <br>
                                tłumaczenie ekspresowe - <span>do 15 stron dziennie: wycena indywidualna</span>.<br>
                                jedna strona rozliczeniowa: <span>1125 znaków ze spacjami</span>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block wow animate__fadeIn" data-wow-duration="1s">
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
                            <p> tekst zwykły:<span> 22 zł/str</span>.<br>
                                specjalistyczny: <span>25 zł/str</span>. <br>
                                tłumaczenie ekspresowe - <span>do 15 stron dziennie: wycena indywidualna</span>.<br>
                                jedna strona rozliczeniowa: <span>1125 znaków ze spacjami</span>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block wow animate__fadeInRight" data-wow-duration="1s">
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
                            <p> tekst zwykły:<span> 25 zł/str</span>.<br>
                                specjalistyczny: <span>28 zł/str</span>. <br>
                                tłumaczenie ekspresowe - <span>do 15 stron dziennie: wycena indywidualna</span>.<br>
                                jedna strona rozliczeniowa: <span>1125 znaków ze spacjami</span>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block wow animate__fadeInLeft" data-wow-duration="1s">
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
                            <p> tekst zwykły:<span> 19 zł/str</span>.<br>
                                specjalistyczny: <span>22 zł/str</span>. <br>
                                tłumaczenie ekspresowe - <span>do 15 stron dziennie: wycena indywidualna</span>.<br>
                                jedna strona rozliczeniowa: <span>1125 znaków ze spacjami</span>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block wow animate__fadeInUp" data-wow-duration="1s">
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
                            <p> tekst zwykły:<span> 22 zł/str</span>.<br>
                                specjalistyczny: <span>25 zł/str</span>. <br>
                                tłumaczenie ekspresowe - <span>do 15 stron dziennie: wycena indywidualna</span>.<br>
                                jedna strona rozliczeniowa: <span>1125 znaków ze spacjami</span>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="price_block wow animate__fadeInRight" data-wow-duration="1s">
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
                            <p> tekst zwykły:<span> 32 zł/str</span>.<br>
                                specjalistyczny: <span>35 zł/str</span>. <br>
                                tłumaczenie ekspresowe - <span>do 15 stron dziennie: wycena indywidualna</span>.<br>
                                jedna strona rozliczeniowa: <span>1125 znaków ze spacjami</span>.
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
            <div class="section__noText wow animate__fadeIn" data-wow-duration="1s">
                <h3 class="section__title">Opinie</h3>
                <div class="section__text">
                    <p>Zostaw swoją opinię na temat naszego biura, aby przyszli klienci wiedzieli na jakim poziomie pracujemy</p>
                </div>
            </div>

            <div class="reviews">

                <div class="reviews wow animate__fadeInRight" data-wow-duration="1s">
                    <div class="slider">
                        <?php
                        require (realpath('settings.php'));

                        if(!$conn->query("USE `bearwh_PanTlumacz`"))
                            {?>
                        <div class="reviews__item" align="center">
                            Komentarze są tymczasowo niedostępne z powodu problemów z serwerem. Przepraszamy.
                        </div>
                        <?php }
                        else{

                            // Six random entries in the database are selected, after which they are displayed using an associative array.
                            // Each new iteration, the record is transformed into an associative array until the $reviews array ends

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

                <div class="reviewCreate wow animate__fadeInLeft" data-wow-duration="1s">
                    <form action="reviews.php" class="reviewCreate__form" method="post">

                        <div class="reviewCreate__title">
                            <p>Zostaw swoją opinię</p>
                        </div>

                        <div class="reviewCreate__form__inner">

                            <div id="CommentsNickname">
                                <input type="text" id="Nickname" name="nickname" maxlength="50" placeholder="Wpisz swój pseudonim" required>
                            </div>

                            <div id="CommentsText">
                                <textarea id="review" name="review" placeholder="Wpisz swoją recenzję" rows="12" required></textarea>
                            </div>

                            <div id="SubmitForComments">
                                <button type="submit">Wysłać</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->

    <footer id="footer">

        <div class="footer__left">
            <p class="footer__links">
                <a href="#" class="animated__link" data-scroll="#header">Główna</a>
                <a href="#" class="animated__link" data-scroll="#can">Oferta</a>
                <a href="#" class="animated__link" data-scroll="#about">O nas</a>
                <a href="#" class="animated__link" data-scroll="#price">Cennik</a>
                <a href="#" class="animated__link" data-scroll="#header">Aplikacja</a>
                <a href="#" class="animated__link" data-scroll="#comments">Opinie</a>
            </p>

            <p class="footer__copy__pc">PanTłumacz &copy; 2020</p>
        </div>

        <div class="footer__right">

            <div class="footer__nums">

                <p class="footer__phone"><a href="tel: +48794922852" style="background: none;">Telefon: + 48 794 922 852</a></p>

                <p class="footer__acc">Nr konta: 49 1050 1764 1000 0092 3168 3658</p>

            </div>

            <div class="footer__images">

                <a href="#">
                    <img src="images/twitter.svg">
                </a>
                <a href="#">
                    <img src="images/facebook.svg">
                </a>
                <a href="mailto:biuro@pantlumacz.pl">
                    <img src="images/mail.svg">
                </a>

            </div>

        </div>

        <p class="footer__copy__mobile">PanTłumacz &copy; 2020</p>

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
</body>

</html>
