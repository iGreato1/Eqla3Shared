<?php
session_start();

include_once __DIR__.'/../Include/config.php';
include_once __DIR__.'/../classes/user.php';
include_once __DIR__.'/../Include/app.php';
//
//error_reporting(E_ALL);
//ini_set('display_errors',1);

$user1 = new User();
// header("X-XSS-Protection: 1; mode=block");
// header("X-Frame-Options: DENY");
// header("Strict-Transport-Security: max-age=31536000");
// header("Expect-CT: enforce; max-age=30; report-uri='https://technologys.site.report-uri.io/r/default/ct/enforce'");
// header("X-Content-Type-Options: nosniff");
?>

<!DOCTYPE html>
 <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta -->
    <meta property="og:title" content="موقع Eqla3Tech">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://eqla3tech.com">
    <meta property="og:image" content="موقع Eqla3Tech">
    <meta property="og:title" content="موقع Eqla3Tech">

    <!-- iCons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
          integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo $config['app_url'].'/template' ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $config['app_url'].'/template' ?>/assets/css/desktops.css">
    <link rel="stylesheet" href="<?php echo $config['app_url'].'/template' ?>/assets/css/laptops.css">
    <link rel="stylesheet" href="<?php echo $config['app_url'].'/template' ?>/assets/css/taplates.css">
    <link rel="stylesheet" href="<?php echo $config['app_url'].'/template' ?>/assets/css/mobiles.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $config['app_url'].'/template' ?>/assets/media/favicon//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="body">
<div class="navContainer" dir="rtl">
    <div class="navContent">
        <div class="logoInfo">
            <div class="logoImg">
                <a href="#home"><img src="<?php echo $config['app_url'].'/template' ?>/assets/media/logo/logoWhiteWithOutText.png" alt=""></a>
            </div>
            <div class="logoTitle">
                <a href="#home">Eqla3 Tech</a>
            </div>
            <div class="navMobileMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="ulContainer">
            <ul>
                <li class="home clicked">
                    <a href="#home">
                        <i class="icon fa fa-home" aria-hidden="true"></i>
                        <span class="title">الرئيسية</span>
                    </a>
                </li>
                <li class="sections">
                    <a href="#sections">
                        <i class="icon fa fa-folder-open" aria-hidden="true"></i>
                        <span class="title">الاقسام</span>
                    </a>
                </li>
                <li class="lastNews">
                    <a href="#lastNews">
                        <i class="icon fa fa-file-text" aria-hidden="true"></i>
                        <span class="title">اخر الاخبار</span>
                    </a>
                </li>
                <li class="contact">
                    <a href="#contact">
                        <i class="icon fa fa-envelope" aria-hidden="true"></i>
                        <span class="title">اتصل بنا</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="darkModeContainer">
            <div class="darkMode">
                <div class="" id="dark">
                    <i class="icon darkIcon fa fa-moon-o" aria-hidden="true"></i>
                </div>
                <div class="" id="light">
                    <i class="icon lightIcon fa fa-lightbulb-o" aria-hidden="true"></i>
                </div>
            </div>
            <div class="dateTime" dir="ltr">
                <div class="date"></div>
                <div class="time"></div>
            </div>
        </div>
    </div>
</div>
<div class="mainContainer">
    <div class="topBar">
        <div class="logo">
            <a href="#home" class="forLightDesktop"><img src="<?php echo $config['app_url'].'/template' ?>/assets/media/logo/logoBlue.png" alt=""></a>
            <a href="#home" class="forDarkDesktop"><img src="<?php echo $config['app_url'].'/template' ?>/assets/media/logo/logoWhite.png" alt=""></a>
            <a href="#home" class="forLightMobile"><img src="<?php echo $config['app_url'].'/template' ?>/assets/media/logo/logoBlueWithOutText.png"
                                                        alt=""></a>
            <a href="#home" class="forDarkMobile"><img src="<?php echo $config['app_url'].'/template' ?>/assets/media/logo/logoWhiteWithOutText.png"
                                                       alt=""></a>
        </div>
        <div class="search">
            <form target="" method="get" class="searchContainer">
                <i class="search fa fa-search" aria-hidden="true">
                    <input type="submit">
                </i>
                <input type="text" placeholder="search" name="search" autocomplete="off">
            </form>
        </div>
        <div class="menuMobile">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="content">
        <div class="homePage" id="home">
            <div class="homeContent" dir="rtl">
                <div class="homeInfo">
                    <div class="homeLogoImg">
                        <img class="light" src="<?php echo $config['app_url'].'/template' ?>/assets/media/logo/logoBlue.png" alt="">
                        <img class="dark" src="<?php echo $config['app_url'].'/template' ?>/assets/media/logo/logoWhite.png" alt="">
                    </div>
                    <div class="homeInfoTitle">
                        <h6 dir="ltr"><span class='Eng'>Eqla3 Tech</span> <span>|</span> إقلاع تيك</h6>
                        <p>موقع الكتروني لنشر مقالات وشروحات تقنية</p>
                        <p>شروحات <span class="type"></span></p>
                    </div>
                    <div class="homeBtns">
                        <a href="#sections" class="sectionsBtn">الاقسام</a>
                        <a href="#lastNews" class="lastNewsBtn">اخر الاخبار</a>
                    </div>
                </div>
                <div class="homeBackDesign">
                    <div class="svgContainer">
                        <img class="light" src="<?php echo $config['app_url'].'/template' ?>/assets/media/homeLightShape.svg" alt="">
                        <img class="dark" src="<?php echo $config['app_url'].'/template' ?>/assets/media/homeDarkShape.svg" alt="">
                        <!-- <div id="particles-js"></div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="sectionsPage" id="sections">
            <div class="sectionsContent" dir="rtl">
                <div class="sectionsInfo">
                    <div class="infoContent">
                        <h3>الاقسام</h3>
                        <p>جميع الشروحات تجدها هنا</p>
                    </div>
                    <div class="websiteControls">
                        <a href="#home" class="fa fa-arrow-right" aria-hidden="true"></a>
                        <a href="#lastNews" class="fa fa-arrow-left" aria-hidden="true"></a>
                    </div>
                </div>


<?php include 'message.php' ?>
