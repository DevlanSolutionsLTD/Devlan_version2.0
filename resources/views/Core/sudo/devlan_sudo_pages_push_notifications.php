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
                //Prevent Direct element access

                $admin_id = $_SESSION['admin_id'];
                $ret="SELECT  * FROM  admin WHERE admin_id=?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$admin_id);
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
                                                <li class="breadcrumb-item active">Push</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Push Notifications To DevLanners
                                            
                                        </h4>
                                    </div>
                                </div>
                            </div>     
                            <!-- end page title --> 

                            <div class="row">
                                <div class="col-12">
                                    <div class="card-box">
                                        <div class="mb-2">
                                            <div class="row">
                                                <div class="col-12 text-sm-center form-inline">
                                                    <div class="form-group mr-2" style="display:none">
                                                        <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                            <option value="">Show all</option>
                                                            <option value="active">Active</option>
                                                            <option value="disabled">Disabled</option>
                                                            <option value="suspended">Suspended</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="table-responsive">
                                            <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                                <thead>
                                                <tr>
                                                    <th data-toggle="true">UserName</th>
                                                    <th>Email</th>
                                                    <th data-hide="phone">Date Joined</th>
                                                    <th data-hide="phone, tablet">Name</th>
                                                    <th data-hide="phone, tablet">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                            //get all commits
                                                            //$user_id = $_SESSION['user_id'];
                                                            $ret="SELECT  * FROM  users ";
                                                            $stmt= $mysqli->prepare($ret) ;
                                                            //$stmt->bind_param('i',$user_id);
                                                            $stmt->execute() ;//ok
                                                            $res=$stmt->get_result();

                                                        while($row=$res->fetch_object())
                                                        {
                                                            //trim timestamps to DD-YY-MMMM
                                                                $DT = $row->created_at;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $row->username;?></td>
                                                            <td><?php echo $row->email;?></td>
                                                            <td><?php echo date("d-M-Y h:m:s", strtotime($DT));?></td>
                                                            <td><?php echo $row->fname;?> <?php echo $row->lname;?></td>
                                                            <td>

                                                                <a href="devlan_sudo_pages_push_single_devlanner_notification.php?user_id=<?php echo $row->user_id;?>">
                                                                    <span class="btn label-table btn-outline-success btn-sm">
                                                                        <i class="fa fa-bell"></i> <i class="fa fa-user mr-1"></i>
                                                                            Push Notification
                                                                    </span>
                                                                </a>
                                                                    
                                                            </td>
                                                        </tr>

                                                    <?php }?>
                                                </tbody>
                                                <tfoot>
                                                <tr class="active">
                                                    <td colspan="5">
                                                        <div class="text-right">
                                                            <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div> <!-- end .table-responsive-->
                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->
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

        <!-- Footable js -->
        <script src="assets/libs/footable/footable.all.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/foo-tables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>