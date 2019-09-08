<!-- Begin page -->
<div class="accountbg" style="background: url('<?= base_url('assets/'); ?>images/bg-1.jpg');background-size: cover;background-position: center;"></div>

<div class="wrapper-page account-page-full bg-primary">

    <div class="card bg-primary">
        <div class="card-block">

            <div class="account-box">

                <div class="card-box p-5 bg-primary">
                    <h2 class="text-uppercase text-center pb-4">
                        <a href="#" class="text-success">
                            <span><img src="<?= base_url('assets/'); ?>images/logo.png" alt="" height="46"></span>
                        </a>
                    </h2>

                    <?= $this->session->flashdata('message'); ?>

                    <form class="form-horizontal" method="post" action="<?= base_url('auth'); ?>">

                        <div class="form-group m-b-20 row">
                            <div class="col-12">
                                <label for="email" class="text-white">E-mail</label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Silahkan Masukkan E-mail Anda" value="<?= set_value('email'); ?>" autocomplete="off">
                                <?= form_error('email', '<div class="btn btn-danger waves-light waves-effect btn-sm text-white">', '</div>') ?>
                            </div>
                        </div>

                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <label for="password" class="text-white">Password</label>
                                <input class="form-control" type="password" id="password" name="password" placeholder="Silahkan Masukkan Password Anda" autocomplete="off">
                                <?= form_error('password', '<div class="btn btn-danger waves-light waves-effect btn-sm text-white">', '</div>') ?>
                            </div>
                        </div>

                        <div class="form-group row m-b-20">
                            <div class="col-12">

                                <div class="checkbox checkbox-pink">
                                    <input id="remember" type="checkbox" checked="">
                                    <label for="remember" class="text-white">
                                        Ingat akun
                                    </label>
                                    <a href="#" class="text-white float-right"><i>Lupa Password?</i></a>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row text-center m-t-10">
                            <div class="col-12">
                                <button class="btn btn-block btn-pink waves-effect waves-light" type="submit">Masuk</button>
                            </div>
                        </div>

                    </form>

                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-white">Tidak memiliki akun? <a href="<?= base_url('auth/daftar'); ?>" class="text-pink m-l-5"><b>Daftar</b></a></p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="m-t-40 text-center">
        <p class="account-copyright text-white"><?= date('Y'); ?> © <a href="instagram.com/farrid_jr" class="text-pink">Farrid_Jr</a> - <b>KunCreative</b></p>
    </div>

</div>