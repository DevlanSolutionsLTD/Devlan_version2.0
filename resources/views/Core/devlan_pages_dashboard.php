<?php
    session_start();
    include('assets/configs/config.php');
    include('assets/configs/checklogin.php');
    check_login();
    $user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
    <html lang="en">
        <!--Head-->
            <?php include("assets/_partials/head.php");?>
        <!-- /. Head -->
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
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Software Development X Coding Projects Dashboard</h4>
                                    </div>
                                </div>
                            </div>     
                            <!-- end page title --> 

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="card-box bg-pattern">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-success rounded">
                                                    <i class="fe-chrome  avatar-title font-22 text-white"></i>
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
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $front_end;?></span></h3>
                                                    <p class="text-muted mb-0 text-truncate">FrondEnd Projects </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div> <!-- end Front end projects -->

                                <div class="col-md-4">
                                    <div class="card-box bg-pattern">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-success rounded">
                                                    <i class="fe-cast  avatar-title font-22 text-white"></i>
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
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $back_end;?></span></h3>
                                                    <p class="text-muted mb-0 text-truncate">BackEnd Projects</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-box-->
                                </div> <!-- end back end projects -->

                                <div class="col-md-4">
                                    <div class="card-box bg-pattern">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-success rounded">
                                                    <i class="fe-layers avatar-title font-22 text-white"></i>
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
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $fullstack_apps;?></span></h3>
                                                    <p class="text-muted mb-0 text-truncate">Fullstack Projects</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-box-->
                                </div> <!-- end fullstack projects -->

                                <div class="col-md-4">
                                    <div class="card-box bg-pattern">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-success rounded">
                                                    <i class="fe-monitor avatar-title font-22 text-white"></i>
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
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $native_app;?></span></h3>
                                                    <p class="text-muted mb-0 text-truncate">Native  Apps Projects</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-box-->
                                </div> <!-- end native app projects -->

                                <div class="col-md-4">
                                    <div class="card-box bg-pattern">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-success rounded">
                                                    <i class="fe-tablet  avatar-title font-22 text-white"></i>
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
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $pwe;?></span></h3>
                                                    <p class="text-muted mb-0 text-truncate">PWE Projects</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-box-->
                                </div> <!-- end PWE projects -->

                                <div class="col-md-4">
                                    <div class="card-box bg-pattern">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-success rounded">
                                                    <i class="fe-file-plus  avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <?php
                                                        //count Number of Misc Projects
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Misc Coding Projects'  OR  project_category ='PDF Cheat Sheets' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($misc);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $misc;?></span></h3>
                                                    <p class="text-muted mb-0 text-truncate">Misc Projects</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-box-->
                                </div> <!-- end misc projects -->

                            </div>
                            <!-- end row-->


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body" dir="ltr">
                                            <div class="card-widgets">
                                                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                                <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                            </div>
                                            <h4 class="header-title mb-0">My Commits To Devlan Per Project Category</h4>

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
                                            <h4 class="header-title mb-0">Total Commits Per Project Category</h4>

                                            <div id="cardCollpase2" class="collapse pt-3 show">
                                            <!--Pie Chart to indicate how me and other fellow devlans are contributing-->
                                                <div id="TotalDevLannersCommits" style="height: 350px;" class="morris-chart"></div>

                                            </div>
                                        </div>
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div>
                            <!-- end row-->

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
            
            <!--HardWire chart JS Directly-->
            <script>
                window.onload = function () {

                var chart1 = new CanvasJS.Chart("loggedInUserCommits", {
                    theme: "light",
                //  exportFileName: "Doughnut Chart",
                // exportEnabled: true,
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
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE user_id = ? AND  project_category = 'FrontEnd WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_front_end);
                                $stmt->fetch();
                                $stmt->close();

                                echo $dchart_front_end; //display
                            ?> , name: "FrontEnd Projects" },

                        { y:
                            <?php
                                //count Number of backend projects
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE user_id = ? AND  project_category = 'BackEnd WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_back_end);
                                $stmt->fetch();
                                $stmt->close();

                                echo $dchart_back_end;
                            ?> , name: "BackEnd Projects" },

                        { y:
                            <?php
                                //count Number of fullstack apps
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE  user_id = ? AND project_category = 'FullStack WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_fullstack_apps);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_fullstack_apps;

                            ?> , name: "Fullstack Projects" },

                            { y:
                            <?php
                                //count Number of framework  apps
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE  user_id = ? AND project_category ='Framework WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_frameworks_apps);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_frameworks_apps;

                            ?> , name: "Framework Projects" },

                        { y:
                            <?php
                                //count Number of native apps
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE user_id = ? AND  project_category = 'Android App' OR project_category ='Ios App' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_native_app);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_native_app;
                            ?>, name: "Native Projects" },

                        { y: 
                            <?php
                                //count Number of pwe
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE   user_id = ? AND project_category = 'Progressive WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_pwe);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_pwe;

                            ?> , name: "PWA Projects" },

                        { y:
                            <?php
                                //count Number of Misc Projects
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE  user_id = ? AND  project_category = 'Misc Coding Projects' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_misc);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_misc;

                            ?>, name: "Misc Projects"},

                        { y:
                            <?php
                                //count Number of PDF CheatShets Projects
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE  user_id = ? AND    project_category ='PDF Cheat Sheets' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
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
                                //count Number of front end projects
                                $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'FrontEnd WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($front_end);
                                $stmt->fetch();
                                $stmt->close();
                                echo $front_end;

                            ?> , label: "FrontEnd Projects" },

                        { y:
                            <?php
                                //count Number of backend projects
                                $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'BackEnd WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($back_end);
                                $stmt->fetch();
                                $stmt->close();
                                echo $back_end;

                            ?> , label: "BackEnd Projects" },

                        { y:
                            <?php
                                //count Number of fullstack apps
                                $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'FullStack WebApp' OR project_category ='Framework WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($fullstack_apps);
                                $stmt->fetch();
                                $stmt->close();

                                echo $fullstack_apps
                            ?> , label: "Fullstack Projects" },

                        { y:
                            <?php
                                //count Number of native apps
                                $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Android App' OR project_category ='Ios App' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($native_app);
                                $stmt->fetch();
                                $stmt->close();

                                echo $native_app;
                            ?>, label: "Native Projects" },

                        { y: 
                            <?php
                                //count Number of pwe
                                $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Progressive WebApp' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($pwe);
                                $stmt->fetch();
                                $stmt->close();

                                echo $pwe;
                            ?> , label: "PWA Projects" },

                        { y:
                            <?php
                                //count Number of Misc Projects
                                $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Misc Coding Projects'  OR  project_category ='PDF Cheat Sheets' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($misc);
                                $stmt->fetch();
                                $stmt->close();

                                echo $misc;
                            ?>, label: "Misc Projects"}

                    ]
                    }]
                });
                chart1.render();
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

            <!--Morris Chart-->
            <script src="assets/libs/morris-js/morris.min.js"></script>
            <script src="assets/libs/raphael/raphael.min.js"></script>

            <!-- CRM Dashboard init js-->
            <script src="assets/js/pages/crm-dashboard.init.js"></script>

            <!-- App js -->
            <script src="assets/js/app.min.js"></script>

            <!--CanvasJS-->
            <script src="assets/js/jquery.canvasjs.min.js"></script>

        </body>

    </html>