<?php
    session_start();
    include('assets/configs/config.php');
    include('assets/configs/checklogin.php');
    check_login();
    $user_id = $_SESSION['user_id'];
    //Push New Commit
        if(isset($_POST['modify_commit']))
            {

                $project_name = $_POST['project_name'];
                $project_desc = $_POST['project_desc'];
                $project_category = $_POST['project_category'];
                $project_id = $_GET['project_id'];
                $user_email = $_POST['user_email'];
                //$date_created = ($_POST['date_created']);
                $project_link = $_POST['project_link'];

                //$project_files = $_FILES["project_files"]["name"];
                //move_uploaded_file($_FILES["project_files"]["tmp_name"],"assets/projects/".$_FILES["project_files"]["name"]);
                      
                //$project_avatar=$_FILES["project_avatar"]["name"];
                //move_uploaded_file($_FILES["project_avatar"]["tmp_name"],"assets/projects/".$_FILES["project_avatar"]["name"]);

                $project_number = $_POST['project_number'];
                //$user_name = $_POST['user_name'];
                      
               //sql to inset the values to the database
                $query="UPDATE projects SET  project_name = ?, project_desc =?, project_category = ?, user_email=?,  project_link=?, project_number=? WHERE project_id = ?";
                $stmt = $mysqli->prepare($query);
                //bind the submitted values with the matching columns in the database.
                $rc=$stmt->bind_param('sssssss', $project_name, $project_desc, $project_category, $user_email,  $project_link, $project_number, $project_id);
                $stmt->execute();

                //if binding is successful, then indicate that a new value has been updated.
                    if($rc)
                    {
                        $success =  "Commit Push Updated";

                    }

                    else
                    {
                        $err =  " 🙍‍♂️ 🙍‍♂️ Please Try Again Later";
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
            //commit details by use of commit id
                $project_id = $_GET['project_id'];
                $ret="SELECT  * FROM  projects WHERE project_id=?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$project_id);
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
                                                <li class="breadcrumb-item"><a href="devlan_pages_nw_commits_dashboard.php">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="devlan_pages_manage_commits.php">My Commits</a></li>
                                                <li class="breadcrumb-item"><a href="devlan_pages_manage_commits.php">Manage Commits</a></li>
                                                <li class="breadcrumb-item active"><?php echo $row->project_name;?></li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Modify <?php echo $row->project_name;?> </h4>
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
                                                @<?php echo $row->user_email;?> Your Fellow DevLanners Are Eagerly Waiting For You To Modfy Your Commit....So Make It Quick 🤩 
                                            </p>

                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <form method="POST" enctype="multipart/form-data" >
                                                        <div class="row">
                                                            <div class="form-group col-md-4 mb-3">
                                                                <label for="simpleinput">Commit Name</label>
                                                                <input type="text" required name="project_name" value="<?php echo $row->project_name;?>" id="simpleinput" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-4 mb-3">
                                                                <label for="simpleinput">Commit Category</label>
                                                                <select  required name="project_category"  id="simpleinput" class="form-control">
                                                                    <option selected>Select Commit's Category</option>
                                                                    <option>Packet Tracer Topologies</option>                                                                    
                                                                    <option>Network Automation</option>
                                                                    <option>GNS 3 Topologies</option>
                                                                    <option>Misc Networking Projects</option>
                                                                    <option>PDF Cheat Sheets</option>                                                              
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-4 mb-3">
                                                                <label for="simpleinput">My Email Address</label>
                                                                <input type="email" required  name="user_email" value="<?php echo $row->user_email;?>" readonly id="simpleinput" class="form-control">
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                        
                                                            

                                                            <div class="form-group col-md-6 mb-3" style="display:none">
                                                                <label for="simpleinput">Commit Number</label>
                                                                    <?php 
                                                                        $numlength = 5;    
                                                                        $codelength = 3;
                                                                        $number =  substr(str_shuffle('0123456789'),1,$numlength);
                                                                        $code =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$codelength);

                                                                    ?>
                                                                <input type="text" required  name="project_number" value="CMT-<?php echo $number;?>-<?php echo $code;?>" readonly id="simpleinput" class="form-control">
                                                            </div>

                                                        </div>
                                                       
                                                        <hr>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 mb-3">
                                                                <label for="simpleinput">Commit Link</label>
                                                                <input type="text" placeholder="https://github.com/Trans-DevLan/Devlan_version2.0" value="<?php echo $row->project_link;?>"  name="project_link"  id="simpleinput" class="form-control">
                                                                <small>Drop Your Commit HyperLink Incase You Have Uploaded It To Github | GitLab | Heroku | GDrive | etc ... </small>

                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 mb-3">
                                                                <label for="simpleinput">Tell Your Fellow DevLanners | Buddies  About Your Brand New Commit </label>
                                                                <textarea type="text" required  name="project_desc"  id="commitDescription"  class="form-control"><?php echo $row->project_desc;?></textarea>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 mb-3">
                                                                <section class="progress-demo">
                                                                    <button  name="modify_commit" type="submit" class="ladda-button pull-right ladda-button-demo btn btn-outline-success"  data-style="zoom-in">Modify Commit</button>
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
            CKEDITOR.replace('commitDescription')
        </script>
    </body>

</html>