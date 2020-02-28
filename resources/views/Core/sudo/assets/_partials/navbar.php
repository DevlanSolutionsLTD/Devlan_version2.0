
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    
                    
                <?php
                    $admin_id = $_SESSION['admin_id'];
                    $ret="SELECT  * FROM  admin WHERE admin_id=?";
                    $stmt= $mysqli->prepare($ret) ;
                    $stmt->bind_param('i',$admin_id);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();

                    while($row=$res->fetch_object())
                    
                {
                    //display user image or default picture
                    if($row->dpic == '')
                    {
                        //Display default image
                        $profile_picture = 
                                            "
                                            <img src='../assets/img/DevLanners/no_profile_picture.png' class='rounded-circle avatar-lg'  alt='profile-image'>

                                            ";
                    }
                    else
                    {
                        $profile_picture = 
                                            "
                                                <img src='../assets/img/DevLanners/$row->dpic' class='rounded-circle avatar-lg'  alt='profile-image'>

                                            ";
                    }
                    
                ?>
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <?php echo $profile_picture;?>
                            <span class="pro-user-name ml-1">
                                <?php echo $row->email;?> <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="devlan_sudo_pages_changepwd.php" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Passwords</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="devlan_sudo_pages_logout.php" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                    <?php }?>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="devlan_pages_sudo_dashboard.php" class="logo text-center">
                        <span class="logo-lg">
                            <img src="../assets/img/logo-white-xx.png" alt="" height="50">
                        </span>
                        <span class="logo-sm">
                            <img src="../assets/img/logo.png" alt="" height="15">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
        
                </ul>
            </div>

