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
                        <img src="<?= base_url('assets/'); ?>images/users/default.png" alt="user-img" title="Gambar Profile" class="rounded-circle img-fluid">
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
                            <a href="javascript: void(0);"><i class="fi-head text-white"></i> <span class="text-white"> Informasi </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?= base_url('member'); ?>" class="text-white bg-primary">Profil Saya</a></li>
                                <li><a href="#" class="text-white bg-primary">Ganti Password</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?= base_url('auth/logout'); ?>">
                                <i class="fi-power text-white"></i><span class="text-white">Logout</span>
                            </a>
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
                                <img src="<?= base_url('assets/'); ?>images/users/default.png" alt="user" class="rounded-circle"> <span class="ml-1"><?= $pengguna['nama']; ?><i class="mdi mdi-chevron-down"></i> </span>
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

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left disable-btn">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li>
                            <div class="page-title-box">
                                <h4 class="page-title"><?= $title; ?></h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('member') ?>"><?= $title_before; ?></a></li>
                                    <li class="breadcrumb-item active"><?= $title; ?></li>
                                </ol>
                            </div>
                        </li>

                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->



            <!-- Start Page content -->
            <div class="content">
                <div class="container-fluid">

                    <!-- <h1 class="text-dark">BLANK PAGE</h1>
                    <img src="<?= base_url('assets/'); ?>images/bg-profile.svg" class="rounded mx-auto d-block" alt="" height="350"> -->

                    <div class="row">
                        <div class="col-sm-12">
                            <!-- meta -->
                            <div class="profile-user-box card-box bg-primary">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <span class="float-left mr-3"><img src="<?= base_url('assets/images/users/') . $pengguna['image']; ?>" alt="" class="thumb-lg rounded-circle"></span>
                                        <div class="media-body text-white">
                                            <h4 class="mt-1 mb-1 font-18"><?= $pengguna['nama']; ?></h4>
                                            <p class="font-13 text-light"> Saya seorang mahasiswa</p>
                                            <p class="text-light mb-0">Cimahi, Indonesia</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-right">
                                            <button type="button" class="btn btn-light waves-effect">
                                                <i class="mdi mdi-account-settings-variant mr-1"></i> Ubah Profil
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card-box ribbon-box">
                                <div class="ribbon ribbon-primary">Riwayat Order</div>
                                <div class="clearfix"></div>
                                <div class="inbox-widget">
                                    <a href="#">
                                        <div class="inbox-item">
                                            <p class="inbox-item-author">LK - Cepat Kilat</p>
                                            <p class="inbox-item-text">#01LKCPTKLT10092019 - Orderan anda sedabg diproses.</p>
                                            <hr>
                                            <p class="text-pink"><i>10 September 2019</i></p>
                                            <p class="inbox-item-date m-t-10">
                                                <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-info"> Proses </button>
                                            </p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <p class="inbox-item-author">LK - Ekonomis</p>
                                            <p class="inbox-item-text">#02LKEKNMS09092019 - Orderan di cancel/batalkan oleh anda.</p>
                                            <hr>
                                            <p class="text-pink"><i>9 September 2019</i></p>
                                            <p class="inbox-item-date m-t-10">
                                                <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-danger"> Cancel </button>
                                            </p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <p class="inbox-item-author">LK - Cepat Kilat <i class="text-muted">(promo)</i></p>
                                            <p class="inbox-item-text">#01LKCPTKLT03092019 - Orderan anda sudah diantarkan.</p>
                                            <hr>
                                            <p class="text-pink"><i>3 September 2019</i></p>
                                            <p class="inbox-item-date m-t-10">
                                                <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-success"> Selesai </button>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>


                        <div class="col-xl-8">

                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="card-box tilebox-one">
                                        <i class="icon-layers float-right text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">Jumlah Order</h6>
                                        <h2 class="m-b-20" data-plugin="counterup">3</h2>
                                    </div>
                                </div><!-- end col -->

                                <div class="col-sm-5">
                                    <div class="card-box tilebox-one">
                                        <i class="icon-rocket float-right text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">Saldo</h6>
                                        <h2 class="m-b-20">Rp <span data-plugin="counterup">150,000</span></h2>
                                    </div>
                                </div><!-- end col -->

                            </div>
                            <!-- end row -->

                        </div>
                        <!-- end row -->

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