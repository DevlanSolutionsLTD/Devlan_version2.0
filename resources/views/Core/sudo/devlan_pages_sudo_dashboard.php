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

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Sudo Devlan Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-warning border-success border">
                                                <i class="fe-users font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                    //count Number of joined devlanners
                                                    $result ="SELECT count(*)  FROM  users";
                                                    $stmt = $mysqli->prepare($result);
                                                    //$stmt->bind_param('i', $user_id);
                                                    $stmt->execute();
                                                    $stmt->bind_result($devlanners);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $devlanners;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">DevLanners'</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-Devlanners-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-warning border-success border">
                                                <i class="fe-chrome font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                    //count Number of front end projects
                                                    $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'FrontEnd WebApp' ";
                                                    $stmt = $mysqli->prepare($result);
                                                    //$stmt->bind_param('i', $user_id);
                                                    $stmt->execute();
                                                    $stmt->bind_result($front_end);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $front_end;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">Frontends'</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-warning border-success border">
                                                <i class="fe-cast font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                    <?php
                                                        //count Number of backend projects
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'BackEnd WebApp' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($back_end);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $back_end;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">Backends'</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-warning border-success border">
                                                <i class="fe-server  font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                    <?php
                                                        //count Number of fullstack apps
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'FullStack WebApp' OR project_category ='Framework WebApp' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($fullstack_apps);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $fullstack_apps;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">Fullstacks'</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>                        
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-warning border-success border">
                                                <i class="fe-monitor font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                    <?php
                                                        //count Number of native apps
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Android App' OR project_category ='Ios App' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($native_app);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $native_app;?></span></h3>
                                                <p class="text-muted mb-1 ">Native Apps'</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-Devlanners-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-warning border-success border">
                                                <i class="fe-tablet  font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                    <?php
                                                        //count Number of pwe
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Progressive WebApp' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($pwe);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $pwe;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">PWEs'</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-warning border-success border">
                                                <i class="fe-layers  font-22 avatar-title text-info"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                        //count Number of cheatsheets
                                                        $result ="SELECT count(*)  FROM  projects WHERE   project_category ='PDF Cheat Sheets' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($cheat_sheets);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $cheat_sheets;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">CheatSheets'</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-warning border-success border">
                                                <i class="fe-shuffle  font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                        //count Number of Misc Projects
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Misc Coding Projects' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($misc);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $misc;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">Misc</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end Coding commits-->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-success border">
                                                <i class="fe-search  font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                        //count Number of packetracer
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Packet Tracer Topologies' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($pkt);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $pkt;?></span></h3>
                                                <p class="text-muted mb-1 ">PacketTracers'</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-Devlanners-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-success border">
                                                <i class="fe-bar-chart  font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                    <?php
                                                        //count Number of GNS3 Commits
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'GNS 3 Topologies' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($gns);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $gns;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">GNS3</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-success border">
                                                <i class="fe-activity   font-22 avatar-title text-info"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                    <?php
                                                        //count Number of automations
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Network Automation' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($network_auto);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $network_auto;?> </span></h3>
                                                <p class="text-muted mb-1 ">Automations</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-success border">
                                                <i class="fe-radio   font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                    <?php
                                                        //count Number of misc
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Misc Networking Projects' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($misc);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $misc;?></span></h3>
                                                <p class="text-muted mb-1 ">Misc </p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-success border">
                                                <i class="fe-book-open   font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                    <?php
                                                        //count Number of cheatsheets
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'PDF Cheat Sheets' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($pdf);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $pdf;?></span></h3>
                                                <p class="text-muted mb-1 ">CheatSheets </p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-success border">
                                                <i class="fe-wifi   font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                    //count Number all n/w commits
                                                    $result ="SELECT count(*)  FROM  projects WHERE project_category = 'Packet Tracer Topologies'
                                                    || project_category = 'PDF Cheat Sheets' || project_category = 'Misc Networking Projects'
                                                    || project_category = 'Network Automation' || project_category = 'GNS 3 Topologies' ||
                                                    project_category = 'Packet Tracer Topologies' ";
                                                    $stmt = $mysqli->prepare($result);
                                                    //$stmt->bind_param('i', $user_id);
                                                    $stmt->execute();
                                                    $stmt->bind_result($all_nw);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $all_nw;?></span></h3>
                                                <p class="text-muted mb-1 ">Total N/ws' </p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-success border">
                                                <i class="fe-code   font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                            <?php
                                                    //count Number all coding commits
                                                    $result ="SELECT count(*)  FROM  projects WHERE project_category = 'FrontEnd WebApp' || project_category = 'BackEnd WebApp'
                                                    || project_category = 'FullStack WebApp' || project_category ='Framework WebApp' ||project_category = 'Android App' 
                                                    || project_category ='Ios App' || project_category = 'Progressive WebApp'  || project_category = 'Misc Coding Projects' 
                                                    ||  project_category ='PDF Cheat Sheets'  ";
                                                    $stmt = $mysqli->prepare($result);
                                                    //$stmt->bind_param('i', $user_id);
                                                    $stmt->execute();
                                                    $stmt->bind_result($all_coding);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $all_coding;?></span></h3>
                                                <p class="text-muted mb-1 ">Total Coding' </p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-success border">
                                                <i class="fe-user-check   font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                    <?php
                                                        //count Number of password resets
                                                        $result ="SELECT count(*)  FROM  password_resets WHERE  status = 'Pending' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($pwd);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $pwd;?></span></h3>
                                                <p class="text-muted mb-1 ">Pwd Resets' </p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            
                        </div>
                        <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body" dir="ltr">
                                            <div class="card-widgets">
                                                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                                <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                            </div>
                                            <h4 class="header-title mb-0">Coding Commits Per Project Category</h4>

                                            <div id="cardCollpase1" class="collapse pt-3 show">
                                            <!--Donought chart to show how my commit trend is-->
                                                <div id="loggedInUserCommits" style="height: 350px;" class="morris-chart"></div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body" dir="ltr">
                                            <div class="card-widgets">
                                                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                                <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                            </div>
                                            <h4 class="header-title mb-0">Networking Commits Per Project Category</h4>

                                            <div id="cardCollpase2" class="collapse pt-3 show">
                                            <!--Pie Chart to indicate how me and other fellow devlans are contributing-->
                                                <div id="network_commits" style="height: 350px;" class="morris-chart"></div>

                                            </div>
                                        </div>
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div>
                        <div class="row">
                            <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body" dir="ltr">
                                            <div class="card-widgets">
                                                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                                <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                            </div>
                                            <h4 class="header-title mb-0">Networking Commits Per Project Category</h4>

                                            <div id="cardCollpase2" class="collapse pt-3 show">
                                            <!--Pie Chart to indicate how me and other fellow devlans are contributing-->
                                                <div id="TotalDevLannersCommits" style="height: 350px;" class="morris-chart"></div>

                                            </div>
                                        </div>
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                        </div>
                        
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include("assets/_partials/footer.php");?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <script>
                window.onload = function () {

                var chart1 = new CanvasJS.Chart("loggedInUserCommits", {
                    theme: "light",
                    exportFileName: "Doughnut Chart",
                    exportEnabled: true,
                    animationEnabled: true,
                    title:{
                    text: ""
                    },
                    legend:{
                    cursor: "pointer",
                    itemclick: explodePie
                    },
                    data: [{
                    type: "doughnut",
                    innerRadius: 90,
                    showInLegend: true,
                    toolTipContent: "<b>{name}</b>: {y} (#percent%)",
                    indexLabel: "{name} - #percent%",
                    dataPoints: [
                        { 
                        y:
                            <?php
                                //count Number of front end projects
                                $result ="SELECT count(*)  FROM  projects WHERE   project_category = 'FrontEnd WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_front_end);
                                $stmt->fetch();
                                $stmt->close();

                                echo $dchart_front_end; //display
                            ?> , name: "FrontEnd Projects" },

                        { y:
                            <?php
                                //count Number of backend projects
                                $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'BackEnd WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_back_end);
                                $stmt->fetch();
                                $stmt->close();

                                echo $dchart_back_end;
                            ?> , name: "BackEnd Projects" },

                        { y:
                            <?php
                                //count Number of fullstack apps
                                $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'FullStack WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_fullstack_apps);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_fullstack_apps;

                            ?> , name: "Fullstack Projects" },

                            { y:
                            <?php
                                //count Number of framework  apps
                                $result ="SELECT count(*)  FROM  projects WHERE   project_category ='Framework WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_frameworks_apps);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_frameworks_apps;

                            ?> , name: "Framework Projects" },

                        { y:
                            <?php
                                //count Number of native apps
                                $result ="SELECT count(*)  FROM  projects WHERE   project_category = 'Android App' OR project_category ='Ios App' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_native_app);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_native_app;
                            ?>, name: "Native Projects" },

                        { y: 
                            <?php
                                //count Number of pwe
                                $result ="SELECT count(*)  FROM  projects WHERE    project_category = 'Progressive WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_pwe);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_pwe;

                            ?> , name: "PWA Projects" },

                        { y:
                            <?php
                                //count Number of Misc Projects
                                $result ="SELECT count(*)  FROM  projects WHERE    project_category = 'Misc Coding Projects' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_misc);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_misc;

                            ?>, name: "Misc Projects"},

                        { y:
                            <?php
                                //count Number of PDF CheatShets Projects
                                $result ="SELECT count(*)  FROM  projects WHERE   project_category ='PDF Cheat Sheets' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_cheatsheets);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_cheatsheets;

                            ?>, name: "CheatSheets"}    

                    ]
                    }]
                });

                var chart2 = new CanvasJS.Chart("TotalDevLannersCommits", {
                    animationEnabled: true,
                    title: {
                    text: ""
                    },
                    data: [{
                    type: "pie",
                    startAngle: 240,
                    yValueFormatString: "##0.00'%'",
                    indexLabel: "{label} {y}",
                    dataPoints: [
                        { 
                        y:
                            <?php
                                //count Number all coding commits
                                $result ="SELECT count(*)  FROM  projects WHERE project_category = 'FrontEnd WebApp' || project_category = 'BackEnd WebApp'
                                || project_category = 'FullStack WebApp' || project_category ='Framework WebApp' ||project_category = 'Android App' 
                                || project_category ='Ios App' || project_category = 'Progressive WebApp'  || project_category = 'Misc Coding Projects' 
                                ||  project_category ='PDF Cheat Sheets'  ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($all_coding);
                                $stmt->fetch();
                                $stmt->close();
                                echo $all_coding;

                            ?> , label: "Coding Commits" },

                            
                        {
                        y: 
                            <?php
                                //count Number all n/w commits
                                $result ="SELECT count(*)  FROM  projects WHERE project_category = 'Packet Tracer Topologies'
                                || project_category = 'PDF Cheat Sheets' || project_category = 'Misc Networking Projects'
                                || project_category = 'Network Automation' || project_category = 'GNS 3 Topologies' ||
                                project_category = 'Packet Tracer Topologies' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($all_nw);
                                $stmt->fetch();
                                $stmt->close();
                                echo $all_nw;

                            ?> , label: "Networking Commits" }   
                        ]
                    }]

                        
                });

                var chart3 = new CanvasJS.Chart("network_commits", {
                    theme: "light",
                    exportFileName: "Doughnut Chart",
                    exportEnabled: true,
                    animationEnabled: true,
                    title:{
                    text: ""
                    },
                    legend:{
                    cursor: "pointer",
                    itemclick: explodePie
                    },
                    data: [{
                    type: "doughnut",
                    innerRadius: 90,
                    showInLegend: true,
                    toolTipContent: "<b>{name}</b>: {y} (#percent%)",
                    indexLabel: "{name} - #percent%",
                    dataPoints: [
                        { 
                        y:
                            <?php
                                //count Number of Packettracer Projects
                                $result ="SELECT count(*)  FROM  projects WHERE   project_category = 'Packet Tracer Topologies' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_packet_tracer);
                                $stmt->fetch();
                                $stmt->close();

                                echo $dchart_packet_tracer; //display
                            ?> , name: "Packet Tracer Projects" },

                        { y:
                            <?php
                                //count Number of Network Automations
                                $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Network Automation' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_network_auto);
                                $stmt->fetch();
                                $stmt->close();

                                echo $dchart_network_auto;
                            ?> , name: "Network Automations" },

                        { y:
                            <?php
                                //count Number of GNS 3 Topologies
                                $result ="SELECT count(*)  FROM  projects WHERE   project_category = 'GNS 3 Topologies' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_GNS3);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_GNS3;

                            ?> , name: "GNS 3 Topologies" },

                            { y:
                            <?php
                                //count Number of Misc Networking Projects
                                $result ="SELECT count(*)  FROM  projects WHERE   project_category ='Misc Networking Projects' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_misc);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_misc;

                            ?> , name: "Misc Networking Projects" },

                        { y:
                            <?php
                                //count Number of PDF Cheat Sheets
                                $result ="SELECT count(*)  FROM  projects WHERE   project_category = 'PDF Cheat Sheets' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_pdf);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_pdf;
                            ?>, name: "PDF Cheat Sheets" }
                        
                    ]
                    }]
                });
                
                chart1.render();
                chart3.render();
                chart2.render();


                function explodePie (e) {
                    if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
                    e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
                    } else {
                    e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
                    }
                    e.chart.render();
                }

                }
            </script>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>
        <!--CanvasJS-->
        <script src="assets/js/jquery.canvasjs.min.js"></script>


        <!-- Plugins js-->
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

        <!-- Dashboar 1 init js-->
        <script src="assets/js/pages/dashboard-1.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>