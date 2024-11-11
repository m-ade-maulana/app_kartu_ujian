<?= $this->extend('layouts/login/main') ?>

<?= $this->section('content') ?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>SIKU</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body ">
            <p class="login-box-msg">Login dulu</p>

            <form action="<?= site_url('/login/pengawas') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Kode Pengawas" name="kode_pengawas">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
            </form>

            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="<?= site_url('/') ?>" class="btn btn-block btn-success">Halaman Admin</a>
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<?= $this->endSection() ?>