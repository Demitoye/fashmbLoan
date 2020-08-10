<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xpanthersolutions.com/admin-templates/orbiter/html/light-vertical/user-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2019 17:34:16 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Fash Mb Register">
    <meta name="keywords" content="Loan">
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Registration Page</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/fmb.jpg">
  <!-- Start css -->
    <link href="<?=base_url()?>assets/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/dashboard/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/dashboard/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">
        <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box register-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">

                                   
                                    <form action="<?=base_url()?>Registration" method="POST">

                                        <div class="form-head">
                                            <a href="<?=base_url()?>" class="logo"><img src="<?=base_url()?>assets/fmb.jpg" class="img-fluid" alt="logo"></a>
                                        </div> 
                                        <?= validation_errors("<p style='color: red;'>", "</p>") ?>

                                                      

                                        <h4 class="text-primary my-4">Sign Up !</h4>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" placeholder="Enter First name "  value = "<?php echo set_value('first_name');?>" name="first_name"required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" placeholder="Enter Last name"  value = "<?php echo set_value('last_name');?>" name="last_name"required value = "<?php echo set_value('last_name');?>">

                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" id="username" placeholder="Enter Email " value = "<?php echo set_value('email');?>" name="email"required>

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" placeholder="Enter Phone Number "  value = "<?php echo set_value('phone');?>" name="phone"required>

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" placeholder="Enter Home Address" value = "<?php echo set_value('home_address');?>" name="home_address"required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" placeholder="Enter Nature Of Job"  value = "<?php echo set_value('job');?>" name="job"required>

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" placeholder="Enter Work Address "  value = "<?php echo set_value('work_address');?>" name="work_address"required>

                                        </div>

                                        <div class="form-group">
                                          
                                            <input type="Password" class="form-control" id="password" placeholder="Enter Password"  value = "<?php echo set_value('pwd');?>" name="pwd" required>

                                        </div>

                                        <div class="form-group">
                                           
                                             <input type="Password" class="form-control" id="re-password" placeholder="Re-Type Password"  value = "<?php echo set_value('confirm_pwd');?>" name="confirm_pwd" required>


                                        </div>

                                        <div class="form-row mb-3">
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox text-left">
                                                    <input type="checkbox" class="custom-control-input" id="terms" required >
                                                    <label class="custom-control-label font-14" for="terms"><a href="<?=base_url()?>home/terms">I Agree to Terms & Conditions of FASH MB</a></label>
                                                </div>                                
                                            </div>
                                        </div>                          
                                      <button class="btn btn-primary btn-lg btn-block font-18" name="submit" value="submit"> Register</button>
                                    </form>
                                    <p class="mb-0 mt-3">Already have an account? <a href="<?=base_url()?>login">Log in</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    
    <!-- SweetAlert -->
      <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
      <script src="<?=base_url()?>assets/sweetalert/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="<?=base_url()?>assets/sweetalert//sweetalert.css">

    <!-- Start js -->         
    <script src="<?=base_url()?>assets/dashboard/assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/modernizr.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/detect.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/jquery.slimscroll.js"></script>
    <!-- End js -->
</body>

</html>