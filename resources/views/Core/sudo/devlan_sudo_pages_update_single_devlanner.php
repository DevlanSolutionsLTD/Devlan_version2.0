<?php
    session_start();
    include('assets/configs/config.php');
    include('assets/configs/checklogin.php');
    check_login();
    $admin_id = $_SESSION['admin_id'];
    //Update My Profile
        if(isset($_POST['update_profile']))
            {

                $user_id = $_GET['user_id'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                //$password = sha1($_POST['password']);->Lets update this later
                $dob = $_POST['dob'];
                $phone = $_POST['phone'];
                $location = $_POST['location'];
                $website = $_POST['website'];
                $bio = $_POST['bio'];
                $in_username = $_POST['in_username'];
                $git_username = $_POST['git_username'];
                $twt_username = $_POST['twt_username'];
                $dpic = $_FILES["dpic"]["name"];
                move_uploaded_file($_FILES["dpic"]["tmp_name"],"../assets/img/DevLanners/".$_FILES["dpic"]["name"]);
                

                //sql to inset the values to the database
                $query="UPDATE users SET   fname=?, lname=?, email=?,  username=?,  dob=?, phone=?, location=?, website=?, bio=?,  in_username =?, git_username=?, twt_username=?, dpic=?  WHERE user_id=?";
                $stmt = $mysqli->prepare($query);
                //bind the submitted values with the matching columns in the database.
                $rc=$stmt->bind_param('sssssssssssssi',$fname, $lname,  $email,  $username,  $dob, $phone, $location, $website, $bio,  $in_username, $git_username, $twt_username, $dpic, $user_id);
                $stmt->execute();
                //if binding is successful, then indicate that a new value has been updated.
                    if($rc)
                    {
                        $success =  "🤪Account Has Been Updated!";

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
                $user_id = $_GET['user_id'];
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
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Devlan</a></li>
                                                <li class="breadcrumb-item"><a href="devlan_pages_sudo_dashboard.php">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="devlan_sudo_pages_manage_commits.php">DevLanners</a></li>
                                                <li class="breadcrumb-item"><a href="devlan_sudo_pages_manage_commits.php">Manage</a></li>
                                                <li class="breadcrumb-item active"><?php echo $row->username;?></li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Update <?php echo $row->user_number;?> Account</h4>
                                    </div>
                                </div>
                            </div>     
                            <!-- end page title --> 

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Please Fill All Given Fields</h4>
                                           
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <form method="POST" enctype="multipart/form-data" >
                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-3">
                                                                <label for="simpleinput">First Name</label>
                                                                <input type="text" required name="fname" value="<?php echo $row->fname;?>" id="simpleinput" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-6 mb-3">
                                                                <label for="simpleinput">Last Name</label>
                                                                <input type="text" required name="lname" value="<?php echo $row->lname;?>" id="simpleinput" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-md-3 mb-3">
                                                                <label for="simpleinput">Residence</label>
                                                                <input type="text" required  name="location" value="<?php echo $row->location ;?>" id="simpleinput" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-3 mb-3">
                                                                <label for="simpleinput">Date Of Birth 🎂 </label>
                                                                <input type="text" required  name="dob" value="<?php echo $row->dob;?>" id="simpleinput" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-3 mb-3">
                                                                <label for="simpleinput">Phone Number</label>
                                                                <input type="text" required  name="phone" value="<?php echo $row->phone;?>" id="simpleinput" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-3 mb-3">
                                                                <label for="simpleinput">Website</label>
                                                                <input type="text" required  name="website" value="<?php echo $row->website;?>" id="simpleinput" class="form-control">
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-md-4 mb-3">
                                                                <label>Linkedin Username</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-linkedin"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" value="<?php echo $row->in_username;?>" name="in_username" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-4 mb-3">
                                                                <label>Twitter Username</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-twitter"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" value="<?php echo $row->twt_username;?>" name="twt_username" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-4 mb-3">
                                                                <label>Github Username</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-github-circle"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" value="<?php echo $row->git_username;?>" name="git_username" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-md-4 mb-3">
                                                                <label for="simpleinput">Email Address</label>
                                                                <input type="email" required  name="email" value="<?php echo $row->email;?>" id="simpleinput" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-4 mb-3">
                                                                <label for="simpleinput">UserName</label>
                                                                <input type="text" required  name="username" value="<?php echo $row->username;?>" id="simpleinput" class="form-control">
                                                            </div>

                                                            <div class=" col-md-4 form-group mb-0">
                                                                <label>Profile Picture</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" name="dpic" id="inputGroupFile04">
                                                                        <label class="custom-file-label" for="inputGroupFile04">Your_Picture.png</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 mb-3">
                                                                <label for="simpleinput">Biography | About | Skills | Profession </label>
                                                                <textarea type="text" required  name="bio"  id="BioTextArea"  class="form-control"><?php echo $row->bio;?></textarea>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="form-group col-md-12 mb-3">
                                                                <section class="progress-demo">
                                                                    <button  name="update_profile" type="submit" class="ladda-button pull-right ladda-button-demo btn btn-outline-success"  data-style="zoom-in">Update Account</button>
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