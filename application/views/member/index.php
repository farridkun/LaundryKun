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
                                            <p class="font-13 text-light"><?= $pengguna['email']; ?> </p>
                                            <p class="text-light mb-0">Terdaftar Sejak, <?= date('d F Y', $pengguna['date_created']); ?></p>
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
                                        <i class="icon-handbag float-right text-muted"></i>
                                        <h6 class="text-muted text-uppercase mt-0">Jumlah Order</h6>
                                        <h2 class="m-b-20" data-plugin="counterup">3</h2>
                                    </div>
                                </div><!-- end col -->

                                <div class="col-sm-5">
                                    <div class="card-box tilebox-one">
                                        <i class="icon-wallet float-right text-muted"></i>
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