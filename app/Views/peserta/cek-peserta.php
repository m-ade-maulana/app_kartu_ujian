<?= $this->extend('layouts/login/main') ?>

<?= $this->section('content') ?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>SIKU</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body ">
            <p class="login-box-msg">Cek Kartu Peserta</p>

            <form action="<?= site_url('/login/peserta/proses') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan NIS anda" name="nis">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-edit"></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Cek Sekarang</button>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<?= $this->endSection() ?>