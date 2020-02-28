<?php
    session_start();
    include('assets/configs/config.php');
    include('assets/configs/checklogin.php');
    check_login();
    $admin_id = $_SESSION['admin_id'];
    
?>
<!DOCTYPE html>
<html lang="en">
    
<?php include("assets/_partials/head.php");?>

    <body class="authentication-bg">

        <div class="mt-5 mb-5">
            <div class="container">
            <div class="row justify-content-center">
                    <div class="col-lg-12 col-xl-12 mb-4">
                        <div class="error-text-box">
                            <svg viewBox="0 0 600 200">
                                <!-- Symbol-->
                                <symbol id="s-text">
                                    <text text-anchor="middle" x="50%" y="50%" dy=".35em">404!</text>
                                </symbol>
                                <!-- Duplicate symbols-->
                                <use class="text" xlink:href="#s-text"></use>
                                <use class="text" xlink:href="#s-text"></use>
                                <use class="text" xlink:href="#s-text"></use>
                                <use class="text" xlink:href="#s-text"></use>
                                <use class="text" xlink:href="#s-text"></use>
                            </svg>
                        </div>
                        <div class="text-center">
                            <h1 class="mt-0 mb-2">Whoops! Commit not found </h1>
                            <h4 class="text-muted mb-3">It's looking like you may have taken a wrong turn. Don't worry...
                                Its scary out here alone but Here's a little tip that might help you get back on track.</h4>
                            <a href="devlan_pages_sudo_dashboard.php" class="btn btn-success waves-effect waves-light">Lets take you back home safe </a> .
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
            2019 - <?php echo date('Y');?> &copy; DevLan Platform Version 2.0 . Crafted With 💓  By <a href="https://martdev.info/" target="_blank" class="text-dark-50">MartDevelopers</a> 
        </footer>


        <!-- App js -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>