<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>About Us </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>About us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- About Law Start-->
        
        <!-- Services Area Start -->
        <div class="services-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                             <h2>FASH MB</h2>
                        </div>
                            <p style="color: #212529 !important;">FASH MB is a money lending system that helps SALARY EARNERS with loans in times of need. We are here for you; FASH MB.</p>
                                            <br>
                                            <h3 class="section-tittle text-center mb-20">HOW TO APPLY FOR LOAN</h3>
                            <div class="">
                                <ul class="ordered-list">
                                   
                                    <li><span>Become a member</span></li>
                                    <li><span>Provide a valid collateral</span></li>
                                </ul>
                            </div>

                            <br>
                                            <h3 class="section-tittle text-center mb-20">HOW TO BE A MEMBER</h3>
                            <div class="">
                                <ul class="ordered-list">
                                   
                                    <li><span>A passport photo</span></li>
                                    <li><span>A valid identity card</span></li>
                                    <li><span>PHCN bill</span></li>
                                    <li><span>Registration Fee 1000 Naira only</span></li>
                                </ul>
                            </div>
                            <br>

                            <br>
                                            <h3 class="section-tittle text-center mb-20">COLLATERAL REQUIREMENT</h3>
                            <div class="">
                                <ul class="ordered-list">
                                   
                                    <li><span>Before a member can be given a loan, he/she must come with a valid collateral.</span></li>
                                    <li><span>Collateral value must worth 2times the amount of the loan to be given.</span></li>
                                    <li><span>Collateral value would be well examined and checked, if collateral is valuable before member will be given a loan.</span></li>
                                </ul>
                            </div>
                            <br>

                               <br>
                                            <h3 class="section-tittle text-center mb-20">LIST OF AVAILABLE LOANS</h3>
                            <div class="">
                                <ul class="ordered-list">
                                   
                                    <li><span>5,000 – 10,000naira.</span></li>
                                    <li><span>10,000–20,000 naira.</span></li>
                                    <li><span>20,000 – 50,000 naira.</span></li>
                                    
                                </ul>

                                <p style="color: #212529 !important;"> 
                                Highest loan you can get from FASH MB is “50,000”naira with a very valuable collateral.</p>
                            </div>
                            <br>


                              <br>
                                            <h3 class="section-tittle text-center mb-20">TIME RANGE FOR LOANS</h3>
                            <div class="">
                                <ul class="ordered-list">
                                   
                                    <li><span>Loans within the range of 5,000-10,000 given to members must be returned within a time range of TWO WEEKS.</span></li>
                                    <li><span>Loans within the range of 11,000-20,000 given to members must be returned within a time range of THREE WEEKS.</span></li>
                                    <li><span>Loans within the range of 20,000-50,000 given to members must be returned within a time range of A MONTH.</span></li>
                            </div>
                            <br>



                            <p style="color: #212529 !important;"> DON’T WAIT UNTIL YOU’RE BADLY IN NEED OF MONEY. REGISTER WITH US TODAY!!!! FASH MB</p>
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