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
                <div class="left-side-menu">

                    <div class="slimscroll-menu">

                        <!--- Sidemenu -->
                        <div id="sidebar-menu">

                            <ul class="metismenu" id="side-menu">

                                <li class="menu-title">Navigation</li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-airplay"></i>
                                        <span class="badge badge-success badge-pill float-right">4</span>
                                        <span> Dashboards </span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="index.html">Dashboard 1</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-2.html">Dashboard 2</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-3.html">Dashboard 3</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-4.html">Dashboard 4</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-pocket"></i>
                                        <span> Apps </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="apps-kanbanboard.html">Kanban Board</a>
                                        </li>
                                        <li>
                                            <a href="apps-calendar.html">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="apps-contacts.html">Contacts</a>
                                        </li>
                                        <li>
                                            <a href="apps-projects.html">Projects</a>
                                        </li>
                                        <li>
                                            <a href="apps-tickets.html">Tickets</a>
                                        </li>
                                        <li>
                                            <a href="apps-companies.html">Companies</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-users"></i>
                                        <span> CRM </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="crm-dashboard.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="crm-contacts.html">Contacts</a>
                                        </li>
                                        <li>
                                            <a href="crm-opportunities.html">Opportunities</a>
                                        </li>
                                        <li>
                                            <a href="crm-leads.html">Leads</a>
                                        </li>
                                        <li>
                                            <a href="crm-customers.html">Customers</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-shopping-cart"></i>
                                        <span> eCommerce </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="ecommerce-dashboard.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="ecommerce-products.html">Products</a>
                                        </li>
                                        <li>
                                            <a href="ecommerce-prduct-detail.html">Product Detail</a>
                                        </li>
                                        <li>
                                            <a href="ecommerce-product-edit.html">Product Edit</a>
                                        </li>
                                        <li>
                                            <a href="ecommerce-orders.html">Orders</a>
                                        </li>
                                        <li>
                                            <a href="ecommerce-sellers.html">Sellers</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-sidebar"></i>
                                        <span class="badge badge-pink float-right">New</span>
                                        <span> Layouts </span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="layouts-sidebar-user.html">Sidebar with User</a>
                                        </li>
                                        <li>
                                            <a href="layouts-sidebar-sm.html">Small Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="layouts-dark-sidebar.html">Dark Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="layouts-light-topbar.html">Light Topbar</a>
                                        </li>
                                        <li>
                                            <a href="layouts-preloader.html">Preloader</a>
                                        </li>
                                        <li>
                                            <a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a>
                                        </li>
                                        <li>
                                            <a href="layouts-boxed.html">Boxed</a>
                                        </li>
                                    </ul>
                                </li>
                    
                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-mail"></i>
                                        <span> Email </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="email-inbox.html">Inbox</a>
                                        </li>
                                        <li>
                                            <a href="email-read.html">Read Email</a>
                                        </li>
                                        <li>
                                            <a href="email-compose.html">Compose Email</a>
                                        </li>
                                        <li>
                                            <a href="email-templates.html">Email Templates</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-file-text"></i>
                                        <span> Pages </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="pages-starter.html">Starter</a>
                                        </li>
                                        <li>
                                            <a href="pages-login.html">Log In</a>
                                        </li>
                                        <li>
                                            <a href="pages-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="pages-signin-signup.html">Signin - Signup</a>
                                        </li>
                                        <li>
                                            <a href="pages-recoverpw.html">Recover Password</a>
                                        </li>
                                        <li>
                                            <a href="pages-lock-screen.html">Lock Screen</a>
                                        </li>
                                        <li>
                                            <a href="pages-logout.html">Logout</a>
                                        </li>
                                        <li>
                                            <a href="pages-confirm-mail.html">Confirm Mail</a>
                                        </li>
                                        <li>
                                            <a href="pages-404.html">Error 404</a>
                                        </li>
                                        <li>
                                            <a href="pages-404-alt.html">Error 404-alt</a>
                                        </li>
                                        <li>
                                            <a href="pages-500.html">Error 500</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-package"></i>
                                        <span> Extra Pages </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="extras-profile.html">Profile</a>
                                        </li>
                                        <li>
                                            <a href="extras-timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="extras-sitemap.html">Sitemap</a>
                                        </li>
                                        <li>
                                            <a href="extras-invoice.html">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="extras-faqs.html">FAQs</a>
                                        </li>
                                        <li>
                                            <a href="extras-search-results.html">Search Results</a>
                                        </li>
                                        <li>
                                            <a href="extras-pricing.html">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="extras-maintenance.html">Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="extras-coming-soon.html">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a href="extras-gallery.html">Gallery</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-title mt-2">Components</li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-briefcase"></i>
                                        <span> UI Elements </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="ui-buttons.html">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="ui-cards.html">Cards</a>
                                        </li>
                                        <li>
                                            <a href="ui-portlets.html">Portlets</a>
                                        </li>
                                        <li>
                                            <a href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                        </li>
                                        <li>
                                            <a href="ui-modals.html">Modals</a>
                                        </li>
                                        <li>
                                            <a href="ui-progress.html">Progress</a>
                                        </li>
                                        <li>
                                            <a href="ui-notifications.html">Notifications</a>
                                        </li>
                                        <li>
                                            <a href="ui-spinners.html">Spinners</a>
                                        </li>
                                        <li>
                                            <a href="ui-images.html">Images</a>
                                        </li>
                                        <li>
                                            <a href="ui-carousel.html">Carousel</a>
                                        </li>
                                        <li>
                                            <a href="ui-video.html">Embed Video</a>
                                        </li>
                                        <li>
                                            <a href="ui-dropdowns.html">Dropdowns</a>
                                        </li>
                                        <li>
                                            <a href="ui-ribbons.html">Ribbons</a>
                                        </li>
                                        <li>
                                            <a href="ui-tooltips-popovers.html">Tooltips & Popovers</a>
                                        </li>
                                        <li>
                                            <a href="ui-general.html">General UI</a>
                                        </li>
                                        <li>
                                            <a href="ui-typography.html">Typography</a>
                                        </li>
                                        <li>
                                            <a href="ui-grid.html">Grid</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-layers"></i>
                                        <span class="badge badge-info float-right">Hot</span>
                                        <span> Admin UI </span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="admin-widgets.html">Widgets</a>
                                        </li>
                                        <li>
                                            <a href="admin-nestable.html">Nestable List</a>
                                        </li>
                                        <li>
                                            <a href="admin-range-slider.html">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="admin-animation.html">Animation</a>
                                        </li>
                                        <li>
                                            <a href="admin-sweet-alert.html">Sweet Alert</a>
                                        </li>
                                        <li>
                                            <a href="admin-tour.html">Tour Page</a>
                                        </li>
                                        <li>
                                            <a href="admin-loading-buttons.html">Loading Buttons</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-cpu"></i>
                                        <span> Icons </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="icons-feather.html">Feather Icons</a>
                                        </li>
                                        <li>
                                            <a href="icons-mdi.html">Material Design Icons</a>
                                        </li>
                                        <li>
                                            <a href="icons-dripicons.html">Dripicons</a>
                                        </li>
                                        <li>
                                            <a href="icons-font-awesome.html">Font Awesome</a>
                                        </li>
                                        <li>
                                            <a href="icons-themify.html">Themify</a>
                                        </li>
                                        <li>
                                            <a href="icons-simple-line.html">Simple Line</a>
                                        </li>
                                        <li>
                                            <a href="icons-weather.html">Weather</a>
                                        </li>
                                    </ul>
                                </li>
                    
                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-bookmark"></i>
                                        <span> Forms </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="forms-elements.html">General Elements</a>
                                        </li>
                                        <li>
                                            <a href="forms-advanced.html">Advanced</a>
                                        </li>
                                        <li>
                                            <a href="forms-validation.html">Validation</a>
                                        </li>
                                        <li>
                                            <a href="forms-pickers.html">Pickers</a>
                                        </li>
                                        <li>
                                            <a href="forms-wizard.html">Wizard</a>
                                        </li>
                                        <li>
                                            <a href="forms-masks.html">Masks</a>
                                        </li>
                                        <li>
                                            <a href="forms-summernote.html">Summernote</a>
                                        </li>
                                        <li>
                                            <a href="forms-quilljs.html">Quilljs Editor</a>
                                        </li>
                                        <li>
                                            <a href="forms-file-uploads.html">File Uploads</a>
                                        </li>
                                        <li>
                                            <a href="forms-x-editable.html">X Editable</a>
                                        </li>
                                        <li>
                                            <a href="forms-image-crop.html">Image Crop</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-grid"></i>
                                        <span> Tables </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="tables-basic.html">Basic Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-datatables.html">Data Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-editable.html">Editable Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-responsive.html">Responsive Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-footables.html">FooTable</a>
                                        </li>
                                        <li>
                                            <a href="tables-bootstrap.html">Bootstrap Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-tablesaw.html">Tablesaw Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-jsgrid.html">JsGrid Tables</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-bar-chart-2"></i>
                                        <span> Charts </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="charts-flot.html">Flot Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-morris.html">Morris Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-chartjs.html">Chartjs Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-peity.html">Peity Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-chartist.html">Chartist Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-c3.html">C3 Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-sparklines.html">Sparklines Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-knob.html">Jquery Knob Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-ricksaw.html">Ricksaw Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-just-gage.html">JustGage Charts</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-map"></i>
                                        <span> Maps </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li>
                                            <a href="maps-google.html">Google Maps</a>
                                        </li>
                                        <li>
                                            <a href="maps-vector.html">Vector Maps</a>
                                        </li>
                                        <li>
                                            <a href="maps-mapael.html">Mapael Maps</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-folder-plus"></i>
                                        <span> Multi Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        <li>
                                            <a href="javascript: void(0);">Level 1.1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul class="nav-third-level nav" aria-expanded="false">
                                                <li>
                                                    <a href="javascript: void(0);">Level 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Level 2.2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <!-- End Sidebar -->

                        <div class="clearfix"></div>

                    </div>
                    <!-- Sidebar -left -->

                </div>
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
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                            </div>     
                            <!-- end page title --> 

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card-box bg-pattern">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-blue rounded">
                                                    <i class="fe-layers avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup">120</span></h3>
                                                    <p class="text-muted mb-0 text-truncate">Active Deals</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-box-->
                                </div> <!-- end col -->

                                <div class="col-md-4">
                                    <div class="card-box bg-pattern">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-success rounded">
                                                    <i class="fe-award avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup">741</span></h3>
                                                    <p class="text-muted mb-0 text-truncate">Won Deals</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-box-->
                                </div> <!-- end col -->
                                <div class="col-md-4">
                                    <div class="card-box bg-pattern">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-md bg-danger rounded">
                                                    <i class="fe-delete avatar-title font-22 text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <h3 class="text-dark my-1"><span data-plugin="counterup">256</span></h3>
                                                    <p class="text-muted mb-0 text-truncate">Lost Deals</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-box-->
                                </div> <!-- end col -->
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
                                            <h4 class="header-title mb-0">Deals Analytics</h4>

                                            <div id="cardCollpase1" class="collapse pt-3 show">
                                                <div id="deals-analytics" style="height: 350px;" class="morris-chart"></div>
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
                                            <h4 class="header-title mb-0">Average Time for Deal</h4>

                                            <div id="cardCollpase2" class="collapse pt-3 show">
                                                <div id="morris-bar-example" style="height: 350px;" class="morris-chart"></div>

                                            </div>
                                        </div>
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div>
                            <!-- end row-->


                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-widgets">
                                                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                                <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                            </div>
                                            <h4 class="header-title mb-0">Recent Contacts</h4>

                                            <div id="cardCollpase3" class="collapse pt-3 show">
                                                <div class="table-responsive">
                                                    <table class="table table-centered table-hover mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Basic Info</th>
                                                                <th>Phone</th>
                                                                <th>Email</th>
                                                                <th>Company</th>
                                                                <th>Created Date</th>
                                                                <th style="width: 82px;">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/user-4.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J. Friend</a>
                                                                </td>
                                                                <td>
                                                                    937-330-1634
                                                                </td>
                                                                <td>
                                                                    pauljfrnd@jourrapide.com
                                                                </td>
                                                                <td>
                                                                    Vine Corporation
                                                                </td>
                                                                <td>
                                                                    07/07/2018
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/user-3.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Bryan J. Luellen</a>
                                                                </td>
                                                                <td>
                                                                    215-302-3376
                                                                </td>
                                                                <td>
                                                                    bryuellen@dayrep.com
                                                                </td>
                                                                <td>
                                                                    Blue Motors
                                                                </td>
                                                                <td>
                                                                    09/12/2018
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/user-3.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Kathryn S. Collier</a>
                                                                </td>
                                                                <td>
                                                                    828-216-2190
                                                                </td>
                                                                <td>
                                                                    collier@jourrapide.com
                                                                </td>
                                                                <td>
                                                                    Arcanetworks
                                                                </td>
                                                                <td>
                                                                    06/30/2018
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/user-1.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Timothy Kauper</a>
                                                                </td>
                                                                <td>
                                                                    (216) 75 612 706
                                                                </td>
                                                                <td>
                                                                    thykauper@rhyta.com
                                                                </td>
                                                                <td>
                                                                    Boar Records
                                                                </td>
                                                                <td>
                                                                    09/08/2018
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/user-5.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Zara Raws</a>
                                                                </td>
                                                                <td>
                                                                    (02) 75 150 655
                                                                </td>
                                                                <td>
                                                                    austin@dayrep.com
                                                                </td>
                                                                <td>
                                                                    Bearings
                                                                </td>
                                                                <td>
                                                                    07/15/2018
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                </td>
                                                            </tr>

                                                            
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->

                                            </div> <!-- end .collapse-->
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->

                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body" dir="ltr">
                                            <div class="card-widgets">
                                                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                                <a data-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                                                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                            </div>
                                            <h4 class="header-title mb-0">Sales by Product Group</h4>

                                            <div id="cardCollpase4" class="collapse pt-3 show">
                                                <div id="morris-donut-example" style="height: 310px;" class="morris-chart"></div>
                                                <div class="text-center">
                                                    <p class="text-muted font-15 font-family-secondary mb-0">
                                                        <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Group 1</span>
                                                        <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Group 2</span>
                                                        <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-light"></i> Group 3</span>
                                                    </p>
                                                </div>
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

            <!-- Vendor js -->
            <script src="assets/js/vendor.min.js"></script>

            <!--Morris Chart-->
            <script src="assets/libs/morris-js/morris.min.js"></script>
            <script src="assets/libs/raphael/raphael.min.js"></script>

            <!-- CRM Dashboard init js-->
            <script src="assets/js/pages/crm-dashboard.init.js"></script>

            <!-- App js -->
            <script src="assets/js/app.min.js"></script>
            
        </body>

    </html>