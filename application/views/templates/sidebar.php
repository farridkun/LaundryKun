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