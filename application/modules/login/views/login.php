<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Fash Mb Login">
    <meta name="keywords" content="Loan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Login</title>
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
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <form  method= "POST" action="<?=base_url()?>Login">
                                        <div class="form-head">
                                            <a href="<?=base_url()?>" class="logo"><img src="<?=base_url()?>assets/fmb.jpg" class="img-fluid" alt="logo"></a>
                                        </div> 
                                        <?= validation_errors("<p style='color: red;'>", "</p>") ?>

                                        <?php
                                            if (isset($flash)) {
                                            echo $flash;
                                        }?>                                       
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="username"  name="email" placeholder="Enter Email here" required value = "<?php echo set_value('email');?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password"  name="pwd"  placeholder="Enter Password here" required value = "<?php echo set_value('pwd');?>" >
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox text-left">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                  <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                                                </div>                                
                                            </div>

                                            <div class="col-sm-6">
                                              <div class="forgot-psw"> 
                                                <a id="forgot-psw" href="#" class="font-14">Forgot Password?</a>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              
                                            </div>
                                        </div>                          
                                      <button type="submit"  value = "signin" name="signin" class="btn  btn-primary btn-lg btn-block font-18">Log in</button>
                                    </form>

                                    <div class="login-or">
                                        <h6 class="text-muted">OR</h6>
                                    </div>
                                    
                                    <p class="mb-0 mt-3">Don't have a account? <a href="<?=base_url()?>registration">Sign up</a></p>

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
    <!-- Start js -->        
    <script src="<?=base_url()?>assets/dashboard/assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/modernizr.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/detect.js"></script>
    <script src="<?=base_url()?>assets/dashboard/assets/js/jquery.slimscroll.js"></script>
    <!-- End js -->

    <script type="text/javascript">
            
            $(".toggle-password").click(function() {

          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $($(this).attr("toggle"));
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
                });
    </script>
</body>

</html>