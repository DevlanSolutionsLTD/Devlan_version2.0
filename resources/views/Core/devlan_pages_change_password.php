<?php
    session_start();
    include('assets/configs/config.php');
    include('assets/configs/checklogin.php');
    check_login();
    $user_id = $_SESSION['user_id'];
    //Update My Profile password
        if(isset($_POST['update_profile_password']))
            {

                $user_id = $_SESSION['user_id'];
                $password = sha1($_POST['password']);
                
                //sql to inset the values to the database
                $query="UPDATE users SET   password=?  WHERE user_id=?";
                $stmt = $mysqli->prepare($query);
                //bind the submitted values with the matching columns in the database.
                $rc=$stmt->bind_param('si',$password, $user_id);
                $stmt->execute();
                //if binding is successful, then indicate that a new value has been updated.
                    if($rc)
                    {
                        $success =  "😄 Your Account Password Has Been Updated!";

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
                $user_id = $_SESSION['user_id'];
                $ret="SELECT  * FROM  users WHERE user_id=?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$user_id);
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
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">DevLan</a></li>
                                                <li class="breadcrumb-item"><a href="devlan_pages_dashboard">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="devlan_pages_dashboard">Account</a></li>
                                                <li class="breadcrumb-item active">Update Password</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">@<?php echo $row->user_number;?> Update Your DevLan Account Password</h4>
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
                                                @<?php echo $row->username;?> Treat Your DevLan Account Password Like Your InnerWear .....🤪 
                                            </p>

                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <form method="POST" enctype="multipart/form-data" >
                                                        <div class="row">
                                                            <div class="form-group col-md-12 mb-3">
                                                                <label for="simpleinput">Old Password</label>
                                                                <input type="password" required name="" id="simpleinput" class="form-control">
                                                            </div>

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
                                                                    <button  name="update_profile_password" type="submit" class="ladda-button pull-right ladda-button-demo btn btn-outline-success"  data-style="zoom-in">Change Password</button>
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