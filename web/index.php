<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transportion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="Assets/Templates/Main/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="Assets/Templates/Main/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/Templates/Main/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Assets/Templates/Main/css/magnific-popup.css">
    <link rel="stylesheet" href="Assets/Templates/Main/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assets/Templates/Main/css/themify-icons.css">
    <link rel="stylesheet" href="Assets/Templates/Main/css/nice-select.css">
    <link rel="stylesheet" href="Assets/Templates/Main/css/flaticon.css">
    <link rel="stylesheet" href="Assets/Templates/Main/css/gijgo.css">
    <link rel="stylesheet" href="Assets/Templates/Main/css/animate.css">
    <link rel="stylesheet" href="Assets/Templates/Main/css/slick.css">
    <link rel="stylesheet" href="Assets/Templates/Main/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="Assets/Templates/Main/css/style.css">
    <!-- <link rel="stylesheet" href="Assets/Templates/Main/css/responsive.css"> -->
</head>

<body>
<?php
include("Assets/Connection/Connection.php");
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
                                    <a href="index.php">
                                    <h2>ScrapHunt</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="index.php">home</a></li>
                                           
                                            <li><a href="#">Registeration <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="Guest/UserRegistration.php">Customer </a></li>
                                                    <li><a href="Guest/shopRegistration.php">Scrap Shop</a></li>
                                                </ul>
                                            </li>
                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment justify-content-end">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="boxed-btn3-line" href="Guest/Login.php">LOGIN</a>
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
                            <h3>Scrap Sale</h3>
                                <a class="boxed-btn3" href="Guest/Login.php">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    
    

    
   

    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="testmonial_active owl-carousel">
                        <?php 
                            $selQry="select * from tbl_feedback f inner join tbl_user u on u.user_id=f.user_id";
                            $row=$Conn->query($selQry);
                            while($data=$row->fetch_assoc())
                            {

                        ?>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="Assets/Templates/Main/img/svg_icon/quote.svg" alt="">
                                </div>
                                <p><?php echo $data["feedback_content"] ?></p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="../Assets/Files/<?php echo $data["user_photo"] ?>" alt="">
                                    </div>
                                    <h3><?php echo $data["user_name"] ?></h3>
                                    <span>User</span>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    
    <!-- contact_location  -->
    <div class="contact_location">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="location_left">
                        <div class="logo">
                            <a href="index.html">
                            <h2>ScrapHunt</h2>
                            </a>
                        </div>
                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>

    <!--/ contact_location  -->


    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#">Air Transportation</a></li>
                                <li><a href="#">Ocean Freight</a></li>
                                <li><a href="#">Ocean Cargo</a></li>
                                <li><a href="#">Logistics</a></li>
                                <li><a href="#">Warehouse Moving</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#"> Testimonials</a></li>
                                <li><a href="#"> Why Us?</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Industries
                            </h3>
                            <ul>
                                <li><a href="#">Chemicals</a></li>
                                <li><a href="#">Automotive</a></li>
                                <li><a href="#"> Consumer Goods</a></li>
                                <li><a href="#">Life Science</a></li>
                                <li><a href="#">Foreign Trade</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="Assets/Templates/Main/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="Assets/Templates/Main/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="Assets/Templates/Main/js/popper.min.js"></script>
    <script src="Assets/Templates/Main/js/bootstrap.min.js"></script>
    <script src="Assets/Templates/Main/js/owl.carousel.min.js"></script>
    <script src="Assets/Templates/Main/js/isotope.pkgd.min.js"></script>
    <script src="Assets/Templates/Main/js/ajax-form.js"></script>
    <script src="Assets/Templates/Main/js/waypoints.min.js"></script>
    <script src="Assets/Templates/Main/js/jquery.counterup.min.js"></script>
    <script src="Assets/Templates/Main/js/imagesloaded.pkgd.min.js"></script>
    <script src="Assets/Templates/Main/js/scrollIt.js"></script>
    <script src="Assets/Templates/Main/js/jquery.scrollUp.min.js"></script>
    <script src="Assets/Templates/Main/js/wow.min.js"></script>
    <script src="Assets/Templates/Main/js/nice-select.min.js"></script>
    <script src="Assets/Templates/Main/js/jquery.slicknav.min.js"></script>
    <script src="Assets/Templates/Main/js/jquery.magnific-popup.min.js"></script>
    <script src="Assets/Templates/Main/js/plugins.js"></script>
    <!-- <script src="Assets/Templates/Main/js/gijgo.min.js"></script> -->
    <script src="Assets/Templates/Main/js/slick.min.js"></script>



    <!--contact js-->
    <script src="Assets/Templates/Main/js/contact.js"></script>
    <script src="Assets/Templates/Main/js/jquery.ajaxchimp.min.js"></script>
    <script src="Assets/Templates/Main/js/jquery.form.js"></script>
    <script src="Assets/Templates/Main/js/jquery.validate.min.js"></script>
    <script src="Assets/Templates/Main/js/mail-script.js"></script>


    <script src="Assets/Templates/Main/js/main.js"></script>




</body>

</html>