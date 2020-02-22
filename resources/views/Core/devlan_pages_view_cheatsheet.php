<?php
    session_start();
    include('assets/configs/config.php');
    include('assets/configs/checklogin.php');
    check_login();
    $user_id = $_SESSION['user_id'];
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
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                        <?php include("assets/_partials/sidebar.php");?>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <?php
                //Get Commit Details
                $project_id = $_GET['project_id'];
                $ret="SELECT  * FROM  projects WHERE project_id = ?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$project_id);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();

                while($row=$res->fetch_object())
                {
                    //trim timestamps to DD-YY-MMMM
                    $DT = $row->date_created;

                     //display a default image if project has no screenshot
                     if ($row->project_avatar == '')
                     {
                         
                         $img = " <img class='img-fluid' src = 'assets/img/No_project_screenshot.png'></img> ";
 
 
                     }
                     else
                     {
                         $img = " <img class='img-fluid' src = 'assets/projects/$row->project_avatar'></img> ";
                     }
                    
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
                                                <li class="breadcrumb-item"><a href="devlan_pages_dashboard.php">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="devlan_pages_view_my_commits.php">My Commits</a></li>
                                                <li class="breadcrumb-item"><a href="devlan_pages_view_my_commits.php">View</a></li>
                                                <li class="breadcrumb-item active"><?php echo $row->project_name;?></li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title"><?php echo $row->project_name;?></h4>
                                    </div>
                                </div>
                            </div>     
                            <!-- end page title --> 

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card-box">
                                        <h4 class="header-title mb-4"><?php echo $row->project_number;?></h4>
            
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a href="#screenshot" data-toggle="tab" aria-expanded="false" class="nav-link  active">
                                                    Commit Screenshot
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#details" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Download <?php echo $row->project_name;?>
                                                </a>
                                            </li>
                                           
                                        </ul>
                                        <div class="tab-content">

                                            <div class="tab-pane show active" id="screenshot">
                                                <?php echo $img ;?>
                                            </div>
                                            
                                            <div class="tab-pane " id="details">
                                                <div class="card" style="width: 18rem;">
                                                    <div class="card-body">
                                                        <embed src="assets/projects/<?php echo $row->project_files;?>" width="900" height="500"  type="application/pdf">
                                                    </div>
                                                </div>
                                            <hr>
                                                <?php echo $row->project_desc;?>
                                                <hr>
                                                <b>Commit By: <?php echo $row->user_email;?></b><br>
                                                <b>Date Commited: <?php echo date("d-M-Y H:m:s", strtotime($DT));?> </b><br>
                                                <b>Commit Category: <?php echo $row->project_category;?></b><br>
                                                <hr>
                                                <b> 
                                                    <a class="btn btn-outline-primary btn-sm" href="devlan_pages_view_commit_owner.php?user_id=<?php echo $row->user_id;?>">
                                                      <?php echo $row->user_email;?> Profile 
                                                    </a> 

                                                   
                                                <hr>
 
                                                <?php 
                                                //MEHN I DONT HAVE ANY FREAKING IDEA WHAT I DID HERE BUT IT WORKED
                                                    if($row->project_files != '' )
                                                    {
                                                            echo "
                                                                    <a class='btn btn-outline-success'  href='assets/projects/$row->project_files'>
                                                                        <i class='dripicons-cloud-download'></i>
                                                                            Download
                                                                    </a> 
                                                                ";
                                                    }
                                                    
                                                    elseif($row->project_link != '')
                                                    {
                                                        echo "
                                                            <a class='btn btn-outline-success'  href='$row->project_link' target = '_blank'>
                                                                    <i class='dripicons-cloud-download'></i>
                                                                        Download
                                                            </a>
                                                            ";  
                                                    }
                                                    else
                                                    {
                                                        echo "
                                                            <a class='btn btn-outline-success'  href='devlan_pages_404.php'>
                                                                    <i class='dripicons-cloud-download'></i>
                                                                        Download
                                                            </a>
                                                            ";     
                                                    }
                                                ?>  
                                            </div>
                                            
                                        </div>
                                    </div> <!-- end card-box-->
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

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>