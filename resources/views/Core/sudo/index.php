<?php
    session_start();
        include('assets/configs/config.php');

            if(isset($_POST['devlan_login']))
            {

                $email=$_POST['email'];
                $password=sha1(md5($_POST['password']));
                $stmt=$mysqli->prepare("SELECT email,password, admin_id FROM admin WHERE email=? and password=? ");
                $stmt->bind_param('ss',$email,$password);
                $stmt->execute();
                $stmt -> bind_result($email,$password,$admin_id);
                $rs=$stmt->fetch();

                $_SESSION['admin_id'] = $admin_id;
                //$uip=$_SERVER['REMOTE_ADDR'];
                //$ldate=date('d/m/Y h:i:s', time());
                    if($rs)
                {

                    header("location:devlan_pages_sudo_dashboard.php");
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
                                        <span><img src="../assets/img/devlan-logo.png" alt="Devlan Logo" height="80"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access super user dashboard.</p>
                                </div>

                                <form method ="post">

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

                                

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
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