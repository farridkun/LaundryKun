<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="LandryKun adalah sebuah platform jasa laundry cepat dan murah" name="description" />
    <meta content="KunCreative" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/favicon.ico">

    <!-- App css -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css" />

    <script src="<?= base_url('assets/'); ?>js/modernizr.min.js"></script>

</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu bg-primary">

            <div class="slimscroll-menu" id="remove-scroll">

                <!-- LOGO -->
                <div class="topbar-left bg-primary">
                    <a href="#" class="logo">
                        <span>
                            <img src="<?= base_url('assets/'); ?>images/logo.png" alt="" height="36">
                        </span>
                        <i>
                            <img src="<?= base_url('assets/'); ?>images/logo_sm.png" alt="" height="38">
                        </i>
                    </a>
                </div>

                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="<?= base_url('assets/'); ?>images/users/avatar-1.jpg" alt="user-img" title="Gambar Profile" class="rounded-circle img-fluid">
                    </div>
                    <h5><a href="#" class="text-white"><?= $pengguna['nama']; ?></a> </h5>
                    <p class="text-pink">Administrator</p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <!--<li class="menu-title">Navigation</li>-->

                        <li>
                            <a href="#">
                                <i class="fi-air-play text-white"></i><span class="badge badge-danger badge-pill float-right">1</span> <span class="text-white"> Dashboard </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="fi-head text-white"></i> <span class="text-white"> Pangkalan </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="#" class="text-white">Profil Saya</a></li>
                                <li><a href="#" class="text-white">Ganti Password</a></li>
                            </ul>
                        </li>

                    </ul>

                </div>
                <!-- Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fi-bell noti-icon"></i>
                                <span class="badge badge-danger badge-pill noti-icon-badge">1</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Bersihkan</small></a> </span>Notifikasi</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Selamat Datang <b><?= $pengguna['nama']; ?></b><small class="text-muted">1 menit yang lalu</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        Lihat Semua <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?= base_url('assets/'); ?>images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1"><?= $pengguna['nama']; ?><i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-head"></i> <span>Profil Saya</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-help"></i> <span>Bantuan</span>
                                </a>

                                <!-- item-->
                                <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>
                </nav>

            </div>
            <!-- Top Bar End -->



            <!-- Start Page content -->
            <div class="content">
                <div class="container-fluid">

                    <h1 class="text-dark">BLANK PAGE</h1>

                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer">
                2019 © <a href="instagram.com/farrid_jr" class="text-pink">@Farrid_Jr</a> - <b>KunCreative</b>
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- jQuery  -->
    <script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/metisMenu.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/waves.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.slimscroll.js"></script>

    <!-- App js -->
    <script src="<?= base_url('assets/'); ?>js/jquery.core.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.app.js"></script>

</body>

</html>