<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>assets/fmb.jpg">

   <!-- CSS here -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/slicknav.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/themify-icons.css">
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
                                    <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/fmb.jpg" height= "110" width = "200" alt=""></a>
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
                                <!-- <div class="header-right-btn f-right d-none d-lg-block">
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

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">

                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <!-- <form class="form-contact contact_form" action="<?=base_url()?>contact/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form> -->
                        <form class="form-contact contact_form" action="<?=base_url()?>home/contact_us"  >
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                       
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>0705 306 1718</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->

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
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
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
		
		<!-- Nice-select, sticky -->
        <script src="<?=base_url()?>assets/js/jquery.nice-select.min.js"></script>
		<script src="<?=base_url()?>assets/js/jquery.sticky.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.magnific-popup.js"></script>

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