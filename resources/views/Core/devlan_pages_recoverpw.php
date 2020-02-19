<?php
    session_start();
        include('assets/configs/config.php');
            if(isset($_POST['devlan_reset_password']))
                {
                
                $user_email=$_POST['user_email'];
                $token=$_POST['token'];
                
                //sql to inset the values to the database
                $query="INSERT INTO password_resets (user_email, token) VALUES (?,?)";
                $stmt = $mysqli->prepare($query);
                //bind the submitted values with the matching columns in the database.
                $rc=$stmt->bind_param('ss', $user_email, $token);
                $stmt->execute();

                    if($rc)
                    {
                        $success = "Mail With Recovery Instructions Send To Your Email.";

                    }

                    else
                    {
                        $err = "Please Try Again Later";
                    }




                }

?>
<!DOCTYPE html>
<html lang="en">

    <!--Head-->
    <?php include("assets/_partials/head.php");?>
    <!-- /.Head-->

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="javascript: void(0);">
                                        <span><img src="assets/img/logo-white-xx.png" alt="Devlan Logo" height="60"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your email address to recover your password.</p>
                                </div>

                                <form method ="post" >

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" name="user_email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3" style="display:none"> 
                                        <label for="password">Token</label>
                                            <?php 
                                                $length = 20;    
                                                $number =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                                            ?>
                                        <input class="form-control" name="token" type="text" value="DevLan_Password_Reset_Token:<?php echo $number;?>" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button  name="devlan_reset_password" class="btn btn-block btn-outline-success" type="submit"> Reset Password </button>
                                    </div>

                                </form>
<!--
                                <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign in with</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div>
-->
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="index.php" class=" btn btn-outline-success text-white-50 ml-1">Remembered Your Password?</a></p>
                                <p class="text-white-50">Don't have an account? <a href="devlan_pages_register.php" class="text-white ml-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2019 - <?php echo date('Y');?> &copy; DevLan Platform Version 2.0 . Proudly Powered by <a href="https://martdev.info/" target="_blank" class="text-white-50">MartDevelopers</a> 
        </footer>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>