<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transportion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="../Assets/Templates/Main/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../Assets/Templates/Main/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/Templates/Main/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../Assets/Templates/Main/css/magnific-popup.css">
    <link rel="stylesheet" href="../Assets/Templates/Main/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Assets/Templates/Main/css/themify-icons.css">
    <link rel="stylesheet" href="../Assets/Templates/Main/css/nice-select.css">
    <link rel="stylesheet" href="../Assets/Templates/Main/css/flaticon.css">
    <link rel="stylesheet" href="../Assets/Templates/Main/css/gijgo.css">
    <link rel="stylesheet" href="../Assets/Templates/Main/css/animate.css">
    <link rel="stylesheet" href="../Assets/Templates/Main/css/slick.css">
    <link rel="stylesheet" href="../Assets/Templates/Main/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="../Assets/Templates/Main/css/style.css">
    <!-- <link rel="stylesheet" href="../Assets/Templates/Main/css/responsive.css"> -->
</head>

<body>
<?php

include("../Assets/Connection/Connection.php");
include("SessionValidator.php");
?>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
        <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                                <a href="index.php">
                                   <h2>ScrapHunt</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                   
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="UserHome.php">
                                    <h2>ScrapHunt</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                <nav>
                                        <ul id="navigation">
                                            <li><a  href="HomePage.php">home</a></li>
                                            <li><a  href="My profile.php">Profile</a></li>
                                            <li><a  href="ScrapRate.php">ScrapRate</a></li>
                                            <li><a href="#">User Request<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="UserScrapRequest.php">User Scrap Request</a></li>
                                                    <li><a href="AcceptedRequest.php">Accepted Request</a></li>
                                                    <li><a href="RejectedRequest.php">Rejected Request</a></li>
                                                </ul>
                                            </li>
                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment justify-content-end">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="boxed-btn3-line" href="Logout.php">LOGOUT</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

<br><br>