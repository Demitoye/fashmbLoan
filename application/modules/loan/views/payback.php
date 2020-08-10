


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Confirm Page</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/fmb.jpg">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="<?=base_url()?>assets/dashboard/assets/plugins/switchery/switchery.min.css" rel="stylesheet">
    <!-- Sweet Alert css -->
    <link href="<?=base_url()?>assets/dashboard/assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- apex css -->
    <link href="<?=base_url()?>assets/dashboard/assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">
    <!-- jvectormap css -->
    <link href="<?=base_url()?>assets/dashboard/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <!-- Slick css -->
    <link href="<?=base_url()?>assets/dashboard/assets/plugins/slick/slick.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/dashboard/assets/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/dashboard/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/dashboard/assets/css/flag-icon.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/dashboard/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">    

    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <a href="<?=base_url()?>" class="logo logo-large"><img src="<?=base_url()?>assets/fmb.jpg" class="img-fluid" alt="logo"></a>
                    <a href="<?=base_url()?>" class="logo logo-small"><img src="<?=base_url()?>assets/fmb.jpg" class="img-fluid" alt="logo"></a>
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <ul class="vertical-menu" style="font-size:21px !important; ">

                        <li>
                            <a href="<?=base_url()?>dashboard" >
                                <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/home.svg" class="img-fluid" alt="home"><span>Dashboard</span>
                            </a>
                            
                        </li>

                        <li>
                            <a href="<?=base_url()?>dashboard/account">
                                <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/user.svg" class="img-fluid" alt="Account"><span>Account</span>
                            </a>
                            
                        </li>

                         <li>
                            <a href="<?=base_url()?>loan">
                                <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/message-square.svg" class="img-fluid" alt="Account"><span>Apply For Loan</span>
                            </a>
                            
                        </li>

                           <li>
                            <a href="<?=base_url()?>loan/history">
                                <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/form_elements.svg" class="img-fluid" alt="Account"><span>Loan History</span>
                            </a>
                            
                        </li>

                        <li>
                            <a href="<?=base_url()?>home/aboutus">
                                <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/book.svg" class="img-fluid" alt="Account"><span>About Fash Mb</span>
                            </a>
                            
                        </li>

                        <li>
                            <a href="<?=base_url()?>home/contact">
                                <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/message-square.svg" class="img-fluid" alt="Account" style= "color: #E74902!important;"><span>Contact Us</span>
                            </a>
                            
                        </li>

                        <li>
                            <a href="<?=base_url()?>home/logout">
                                <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/logout.svg" class="img-fluid" alt="Account"><span>Logout</span>
                            </a>
                            
                        </li>


                                            
                    </ul>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->


        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="<?=base_url()?>" class="mobile-logo"><img src="<?=base_url()?>assets/fmb.jpg" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                           <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                           <img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">

                                                             
                                
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                          <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?=base_url()?>assets/dashboard/assets/images/users/profile.svg" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                      <h5><?=$user?></h5>
                                                    </div>
                                                </div>
                                                <div class="userbox">
                                                    <ul class="list-unstyled mb-0">
                                                        
                                                                                                              
                                                        <li class="media dropdown-item">
                                                            <a href="<?=base_url()?>home/logout" class="profile-icon"><img src="<?=base_url()?>assets/dashboard/assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div> 
                <!-- End row -->
            </div>
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=base_url()?>dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item"><a>Loan</a></li>
                               
                            </ol>
                        </div>
                    </div>
                   
                </div>          
            </div>
            <!-- End Breadcrumbbar -->

            <!-- Start Contentbar -->    
            <div class="contentbar">              
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12 ">
                        <!-- Start row -->
                        <div class="row">
                           
                            <!-- Start col -->

                          
                            <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h2 class="card-title" style="text-align: center;">Steps to pay back</h2>
                            </div>
                            <div class="card-body">
                                
                                <div class="table-responsive m-b-30">
                                    <table class="table table-borderless">
                                        
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Send the money to the FASH MB account number on the slip below</td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Click on Paid</td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Wait while we confirm your payment.</td>
                                                
                                            </tr>


                                        </tbody>

                                    </table>
                                    <b>Note: Add the invoice number present on the payment slip below while paying.<b>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End col -->

                            
                        </div>
                        <!-- End row -->                        
                    </div>
                    <!-- End col --> 
                    
                </div>
                <!-- End row -->
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12 col-xl-4">
                        <!-- Start row -->
                        <div class="row">
                           
                            
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End col -->
                    
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">              
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-12 ">
                        <!-- Start row -->
                        <div class="row">
                           
                            
                    
                </div>
                <!-- End row -->
                <!-- End row -->
                <div class="row justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-12 col-lg-10 col-xl-10">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="invoice">
                                    <div class="invoice-head">
                                        <div class="row">
                                            <div class="col-12 col-md-7 col-lg-7">
                                                <div class="invoice-logo">
                                                    <img src="<?=base_url()?>assets/fmb.jpg" class="img-fluid" alt="invoice-logo">
                                                </div>
                                                <h4>FASH MB</h4>
                                                <!-- <p>The Complete Web Solutions Partner</p>
                                                <p class="mb-0">21st Street, Titanium Tower, Times Square, Nevada Campus, New Jersey - 55986 USA.</p -->
                                            </div>
                                            <div class="col-12 col-md-5 col-lg-5">
                                                <div class="invoice-name">
                                                    <h5 class="text-uppercase mb-3">Payment Slip</h5>
                                                    <p class="mb-1"> Invoice Number :<?=$key?></p>
                                                    <p class="mb-0"><?=date("D M Y"); ?></p>
                                                    <h4 class="text-success mb-0 mt-3"><?=$amount?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="invoice-billing">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 col-lg-7">
                                                <div class="invoice-address">
                                                    <h6 class="mb-3">User Details</h6>
                                                    <h6 class="text-muted">Name:<?=$user?> <?=$lastname?></h6>
                                                    <ul class="list-unstyled">
                                                        <br/>
                                                        <li>Address:<?=$home?></li> 
                                                        <br/> 
                                                        <li>Phone Number:<?=$phone?></li>  
                                                        <br/>
                                                        <li>Email: <?=$email?></li>  
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-12 col-md-4 col-lg-5">
                                                <div class="invoice-address">
                                                    <div class="card">
                                                        <div class="card-body bg-info-rgba text-center">
                                                            <h6 style="text-align: center !important;">FASH MB Account</h6>
                                                            <p>Bank Name:&nbsp First Bank</p>
                                                            <p>Account Name:&nbsp Fash Mb</p>
                                                            <p>Account Number:&nbsp 0231888987</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    
                                    <div class="invoice-summary-total">
                                        <div class="row">
                                            <div class="col-md-12 order-2 order-lg-1 col-lg-5 col-xl-6">

                                                

                                            </div>
                                            <div class="col-md-12 order-1 order-lg-2 col-lg-7 col-xl-6">
                                                <div class="order-total table-responsive ">
                                                    <table class="table table-borderless text-right">
                                                        <tbody>
                                                            <tr>
                                                                <td>Loan Amount :</td>
                                                                <td>#<?=$amount?>.00</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                                <td>Interest (20%):</td>
                                                                <td>#<?=$percentage?>.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="f-w-7 font-18"><h5>Payback Amount :</h5></td>
                                                                <td class="f-w-7 font-18"><h5>#<?=$expected_balance?>.00</h5></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-meta">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="invoice-meta-box">
                                                    <h6 class="mb-3">Terms & Conditions</h6>
                                                    <ul class="pl-3">
                                                        <li>Money must be payed back before or on <?=$payment_date?>.</li>  
                                                        
                                                        <li>
                                                            Check <a href= "<?=base_url()?>home/terms">terms and condition</a>
                                                        </li>  
                                                         
                                                    </ul>
                                                </div>

                                              
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="invoice-meta-box">
                                                   
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                <div class="invoice-meta-box text-right">
                                                    <h6 class="mb-3">Contact Us</h6>
                                                    <ul class="list-unstyled">
                                                        <li><i class="feather icon-mail mr-2"></i>demo@example.com</li>  
                                                        <li><i class="feather icon-phone mr-2"></i>0705 306 1718</li>
                                                        <li><i class="feather icon-instagram"></i> @fashmb</li>    
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="invoice-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <p class="mb-0">Thank you for using FASH MB.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="invoice-footer-btn">
                                                     <a href="<?=base_url()?>loan/history" class="btn btn-danger-rgba py-1 font-16"><i class="feather icon-delete mr-2"></i>Cancel</a>
                                                    
                                                    <a href="<?=base_url()?>loan/payment_confirm/<?=$key?>" class="btn btn-success-rgba py-1 font-16"><i class="feather icon-send mr-2"></i>Paid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->

            <br>

            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    
                                <p>
                                    <a href="<?=base_url()?>home/terms" style="color: #8ba4b1 !important;">Terms & Conditions</a>|
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                                </p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->        
    <script src="<?=base_url()?>assets/dashboard/assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/modernizr.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/detect.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/jquery.slimscroll.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/vertical-menu.js"></script>
    <!-- Switchery js -->
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/switchery/switchery.min.js"></script>
    <!-- Apex js -->
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/apexcharts/irregular-data-series.js"></script>
    <!-- Vector Maps js -->
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Slick js -->
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/slick/slick.min.js"></script>
    <!-- Sweet-Alert js -->
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/custom/custom-sweet-alert.js"></script>
    <!-- Dashboard js -->
    <script src="<?=base_url()?>assets/dashboard/assets/js/custom/custom-dashboard-ecommerce.js"></script>
    <!-- Core js -->
    <script src="<?=base_url()?>assets/dashboard/assets/js/core.js"></script>
    <!-- End js -->
</body>

</html>