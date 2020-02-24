<?php
    session_start();
        include('assets/configs/config.php');

            if(isset($_POST['devlan_login']))
            {

                $email=$_POST['email'];
                $password=sha1($_POST['password']);
                $stmt=$mysqli->prepare("SELECT email,password, user_id FROM users WHERE email=? and password=? ");
                $stmt->bind_param('ss',$email,$password);
                $stmt->execute();
                $stmt -> bind_result($email,$password,$user_id);
                $rs=$stmt->fetch();

                $_SESSION['user_id'] = $user_id;
                //$uip=$_SERVER['REMOTE_ADDR'];
                //$ldate=date('d/m/Y h:i:s', time());
                    if($rs)
                {

                    header("location:devlan_pages_dashboard.php");
                }

                    else
                {
                    $err = "Please Check Your Email Or Password";

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
                                        <span><img src="assets/img/devlan-logo.png" alt="Devlan Logo" height="80"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access your dashboard.</p>
                                </div>

                                <form method ="post"   >

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button  name="devlan_login" class="btn btn-block btn-outline-success" type="submit"> Log In </button>
                                    </div>

                                </form>

                                <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign in with</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                    <!-- First we have implemented github
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        -->
                                        <li class="list-inline-item">
                                            <a href="GitAuth/" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="devlan_pages_recoverpw.php" class=" btn btn-outline-success text-white-50 ml-1">Forgot your password?</a></p>
                                <p class="text-white-50">Don't have an account? <a href="devlan_pages_register.php" class="text-white ml-1"><b>Sign Up</b></a></p>
                                <p class="text-white-50">DevLan take me <a href="https://devlan.martdev.info/" class="text-white ml-1"><b>Home</b></a> Safe</p>

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