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
                   <p class="text-pink"><?= $nama_role; ?></p>
               </div>

               <!-- QUERY MENU  -->
               <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `menu_pengguna`.`id`, `menu`
                                FROM `menu_pengguna` JOIN `menu_akses_pengguna` 
                                  ON `menu_pengguna`.`id` = `menu_akses_pengguna`.`menu_id`
                               WHERE `menu_akses_pengguna`.`role_id` = $role_id
                            ORDER BY `menu_akses_pengguna`.`menu_id` ASC ";
                $menu = $this->db->query($queryMenu)->result_array(); ?>

               <!-- Sidemenu -->
               <div id="sidebar-menu">


                   <ul class="metismenu" id="side-menu">

                       <!--<li class="menu-title">Navigation</li>-->

                       <!-- LOOPING -->
                       <?php foreach ($menu as $m) : ?>

                           <!-- QUERY SUBMENU  -->
                           <?php
                                $menuId = $m['id'];
                                $querySubMenu = " SELECT *
                                            FROM `pengguna_sub_menu` JOIN `menu_pengguna` 
                                              ON `pengguna_sub_menu`.`menu_id` = `menu_pengguna`.`id`
                                           WHERE `pengguna_sub_menu`.`menu_id` = $menuId
                                             AND `pengguna_sub_menu`.`is_active` = 1 ";
                                $subMenu = $this->db->query($querySubMenu)->result_array(); ?>

                           <?php foreach ($subMenu as $sm) : ?>
                               <li>
                                   <a href="<?= base_url($sm['url']); ?>">
                                       <i class="<?= $sm['icon']; ?> text-white"></i><span class="text-white"> <?= $sm['title']; ?></span>
                                   </a>
                               </li>
                           <?php endforeach; ?>

                       <?php endforeach; ?>

                       <!-- <li>
                           <a href="#">
                               <i class="fi-book text-white"></i><span class="badge badge-warning badge-pill float-right">10</span> <span class="text-white"> Management </span>
                           </a>
                       </li>

                       <li>
                           <a href="javascript: void(0);"><i class="fi-head text-white"></i> <span class="text-white"> Informasi </span> <span class="menu-arrow"></span></a>
                           <ul class="nav-second-level" aria-expanded="false">
                               <li><a href="#" class="text-white bg-primary">Profil Saya</a></li>
                               <li><a href="#" class="text-white bg-primary">Ganti Password</a></li>
                           </ul>
                       </li> -->

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