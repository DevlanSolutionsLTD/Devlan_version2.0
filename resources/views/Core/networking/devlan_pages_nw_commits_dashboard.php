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
                                        <h4 class="page-title">Networking  Commits Dashboard</h4>
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
                                                    <i class="fas fa-project-diagram  avatar-title font-22 text-white"></i>
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
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $pkt;?></span></h3>
                                                    <p class="text-muted mb-0 text-truncate">PacketTracer </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div> <!-- end Packetracer projects -->

                                <div class="col-md-4">
                                    <div class="card-box bg-pattern">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-success rounded">
                                                    <i class="fas fa-signal  avatar-title font-22 text-white"></i>
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
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $gns;?></span></h3>
                                                    <p class="text-muted mb-0 text-truncate">GNS3 Commits</p>
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
                                                    <i class="fa fa-file-signature avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <?php
                                                        //count Number of fullstack apps
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Network Automation' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($network_auto);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $network_auto;?></span></h3>
                                                    <p class="text-muted mb-0 text-truncate">N/W Automation</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-box-->
                                </div> <!-- end fullstack projects -->

                                <div class="col-md-6">
                                    <div class="card-box bg-pattern">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-success rounded">
                                                    <i class="fa fa-random avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <?php
                                                        //count Number of native apps
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Misc Networking Projects' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($misc);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $misc;?></span></h3>
                                                    <p class="text-muted mb-0 text-truncate">Misc Commits</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-box-->
                                </div> <!-- end native app projects -->

                                <div class="col-md-6">
                                    <div class="card-box bg-pattern">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-success rounded">
                                                    <i class="fas fa-scroll  avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <?php
                                                        //count Number of pwe
                                                        $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'PDF Cheat Sheets' ";
                                                        $stmt = $mysqli->prepare($result);
                                                        //$stmt->bind_param('i', $user_id);
                                                        $stmt->execute();
                                                        $stmt->bind_result($pwe);
                                                        $stmt->fetch();
                                                        $stmt->close();
                                                    ?>
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup"><?php echo $pwe;?></span></h3>
                                                    <p class="text-muted mb-0 text-truncate">PDF Cheatsheets</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-box-->
                                </div> <!-- end Cheatsheets -->

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
                                //count Number of Packettracer Projects
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE user_id = ? AND  project_category = 'Packet Tracer Topologies' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_packet_tracer);
                                $stmt->fetch();
                                $stmt->close();

                                echo $dchart_packet_tracer; //display
                            ?> , name: "Packet Tracer Projects" },

                        { y:
                            <?php
                                //count Number of Network Automations
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE user_id = ? AND  project_category = 'Network Automation' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_network_auto);
                                $stmt->fetch();
                                $stmt->close();

                                echo $dchart_network_auto;
                            ?> , name: "Network Automations" },

                        { y:
                            <?php
                                //count Number of GNS 3 Topologies
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE  user_id = ? AND project_category = 'GNS 3 Topologies' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_GNS3);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_GNS3;

                            ?> , name: "GNS 3 Topologies" },

                            { y:
                            <?php
                                //count Number of Misc Networking Projects
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE  user_id = ? AND project_category ='Misc Networking Projects' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_misc);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_misc;

                            ?> , name: "Misc Networking Projects" },

                        { y:
                            <?php
                                //count Number of PDF Cheat Sheets
                                $user_id = $_SESSION['user_id'];
                                $result ="SELECT count(*)  FROM  projects WHERE user_id = ? AND  project_category = 'PDF Cheat Sheets' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_pdf);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_pdf;
                            ?>, name: "PDF Cheat Sheets" }
                        
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
                                //count Number of Packettracer Projects
                                $result ="SELECT count(*)  FROM  projects WHERE  project_category = 'Packet Tracer Topologies' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->execute();
                                $stmt->bind_result($dchart_packet_tracer);
                                $stmt->fetch();
                                $stmt->close();

                                echo $dchart_packet_tracer; //display
                            ?> , label: "Packet Tracer Commits" },

                        { y:
                            <?php
                                //count Number of Network Automations
                                $result ="SELECT count(*)  FROM  projects WHERE   project_category = 'Network Automation' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->execute();
                                $stmt->bind_result($dchart_network_auto);
                                $stmt->fetch();
                                $stmt->close();

                                echo $dchart_network_auto;
                            ?> , label: "Network Automations" },

                        { y:
                            <?php
                                //count Number of GNS 3 Topologies
                                $result ="SELECT count(*)  FROM  projects WHERE   project_category = 'GNS 3 Topologies' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->execute();
                                $stmt->bind_result($dchart_GNS3);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_GNS3;

                            ?> , label: "GNS 3 Commits" },

                            { y:
                            <?php
                                //count Number of Misc Networking Projects
                                $result ="SELECT count(*)  FROM  projects WHERE project_category ='Misc Networking Projects' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_misc);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_misc;

                            ?> , label: "Misc Commits" },

                        { y:
                            <?php
                                //count Number of PDF Cheat Sheets
                                $result ="SELECT count(*)  FROM  projects WHERE project_category = 'PDF Cheat Sheets' ";
                                $stmt = $mysqli->prepare($result);
                                //$stmt->bind_param('i', $user_id);
                                $stmt->execute();
                                $stmt->bind_result($dchart_pdf);
                                $stmt->fetch();
                                $stmt->close();
                                echo $dchart_pdf;
                            ?>, label: "PDF Cheat Sheets" }
                        
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