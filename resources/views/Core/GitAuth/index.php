<?php

//to be created
require "init.php";

if (isset($_SESSION['user'])) {
    header("location: callback.php");
}

?> 
<!DOCTYPE html>
<html lang="en">

    <!--Head-->
    <head>
        <meta charset="utf-8" />
        <title>DevLan | Software Development projects,  Networking, Scripts, Topologies - Software Development Projects Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Devlan is a projects sharing platforms which hosts networking and software development projects." name="description" />
        <meta content="MartDevelopers" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="https://devlan.martdev.info/assets/img/favicon.png">
        <!-- Loading button css -->
        <link href="../assets/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <script src="../assets/js/swal.js"></script>
        <!--Direct Server side script injection to handle alerts-->
        <!--Inject SWAL-->
        <?php if(isset($success)) {?>
        <!--This code for injecting an success alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Success","<?php echo $success;?>","success");
                            },
                                50);
                </script>

        <?php } ?>

        <?php if(isset($err)) {?>
        <!--This code for injecting an  error alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Failed","<?php echo $err;?>","error");
                            },
                                50);
                </script>

        <?php } ?>
    </head>
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
                                        <span><img src="../assets/img/devlan-logo.png" alt="Devlan Logo" height="90"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Login With Github</p>
                                </div>

                                <form  action ="login.php">

                                    <div class="form-group mb-0 text-center">
                                        <button  name="devlan_login" class="btn btn-block btn-outline-success" type="submit"> Log In </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="../devlan_pages_recoverpw.php" class=" btn btn-outline-success text-white-50 ml-1">Forgot your password?</a></p>
                                <p class="text-white-50">Don't have an account? <a href="../devlan_pages_register.php" class="text-white ml-1"><b>Sign Up</b></a></p>
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