


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Loan History</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/fmb.jpg">
   <!-- Start css -->
    <!-- Switchery css -->
    <link href="<?=base_url()?>assets/dashboard/assets/plugins/switchery/switchery.min.css" rel="stylesheet">
    <!-- DataTables css -->
    <link href="<?=base_url()?>assets/dashboard/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/dashboard/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- RWD Table css -->
    <link href="<?=base_url()?>assets/dashboard/assets/plugins/rwd-table-patterns/rwd-table.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive Datatable css -->
    <link href="<?=base_url()?>assets/dashboard/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
                        <h4 class="page-title">Dashboard</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=base_url()?>dashboard">Dashboard</a></li>
                               
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
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h3 class="card-title" style="text-align: center;">Loan History</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Loan ID</th>
                                            <th>Amount</th>
                                            <th>Payback Amount</th>
                                            <th>Loan Date</th>
                                            <th>Return Date</th>
                                            <th>Loan Status</th>
                                            <th>PayBack</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php $count = 1;
                                        foreach ($query2->result() as $row2) {

                                            $status = $row2->status;
                                            $code = $row2->unique_code;
                                            if($status == 1){
                                                $loan_status = "Pending";
                                                $color = "#E74902";
                                                $pay= "---";
                                               
                                            }elseif($status == 2){

                                                $loan_status = "Active Loan";
                                                $color ="Green";
                                                $pay = '<a href = "payback_loan/'.$code.'">Yes</a>';
                                               

                                            }elseif($status == 3){

                                                $loan_status = "Paid Back";
                                                $color = "Gray";
                                                $pay = 'Paid';
                                            }elseif($status == 4){

                                                $loan_status = "Payback Confirmation";
                                                $color = "Black";
                                                $pay = 'Hold';
                                            }elseif($status == 0){

                                                $loan_status = "Loan Due";
                                                $color = "Red";
                                               $pay = '<a href = "payback_loan/'.$code.'">Yes</a>';
                                            }?>
                                            
                                        <tr>
                                            <td><?=$count++?></td>
                                            <td><?=$row2->unique_code?></td>
                                            <td><?=$row2->amount?></td>
                                            <td><?=$row2->expected_payment?></td>
                                            <td> <?=$row2->date?> </td>

                                            <td><?=$row2->return_date?></td>

                                            <td style="background-color:<?=$color?>; color: white;"><?=$loan_status?></td>
                                            <td><?=$pay?></td>

                                        </tr>
                                        <?php }?>
                                        
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col --> 
                    
                </div>
                <!-- End row -->
            </div>

                
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
    <!-- Datatable js -->
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/datatables/jszip.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/datatables/buttons.colVis.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/plugins/rwd-table-patterns/rwd-table.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/custom/custom-table-datatable.js"></script>
    <!-- Core js -->
    <script src="<?=base_url()?>assets/dashboard/assets/js/core.js"></script>
    <!-- End js -->
</body>

</html>