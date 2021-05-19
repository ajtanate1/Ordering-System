<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ordering System</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            @include('includes.nav')
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        @role('admin')
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="/registration" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                        class="hide-menu">Register</span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="/manage/stocks" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                            class="hide-menu">Manage Stocks</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/manage/user/info" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                                class="hide-menu">Manage User Info</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/view/reservation" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                class="hide-menu">View Reservation</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/approve/order" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                                class="hide-menu">Approve Order</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/manage/report" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                                class="hide-menu">Manage Report</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="/manag/report)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                class="hide-menu">Manage Report </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i
                                        class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic
                                    </span></a></li>
                            <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                        class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard
                                    </span></a></li>
                        </ul>
                    </li>
                    @endrole
                    @role('customer')
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="/myorder" aria-expanded="false"><i
                            class="mdi mdi-relative-scale"></i><span class="hide-menu">My Order</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/reserve/iceblocks" aria-expanded="false"><i
                                    class="mdi mdi-relative-scale"></i><span class="hide-menu">Order ice</span></a></li>
                    @endrole

                        {{-- <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i
                                        class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons
                                    </span></a></li>
                            <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                        class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome
                                        Icons </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/login/user" aria-expanded="false"><i class="mdi mdi-pencil"></i><span
                                class="hide-menu">Login As User</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="javascript:void(0)" aria-expanded="false"><i
                                class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i
                                        class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2
                                    </span></a></li>
                            <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i
                                        class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery
                                    </span></a></li>
                            <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i
                                        class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar
                                    </span></a></li>
                            <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i
                                        class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice
                                    </span></a></li>
                            <li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i
                                        class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option
                                    </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                                class="hide-menu">Authentication </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i
                                        class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a>
                            </li>
                            <li class="sidebar-item"><a href="authentication-dashboard.html" class="sidebar-link"><i
                                        class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Dashboard
                                    </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                            href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span
                                class="hide-menu">Errors </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i
                                        class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403
                                    </span></a></li>
                            <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i
                                        class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404
                                    </span></a></li>
                            <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i
                                        class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405
                                    </span></a></li>
                            <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i
                                        class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500
                                    </span></a></li>
                                </ul>
 --}}

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            @yield('content')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../../assets/libs/flot/excanvas.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>
