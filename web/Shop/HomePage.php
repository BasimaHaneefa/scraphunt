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

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8">
                        <div class="slider_text text-center justify-content-center">
                          <!-- <p>For Personal & Business</p>--> 
                            <h3>Welcome <?php echo $_SESSION["sname"] ?></h3>
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    
    

    
   

    
   
    
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
<!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>

    <!-- JS here -->
    <script src="../Assets/Templates/Main/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../Assets/Templates/Main/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../Assets/Templates/Main/js/popper.min.js"></script>
    <script src="../Assets/Templates/Main/js/bootstrap.min.js"></script>
    <script src="../Assets/Templates/Main/js/owl.carousel.min.js"></script>
    <script src="../Assets/Templates/Main/js/isotope.pkgd.min.js"></script>
    <script src="../Assets/Templates/Main/js/ajax-form.js"></script>
    <script src="../Assets/Templates/Main/js/waypoints.min.js"></script>
    <script src="../Assets/Templates/Main/js/jquery.counterup.min.js"></script>
    <script src="../Assets/Templates/Main/js/imagesloaded.pkgd.min.js"></script>
    <script src="../Assets/Templates/Main/js/scrollIt.js"></script>
    <script src="../Assets/Templates/Main/js/jquery.scrollUp.min.js"></script>
    <script src="../Assets/Templates/Main/js/wow.min.js"></script>
    <script src="../Assets/Templates/Main/js/nice-select.min.js"></script>
    <script src="../Assets/Templates/Main/js/jquery.slicknav.min.js"></script>
    <script src="../Assets/Templates/Main/js/jquery.magnific-popup.min.js"></script>
    <script src="../Assets/Templates/Main/js/plugins.js"></script>
    <!-- <script src="../Assets/Templates/Main/js/gijgo.min.js"></script> -->
    <script src="../Assets/Templates/Main/js/slick.min.js"></script>



    <!--contact js-->
    <script src="../Assets/Templates/Main/js/contact.js"></script>
    <script src="../Assets/Templates/Main/js/jquery.ajaxchimp.min.js"></script>
    <script src="../Assets/Templates/Main/js/jquery.form.js"></script>
    <script src="../Assets/Templates/Main/js/jquery.validate.min.js"></script>
    <script src="../Assets/Templates/Main/js/mail-script.js"></script>


    <script src="../Assets/Templates/Main/js/main.js"></script>




</body>

</html>