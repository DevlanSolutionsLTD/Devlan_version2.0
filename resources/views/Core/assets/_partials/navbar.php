
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="d-none d-sm-block">
                        <form action="devlan_pages_advance_search.php" class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
        
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>

                            <?php
                                //count Number of Notifications for logged in user.
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  notifications WHERE  user_id = ? ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($notifications);
                                $stmt->fetch();
                                $stmt->close();
                            ?>

                            <span class="badge badge-danger rounded-circle noti-icon-badge"><?php echo $notifications;?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            
                            <div class="slimscroll noti-scroll">
                            <?php
                                //get logged in user notifications
                                $user_id = $_SESSION['user_id'];
                                $ret="SELECT  * FROM  notifications WHERE  user_id = ? LIMIT 15";
                                $stmt= $mysqli->prepare($ret) ;
                                $stmt->bind_param('i',$user_id);
                                $stmt->execute() ;//ok
                                $res=$stmt->get_result();

                                while($row=$res->fetch_object())
                                {
                                //trim timestamps to DD-YY-MMMM
                                    $DT = $row->n_tstamp;
                            ?>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon">
                                        <img src="assets/img/devlan-logo.png" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details"><?php echo $row->n_name;?></p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small><?php echo $row->n_desc;?></small>
                                    </p>
                                </a>
                            <?php }?>    

                            </div>

                            <!-- All-->
                            <a href="devlan_pages_account.php#notifications" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>
                <?php
                    $user_id = $_SESSION['user_id'];
                    $ret="SELECT  * FROM  users WHERE user_id=?";
                    $stmt= $mysqli->prepare($ret) ;
                    $stmt->bind_param('i',$user_id);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();

                    while($row=$res->fetch_object())
                {
                ?>
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/img/DevLanners/<?php echo $row->dpic;?>" alt="user-image" class="rounded-circle avatar-lg">
                            <span class="pro-user-name ml-1">
                                <?php echo $row->username;?> <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="devlan_pages_account.php" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="devlan_pages_account_settings.php" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="devlan_pages_change_password.php" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Passwords</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="devlan_pages_logout_partial.php" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                    <?php }?>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="devlan_pages_dashboard.php" class="logo text-center">
                        <span class="logo-lg">
                            <img src="assets/img/logo-white-xx.png" alt="" height="50">
                        </span>
                        <span class="logo-sm">
                            <img src="assets/img/logo.png" alt="" height="15">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
        
                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            Create 
                            <i class="mdi mdi-chevron-down"></i> 
                        </a>
                        <div class="dropdown-menu">
                            <!-- item-->
                            <a href="devlan_pages_new_commit.php" class="dropdown-item">
                                <i class="fe-briefcase mr-1"></i>
                                <span>New Commit</span>
                            </a>

                            
                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="https://devlan.martdev.info/f/" target="_blank" class="dropdown-item">
                                <i class="fe-headphones mr-1"></i>
                                <span>Devlan Forum</span>
                            </a>

                        </div>
                    </li>

                </ul>
            </div>

