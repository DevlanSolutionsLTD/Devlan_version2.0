<?php
    session_start();
    include('assets/configs/config.php');
    include('assets/configs/checklogin.php');
    check_login();
    $admin_id = $_SESSION['admin_id'];
    //Update My Profile password
        if(isset($_POST['update_push_notification']))
            {

                $n_id = $_GET['n_id'];
                $n_name = $_POST['n_name'];
                $n_desc = $_POST['n_desc'];
                $n_number = $_POST['n_number'];
                $n_from = $_POST['n_from'];
                $n_status = $_POST['n_status'];
                
                //sql to inset the values to the database
                $query="UPDATE notifications SET n_name=?, n_desc=?, n_number=?, n_from=?, n_status=? WHERE n_id = ?";
                $stmt = $mysqli->prepare($query);
                //bind the submitted values with the matching columns in the database.
                $rc=$stmt->bind_param('sssssi',$n_name, $n_desc, $n_number, $n_from, $n_status, $n_id);
                $stmt->execute();
                //if binding is successful, then indicate that a new value has been updated.
                    if($rc)
                    {
                        $success =  "Updated And Sent";

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
                $n_id = $_GET['n_id'];
                $ret="SELECT  * FROM notifications WHERE n_id=?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$n_id);
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
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Notifications</a></li>
                                                <li class="breadcrumb-item active">Manage</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Manage Push Notifications</h4>
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

                                                            <div class="form-group col-md-6 mb-3">
                                                                <label for="simpleinput">From</label>
                                                                <input type="text" value="DevLan Team" readonly required name="n_from"  id="simpleinput" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6 mb-3">
                                                                <label for="simpleinput">Subject</label>
                                                                <input type="text" required name="n_name" value="<?php echo $row->n_name;?>"  id="simpleinput" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-6 mb-3" style="display:none">
                                                                <label for="simpleinput">Status</label>
                                                                <input type="text" required name="n_status" value="Send"  id="simpleinput" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6 mb-3" style="display:none">
                                                                <label for="simpleinput">Number</label>
                                                                    <?php 
                                                                        $length = 5;    
                                                                        $number =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                                                                    ?>
                                                                <input type="text" required name="n_number" value="<?php echo $number;?>"  id="simpleinput" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="form-group col-md-12 mb-3">
                                                                <label for="simpleinput">Notification Details</label>
                                                                <textarea type="text" required name="n_desc"  id="notification_body" class="form-control"><?php echo $row->n_desc;?></textarea>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-md-12 mb-3">
                                                                <section class="progress-demo">
                                                                    <button  name="update_push_notification" type="submit" class="ladda-button pull-right ladda-button-demo btn btn-outline-success"  data-style="zoom-in">Update Notification</button>
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
            CKEDITOR.replace('notification_body')
        </script>
    </body>

</html>