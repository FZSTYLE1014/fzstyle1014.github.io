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
	$row = mysqli_fetch_array($sql);
	 ?>
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
                        <li class="sidebar-item"> <a class="sidebar-link" href="admin_home2.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Halaman Utama</span></a></li>
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
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="senarai_pemohon.php"
                                aria-expanded="false" style="border-radius: 0 60px 60px 0;
    color: #fff!important;
    background: linear-gradient(to right,#3481fb,#003ea1,#003ea1,#003ea1,#3481fb);
    box-shadow: 0 7px 12px 0 rgba(95,118,232,.21);
    opacity: 1;"><i data-feather="users" class="feather-icon"></i><span class="hide-menu">Senarai Pemohon
                                </span></a>
                        </li>
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
                    <div class="col-12 mt-4">

                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="senarai_pemohon.php">Jawatan</a>
                            <a class="breadcrumb-item" href="senarai_pemohon2.php">Pemohon</a>
                            <span class="breadcrumb-item active">Profil</span>
                        </nav>

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-3">Profil</h4>

                                <div class="row">
                                    <div class="col-sm-3 mb-2 mb-sm-0">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active show" id="v-pills-peribadi-tab" data-toggle="pill"
                                                href="#v-pills-peribadi" role="tab" aria-controls="v-pills-peribadi"
                                                aria-selected="true">
                                                <span class="d-none d-lg-block"><i data-feather="user"
                                                        class="feather-icon"></i> Maklumat Peribadi</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-pasangan-tab" data-toggle="pill"
                                                href="#v-pills-pasangan" role="tab" aria-controls="v-pills-pasangan"
                                                aria-selected="false">
                                                <span class="d-none d-lg-block"><i data-feather="user-plus"
                                                        class="feather-icon"></i> Maklumat Pasangan</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-keluarga-tab" data-toggle="pill"
                                                href="#v-pills-keluarga" role="tab" aria-controls="v-pills-keluarga"
                                                aria-selected="false">
                                                <span class="d-none d-lg-block"><i data-feather="users"
                                                        class="feather-icon"></i> Maklumat Keluarga</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-kelab-tab" data-toggle="pill"
                                                href="#v-pills-kelab" role="tab" aria-controls="v-pills-kelab"
                                                aria-selected="false">
                                                <span class="d-none d-lg-block"><i data-feather="file-text"
                                                        class="feather-icon"></i> Trengkas/Kelab</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-kemahiran-tab" data-toggle="pill"
                                                href="#v-pills-kemahiran" role="tab" aria-controls="v-pills-kemahiran"
                                                aria-selected="false">
                                                <span class="d-none d-lg-block"><i data-feather="file-text"
                                                        class="feather-icon"></i> Sijil Kemahiran</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-akademik-tab" data-toggle="pill"
                                                href="#v-pills-akademik" role="tab" aria-controls="v-pills-akademik"
                                                aria-selected="false">
                                                <span class="d-none d-lg-block"><i data-feather="award"
                                                        class="feather-icon"></i> Kelayakan Akademik</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-pengajian-tab" data-toggle="pill"
                                                href="#v-pills-pengajian" role="tab" aria-controls="v-pills-pengajian"
                                                aria-selected="false">
                                                <span class="d-none d-lg-block"><i data-feather="award"
                                                        class="feather-icon"></i> Pengajian Tinggi</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-pengalaman-tab" data-toggle="pill"
                                                href="#v-pills-pengalaman" role="tab" aria-controls="v-pills-pengalaman"
                                                aria-selected="false">
                                                <span class="d-none d-lg-block"><i data-feather="briefcase"
                                                        class="feather-icon"></i> Pengalaman Kerja</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-lampiran-tab" data-toggle="pill"
                                                href="#v-pills-lampiran" role="tab" aria-controls="v-pills-lampiran"
                                                aria-selected="false">
                                                <span class="d-none d-lg-block"><i data-feather="link-2"
                                                        class="feather-icon"></i> Lampiran</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-status-tab" data-toggle="pill"
                                                href="#v-pills-status" role="tab" aria-controls="v-pills-status"
                                                aria-selected="false">
                                                <span class="d-none d-lg-block"><i data-feather="mail"
                                                        class="feather-icon"></i> Status</span>
                                            </a>
                                        </div>
                                    </div> <!-- end col-->

                                    <div class="col-sm-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade active show" id="v-pills-peribadi" role="tabpanel"
                                                aria-labelledby="v-pills-peribadi-tab">
                                                <p class="mb-0"><?php include 'tabPeribadi_profil.php';?></p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-pasangan" role="tabpanel"
                                                aria-labelledby="v-pills-pasangan-tab">
                                                <p class="mb-0"><?php include 'tabPasangan_profil.php';?></p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-keluarga" role="tabpanel"
                                                aria-labelledby="v-pills-keluarga-tab">
                                                <p class="mb-0"><?php include 'tabKeluarga_profil.php';?></p>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-kelab" role="tabpanel"
                                                aria-labelledby="v-pills-kelab-tab">
                                                <p class="mb-0"><?php include 'tabKelab_profil.php';?></p>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-kemahiran" role="tabpanel"
                                                aria-labelledby="v-pills-kemahiran-tab">
                                                <p class="mb-0"><?php include 'tabKemahiran_profil.php';?></p>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-akademik" role="tabpanel"
                                                aria-labelledby="v-pills-akademik-tab">
                                                <p class="mb-0"><?php include 'tabAkademik_profil.php';?></p>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-pengajian" role="tabpanel"
                                                aria-labelledby="v-pills-pengajian-tab">
                                                <p class="mb-0"><?php include 'tabPengajian_profil.php';?></p>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-pengalaman" role="tabpanel"
                                                aria-labelledby="v-pills-pengalaman-tab">
                                                <p class="mb-0"><?php include 'tabPengalaman_profil.php';?></p>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-lampiran" role="tabpanel"
                                                aria-labelledby="v-pills-lampiran-tab">
                                                <p class="mb-0"><?php include 'tabLampiran_profil.php';?></p>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-status" role="tabpanel"
                                                aria-labelledby="v-pills-status-tab">
                                                <p class="mb-0"><?php include 'tabStatus_profil.php';?></p>
                                            </div>
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end col-->
                                </div>
                                <!-- end row-->
                            </div> <!-- end card-body-->
                        </div>
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