<?php
    session_start();
        include('assets/configs/config.php');

            if(isset($_POST['devlan_signup']))
            {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $user_number = $_POST['user_number'];
                $password=sha1($_POST['password']);//enc this shit 

                $query="INSERT  INTO users (email, username, password, user_number) VALUES (?,?,?,?)";
                $stmt = $mysqli->prepare($query);
                //bind the submitted values with the matching columns in the database.
                $rc=$stmt->bind_param('ssss', $email, $username, $password, $user_number);
                $stmt->execute();

                    if($rc)
                        {
                            $success = "Account Created, Welcome To Devlan";
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
                                    <p class="text-muted mb-4 mt-3">Create an account with us</p>
                                </div>

                                <form method ="post" name="devlan_Signup" id="devlan_Signup_WithValidation" onSubmit="return valid();" >
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">UserName</label>
                                        <input class="form-control" name="username" type="text" id="emailaddress" required="" placeholder="Give Us Your Unique Geek Name">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Give Us Your Email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" name="password" type="password" required=""  placeholder="Secure Your Account With A Strong Password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Confirm Password</label>
                                        <input class="form-control"  type="password" required="" placeholder="Confirm Your Password">
                                    </div>

                                    <div class="form-group mb-3" style="display:none">
                                        <label for="password">Devlanner Number</label>
                                            <?php 
                                                $numlength = 3;    
                                                $codelength = 3;
                                                $number =  substr(str_shuffle('0123456789'),1,$numlength);
                                                $code =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$codelength);

                                            ?>
                                        <input class="form-control" name="user_number"  type="text" required="" value="DevLanner-<?php echo $number;?><?php echo $code;?>">
                                    </div>
                                    <br>

                                    <div class="form-group mb-0 text-center">
                                        <button  name="devlan_signup" class="btn btn-block btn-outline-success" type="submit"> Create Account </button>
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
                                <p> <a href="devlan_pages_recoverpw.php" class=" btn btn-outline-danger text-white-50 ml-1">Forgot your password?</a></p>
                                <p class="text-white-50">Have an account? <a href="index.php" class="btn btn-outline-success ml-1"><b>Sign In</b></a></p>
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
        <!--Verify Passwords if they match-->
        <script type="text/javascript">
            function valid()
                {

                    if(document.devlan_Signup.password_conf.value != document.devlan_Signup.password_conf.value)
                {
                alert("Password and Re-Type Password Field do not match  !!");
                    document.devlan_Signup.password_conf.focus();
                    return false;
                }
                return true;
                }
        </script>
        
    </body>

</html>