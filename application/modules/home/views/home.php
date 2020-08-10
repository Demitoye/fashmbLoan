<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" href="<?=base_url()?>assets/fmb.jpg">

		<!-- CSS here -->
            <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="<?=base_url()?>assets/css/slicknav.css">
            <link rel="stylesheet" href="<?=base_url()?>assets/css/flaticon.css">
            <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.min.css">
            <link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">
            <link rel="stylesheet" href="<?=base_url()?>assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?=base_url()?>assets/css/themify-icons.css">
            <link rel="stylesheet" href="<?=base_url()?>assets/css/slick.css">
            <link rel="stylesheet" href="<?=base_url()?>assets/css/nice-select.css">
            <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?=base_url()?>assets/fmb.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
                <div class="main-header  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo"> 
                                    <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/fmb.jpg" height= "11" width = "20" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">  
                                            <li class="active"><a href="<?=base_url()?>">Home</a></li>
                                            <li><a href="<?=base_url()?>home/aboutus">About</a></li>
                                            
                                            <li><a href="<?=base_url()?>home/contact">Contact</a></li>

                                            <?php

                                                $user_id = $this->site_security->_get_user_id();
                                                     if (!is_numeric($user_id)) {  ?>

                                            <li><a href="<?=base_url()?>login">Login</a></li>
                                            <li><a href="<?=base_url()?>registration">Register</a></li>
                                            <?php }else{?>
                 

                                            <li><a href="<?=base_url()?>dashboard">Dashboard</a></li>
                                            <li><a href="<?=base_url()?>home/logout">Log out</a></li>

                                            <?php }?>

                                        </ul>
                                    </nav>
                                </div>
                               <!--  <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="#" class="btn header-btn">+880.762.009.00 </a>
                                </div> -->
                            </div>
                            </div>   
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area slider-height" data-background="assets/img/hero/h1_hero.jpg">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero__caption">
                            <p data-animation="fadeInLeft" data-delay=".2s">Achieve your financial goal</p>
                            <h1 data-animation="fadeInLeft" data-delay=".5s">Small Business Loans For Daily Expenses.</h1>
                            <!-- Hero Btn -->

                            <?php 
                                $user_id = $this->site_security->_get_user_id();
                                if (!is_numeric($user_id)) {  ?>
                            <a href="<?=base_url()?>login" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Apply for Loan</a>
                            <?php }else{?>
                                 <a href="<?=base_url()?>loan" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Apply for Loan</a>
                              <?php }?>
                        </div>
                        <div class="hero__img">
                            <img src="<?=base_url()?>assets/2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero__caption">
                            <p data-animation="fadeInLeft" data-delay=".2s">Achieve your financial goal</p>
                            <h1 data-animation="fadeInLeft" data-delay=".5s">Small Business Loans For Daily Expenses.</h1>
                            <!-- Hero Btn -->
                            <?php 
                                $user_id = $this->site_security->_get_user_id();
                                if (!is_numeric($user_id)) {  ?>
                            <a href="<?=base_url()?>login" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Apply for Loan</a>
                            <?php }else{?>
                                 <a href="<?=base_url()?>loan" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Apply for Loan</a>
                              <?php }?>
                        </div>
                        <div class="hero__img">
                            <img src="<?=base_url()?>assets/Give away.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-footer Start -->
            <div class="slider-footer section-bg d-none d-sm-block" style="background-color: #E74902 !important;">
                <div class="footer-wrapper">
                    <!-- single -->
                    <div class="single-caption">
                        <div class="single-img">
                            <img src="assets/img/hero/hero_footer.png" alt="">
                        </div>
                    </div>
                    <!-- single -->
                    <div class="single-caption" >
                        <div class="caption-icon">
                            <span class="flaticon-clock"></span>
                        </div>
                        <div class="caption">
                            <p>Quick Loan </p>
                            <p>Approvals</p>
                        </div>
                    </div>
                    <!-- single -->
                    <div class="single-caption">
                        <div class="caption-icon">
                            <span class="flaticon-like"></span>
                        </div>
                        <div class="caption">
                            <p>User-Friendly & Easy</p>
                            <p>Loans</p>
                        </div>
                    </div>
                    <!-- single -->
                    <div class="single-caption">
                        <div class="caption-icon">
                            <span class="flaticon-money"></span>
                        </div>
                        <div class="caption">
                            <p>Budget Friendly</p>
                            <p>Loans</p>
                        </div>
                    </div>
                  
                </div>
            </div>
            <!-- slider-footer End -->

        </div>
        <!-- slider Area End-->
 
        <!-- Services Area Start -->
        <div class="services-area pt-150 pb-150" data-background="assets/img/gallery/section_bg02.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Services that we are providing</span>
                            <h2>High Performance Services For All Industries.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-work"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Business Loan</a></h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-loan"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Commercial Loans</a></h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-loan-1"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Construction Loans</a></h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-like"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Secured Loans</a></h5>
                                <p></p>
                            </div>
                        </div>
                    </div>

                 </div>
            </div>
        </div>
        <!-- Services Area End -->
        
        
        
        

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">

                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">

                                <p>
                                    <a style="color: #8ba4b1 !important;" href="#"><a href="<?=base_url()?>home/terms" style="color: #8ba4b1 !important;">Terms & Conditions</a>
                                </p> 

                                <p>
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top"  >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt" ></i></a>
    </div>


    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="<?=base_url()?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="<?=base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?=base_url()?>assets/js/popper.min.js"></script>
        <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="<?=base_url()?>assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
        <script src="<?=base_url()?>assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="<?=base_url()?>assets/js/wow.min.js"></script>
		<script src="<?=base_url()?>assets/js/animated.headline.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="<?=base_url()?>assets/js/jquery.nice-select.min.js"></script>
		<script src="<?=base_url()?>assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="<?=base_url()?>assets/js/contact.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.form.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.validate.min.js"></script>
        <script src="<?=base_url()?>assets/js/mail-script.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="<?=base_url()?>assets/js/plugins.js"></script>
        <script src="<?=base_url()?>assets/js/main.js"></script>
        
    </body>
</html>