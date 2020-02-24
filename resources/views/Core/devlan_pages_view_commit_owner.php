<?php
    session_start();
    include('assets/configs/config.php');
    include('assets/configs/checklogin.php');
    check_login();
    $user_id = $_SESSION['user_id'];
    //clear notifications
    //oops dont clear 
    /*
        if(isset($_GET['clear_notification']))
            {
                $id=intval($_GET['clear_notification']);
                $adn="DELETE FROM  notifications  WHERE n_id = ?";
                $stmt= $mysqli->prepare($adn);
                $stmt->bind_param('i',$id);
                $stmt->execute();
                $stmt->close();	 
             /*
                Dont Indicate that notification has been cleared
                    if($stmt)
                        {
                            $success = "House Booking Records Deleted";
                        }
                    else
                        {
                            $err = "Try Again Later";
                        }
                
            }
*/
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
                $user_id = $_GET['user_id'];
                $ret="SELECT  * FROM  users WHERE user_id=?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$user_id);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();

                while($row=$res->fetch_object())
                {
                    //display user image or default picture
                        if($row->user_dpic == '')
                        {
                            //Display default image
                            $profile_picture = 
                                                "
                                                <img src='assets/img/DevLanners/no_profile_picture.png' class='img-thumbnail'  alt='profile-image'>

                                                ";
                        }
                        else
                        {
                            $profile_picture = 
                                                "
                                                    <img src='assets/img/DevLanners/<?php echo $row->dpic' class='img-thumbnail'  alt='profile-image'>

                                                ";
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
                                                <li class="breadcrumb-item active"><?php echo $row->username;?></li>

                                            </ol>
                                        </div>
                                        <h4 class="page-title"><?php echo $row->username?>'s Profile</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->

                            <div class="row">
                                <div class="col-lg-6 col-xl-6">
                                    <div class="card-box text-center">
                                            <?php //Display Profile Picture 
                                                echo $profile_picture 
                                                
                                            ;?>

                                        <h4 class="mb-0"><?php echo $row->username;?></h4>
                                        <hr>
                                        <div class="text-left mt-3">
                                            <h4 class="font-13 text-uppercase">Intro | Bio | About:</h4>
                                            <hr>
                                            <p class="text-muted font-13 mb-3">
                                                <?php echo $row->bio;?>
                                            </p>
                                            <hr>
                                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2"><?php echo $row->fname;?>
                                                    <?php echo $row->lname;?></span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2"><?php echo $row->phone;?>
                                            </span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "><?php echo $row->email;?></span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Date Of Birth :</strong> <span class="ml-2 "><?php echo $row->dob;?></span></p>

                                            <p class="text-muted mb-1 font-13"><strong>Residency :</strong> <span class="ml-2"><?php echo $row->location;?></span></p>

                                            <p class="text-muted mb-1 font-13"><strong>WebSite :</strong> <span class="ml-2"><?php echo $row->website;?></span></p>
                                        </div>
                                        <hr>
                                        <ul class="social-list list-inline mt-3 mb-0">
                                            <li class="list-inline-item">
                                                <a href="https://linkedin.com/<?php echo $row->in_username;?>" target="_blank" class="social-list-item border-primary text-primary"><i
                                                        class="mdi mdi-linkedin"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://wa.me/<?php echo $row->phone;?>" target="_blank" class="social-list-item border-success text-success"><i
                                                        class="mdi mdi-whatsapp"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://twitter.com/<?php echo $row->twt_username;?>" target="blank" class="social-list-item border-info text-info"><i
                                                        class="mdi mdi-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://github.com/<?php echo $row->git_username;?>" target="_blank" class="social-list-item border-secondary text-secondary"><i
                                                        class="mdi mdi-github-circle"></i></a>
                                            </li>
                                        </ul>
                                        <hr>
                                    </div> <!-- end card-box -->

                                    
                                </div> <!-- end col-->

                                <div class="col-lg-6 col-xl-6">
                                    <div class="card-box">
                                        <ul class="nav nav-pills navtab-bg nav-justified">
                                            <li class="nav-item">
                                                <a href="#contribution" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    <?php echo $row->username;?> DevLan Commits
                                                </a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="contribution">

                                                <h5 class="mb-4"><i class="mdi mdi-source-pull mr-1"></i>
                                                    <?php echo $row->username;?> Commits
                                                </h5>

                                                <ul class="list-unstyled timeline-sm">
                                                    <?php
                                                        //get logged in user commits
                                                        $user_id = $_GET['user_id'];
                                                        $ret="SELECT  * FROM  projects WHERE  user_id = ?  ORDER BY `projects`.`date_created` DESC LIMIT 10 ";
                                                        $stmt= $mysqli->prepare($ret) ;
                                                        $stmt->bind_param('i',$user_id);
                                                        $stmt->execute() ;//ok
                                                        $res=$stmt->get_result();

                                                    while($row=$res->fetch_object())
                                                    {
                                                        //trim timestamps to DD-YY-MMMM
                                                            $DT = $row->date_created;
                                                    ?>
                                                        <li class="timeline-sm-item">
                                                            <span class="timeline-sm-date">
                                                                <?php echo date("d-M-Y", strtotime($DT));?>
                                                            </span>
                                                            <h5 class="mt-0 mb-1">
                                                                <a href="">
                                                                    <?php echo $row->project_name;?>
                                                                </a>
                                                            </h5>
                                                            <p>
                                                                <u>
                                                                    <?php echo $row->project_category;?>
                                                                </u>
                                                            </p>
                                                            <p class="text-muted mt-2">
                                                                <?php echo $row->project_desc;?>
                                                            </p>
                                                            <!--View Commit-->
                                                            <a href="devlan_pages_view_single_commit.php?project_id=<?php echo $row->project_id;?>" class="float-right btn btn-outline-info"><i class="fa fa-eye"></i> <i class="mdi mdi-source-pull"></i> View Commit</a><br>
                                                            
                                                            <hr>

                                                        </li>
                                                    <?php }?>
                                                </ul>

                                            </div> <!-- end commit tab-->
                                        </div> <!-- end tab-content -->
                                    </div> <!-- end card-box-->

                                </div> <!-- end col -->
                            </div>
                            <!-- end row-->

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