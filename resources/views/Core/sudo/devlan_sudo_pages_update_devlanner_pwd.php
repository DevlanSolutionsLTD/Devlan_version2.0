<?php
    session_start();
    include('assets/configs/config.php');
    include('assets/configs/checklogin.php');
    check_login();
    $admin_id = $_SESSION['admin_id'];
    //Update My Profile password
        if(isset($_POST['update_devlanner_password']))
            {

                $email = $_GET['email'];
                $password = sha1($_POST['password']);
                
                //sql to inset the values to the database
                $query="UPDATE users SET   password =?  WHERE email =?";
                $stmt = $mysqli->prepare($query);
                //bind the submitted values with the matching columns in the database.
                $rc=$stmt->bind_param('ss',$password, $email);
                $stmt->execute();
                //if binding is successful, then indicate that a new value has been updated.
                    if($rc)
                    {
                        $success =  "Password Updated";

                    }

                    else
                    {
                        $err =  " Woops 🙍‍♂️ 🙍‍♂️ Please Try Again Later";
                    }

            }

?>
<!DOCTYPE html>
<html lang="en">
    <!--Head-->
    <?php include("assets/_partials/head.php");?>
    <!--Head-->
    <body>
        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
                <?php include("assets/_partials/navbar.php");?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
                <?php include("assets/_partials/sidebar.php");?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <?php
                //Use logged in user session['user_id']
                $email = $_GET['email'];
                $ret="SELECT  * FROM  users WHERE email=?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('s',$email);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();

                while($row=$res->fetch_object())
                {
            ?>
                <div class="content-page">
                    <div class="content">

                        <!-- Start Content-->
                        <div class="container-fluid">
                            
                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Devlan</a></li>
                                                <li class="breadcrumb-item"><a href="devlan_pages_sudo_dashboard.php">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Password Resets</a></li>
                                                <li class="breadcrumb-item active">Manage</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Change Password</h4>
                                    </div>
                                </div>
                            </div>     
                            <!-- end page title --> 

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Please Fill All Given Fields</h4>
                                            <p class="sub-header">
                                            </p>

                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <form method="POST" enctype="multipart/form-data" >
                                                        <div class="row">
                                                            
                                                            <div class="form-group col-md-12 mb-3">
                                                                <label for="simpleinput">New Password</label>
                                                                <input type="password" required name="password"  id="simpleinput" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-12 mb-3">
                                                                <label for="simpleinput">Confirm New Password</label>
                                                                <input type="password" required name=""  id="simpleinput" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-md-12 mb-3">
                                                                <section class="progress-demo">
                                                                    <button  name="update_devlanner_password" type="submit" class="ladda-button pull-right ladda-button-demo btn btn-outline-success"  data-style="zoom-in">Change Password</button>
                                                                </section>
                                                            </div>
                                                        </div>
                                                                    
                                                    </form>

                                                </div> <!-- end col -->

                                            </div>
                                            <!-- end row-->

                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->    

                        </div> <!-- container -->

                    </div> <!-- content -->

                    <!-- Footer Start -->
                    <?php include("assets/_partials/footer.php");?>
                    <!-- end Footer -->

                </div>
        <?php }?>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

   
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>

        <!--CK EDITOR JS-->
        <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
        <script type="text/javascript">
            CKEDITOR.replace('BioTextArea')
        </script>
    </body>

</html>