<?php include 'session.php';?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon3.png">
    <title>Halaman Utama - E-Kerjaya</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <?php	
	$email = $_SESSION["email"];
	$sql = mysqli_query($connect,"SELECT * FROM admin WHERE email='$email'");
	$row = mysqli_fetch_array($sql); ?>
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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <?php include 'top_nav.php';?>

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link" style="border-radius: 0 60px 60px 0;
                            color: #fff!important;
                            background: linear-gradient(to right,#3481fb,#003ea1,#003ea1,#003ea1,#3481fb);
                            box-shadow: 0 7px 12px 0 rgba(95,118,232,.21);
                            opacity: 1;" href="admin_home2.php" aria-expanded="false"><i data-feather="home"
                                    class="feather-icon"></i><span class="hide-menu">Halaman Utama</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Admin</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="register_admin.php"
                                aria-expanded="false"><i data-feather="plus-circle" class="feather-icon"></i><span
                                    class="hide-menu">Daftar Admin Baru</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Jawatan</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="tambah_jawatan.php"
                                aria-expanded="false"><i data-feather="plus-circle" class="feather-icon"></i><span
                                    class="hide-menu">Tambah Jawatan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="senarai_jawatan.php"
                                aria-expanded="false"><i data-feather="list" class="feather-icon"></i><span
                                    class="hide-menu">Senarai Jawatan</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Pemohon</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="senarai_pemohon.php"
                                aria-expanded="false"><i data-feather="list" class="feather-icon"></i><span
                                    class="hide-menu">Senarai Pemohon</span></a></li>
                        <li class="list-divider"></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                                aria-expanded="false"><i data-feather="bar-chart-2" class="feather-icon"></i><span
                                    class="hide-menu">Laporan
                                </span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="authentication-register1.html" aria-expanded="false"><i data-feather="settings"
                                    class="feather-icon"></i><span class="hide-menu">Tetapan
                                </span></a>
                        </li>

                        <li class="list-divider"></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="<?php echo $logoutAction ?>" aria-expanded="false"><i data-feather="log-out"
                                    class="feather-icon"></i><span class="hide-menu">Log Keluar</span></a></li>
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
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">
                            <?php echo $row['nama']; ?></h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><?php echo $row['jawatan']; ?>
                                    </li>
                                    <li class="breadcrumb-item"><?php echo $row['bahagian']; ?>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <?php echo date("d M Y") ?>
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
                <!-- *************************************************************** -->

                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Sales Charts Section -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <a href="senarai_jawatan.php">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Senarai Jawatan</h4>
                                    <div style="height:283px; width:100%; text-align:center;"><br><br> <img
                                            src="../assets/images/list.png" alt="user"> </div>
                                    <center>Lihat senarai jawatan</center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <a href="tambah_jawatan.php">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Jawatan</h4>
                                    <div style="height:283px; width:100%; text-align:center;"><br><br> <img
                                            src="../assets/images/add.png" alt="user"> </div>
                                    <center>Tambah jawatan baru</center>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <a href="senarai_pemohon.php">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Senarai Pemohon</h4>
                                    <div style="height:283px; width:100%; text-align:center;"><br><br> <img
                                            src="../assets/images/group.png" alt="user"> </div>
                                    <center>Lihat senarai pemohon</center>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>


            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include 'footer.php';?>
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
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
</body>

</html>