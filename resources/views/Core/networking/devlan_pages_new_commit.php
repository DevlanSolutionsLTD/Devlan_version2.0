<?php
    session_start();
    include('assets/configs/config.php');
    include('assets/configs/checklogin.php');
    check_login();
    $user_id = $_SESSION['user_id'];
    //Push New Commit
        if(isset($_POST['push_commit']))
            {

                $project_name = $_POST['project_name'];
                $project_desc = $_POST['project_desc'];
                $project_category = $_POST['project_category'];
                $user_id = $_SESSION['user_id'];
                $user_email = $_POST['user_email'];
                //$date_created = ($_POST['date_created']);
                $project_link = $_POST['project_link'];

                $project_files = $_FILES["project_files"]["name"];
                move_uploaded_file($_FILES["project_files"]["tmp_name"],"../assets/projects/".$_FILES["project_files"]["name"]);
                      
                $project_avatar=$_FILES["project_avatar"]["name"];
                move_uploaded_file($_FILES["project_avatar"]["tmp_name"],"../assets/projects/".$_FILES["project_avatar"]["name"]);

                $project_number = $_POST['project_number'];
                $user_name = $_POST['user_name'];
                      
               //sql to inset the values to the database
                $query="INSERT INTO projects (project_name, project_desc, project_category, user_id, user_email, project_files, project_avatar, project_link, project_number) VALUES(?,?,?,?,?,?,?,?,?)";
                $stmt = $mysqli->prepare($query);
                //bind the submitted values with the matching columns in the database.
                $rc=$stmt->bind_param('sssssssss', $project_name, $project_desc, $project_category, $user_id, $user_email,   $project_files, $project_avatar, $project_link, $project_number);
                $stmt->execute();

                //if binding is successful, then indicate that a new value has been updated.
                    if($rc)
                    {
                        $success =  "Commit Pushed To Devlan";

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
                                                <li class="breadcrumb-item"><a href="devlan_pages_dashboard.php">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="devlan_pages_manage_commits.php">My Commits</a></li>
                                                <li class="breadcrumb-item active">New Commit</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">New Commit</h4>
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
                                                @<?php echo $row->username;?> Your Fellow DevLanners Are Eagerly Waiting For Your Commit....So Make It Quick 🤩 
                                            </p>

                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <form method="POST" enctype="multipart/form-data" >
                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-3">
                                                                <label for="simpleinput">Commit Name</label>
                                                                <input type="text" required name="project_name"  id="simpleinput" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-6 mb-3">
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
                                                        </div>

                                                        <div class="row">
                                                        
                                                            <div class="form-group col-md-6 mb-3">
                                                                <label for="simpleinput">My Email Address</label>
                                                                <input type="email" required  name="user_email" value="<?php echo $row->email;?>" readonly id="simpleinput" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-6 mb-3">
                                                                <label for="simpleinput">My Username</label>
                                                                <input type="email" required  name="user_name" value="<?php echo $row->username;?>" readonly id="simpleinput" class="form-control">
                                                            </div>

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
                                                        
                                                        <div class="row">

                                                            <div class=" col-md-6 form-group mb-0">
                                                                <label>Commit Files</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file"  class="custom-file-input" name="project_files" id="inputGroupFile04">
                                                                        <label class="custom-file-label" for="inputGroupFile04">Attach a .zip, .7z or any compressed file</label>
                                                                    </div>
                                                                    <small>Please Upload A Zipped/ Compressed Files Less than 1.5mb if huge file use google drive and just share the link. Our storage space is kinda limited  </small>
                                                                </div>
                                                            </div>

                                                            <div class=" col-md-6 form-group mb-0">
                                                                <label>Commit Screenshot</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input required type="file" class="custom-file-input" name="project_avatar" id="inputGroupFile04">
                                                                        <label class="custom-file-label" for="inputGroupFile04">Attach a screenshot</label>
                                                                    </div>
                                                                </div>
                                                                <small>Let your fellow Devlanners have a glance of your commit before they download it. </small>

                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 mb-3">
                                                                <label for="simpleinput">Commit Link</label>
                                                                <input type="text" placeholder="https://github.com/Trans-DevLan/Devlan_version2.0"  name="project_link"  id="simpleinput" class="form-control">
                                                                <small>Drop Your Commit HyperLink Incase You Have Uploaded It To Github | GitLab | Heroku | GDrive | etc ... </small>

                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 mb-3">
                                                                <label for="simpleinput">Tell Your Fellow DevLanners | Buddies  About Your Brand New Commit </label>
                                                                <textarea type="text" required  name="project_desc"  id="commitDescription"  class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 mb-3">
                                                                <section class="progress-demo">
                                                                    <button  name="push_commit" type="submit" class="ladda-button pull-right ladda-button-demo btn btn-outline-success"  data-style="zoom-in">Push Commit</button>
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