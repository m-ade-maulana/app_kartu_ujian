<?= $this->extend('layouts/peserta/main') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 font-weight-bold">SIKU</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card" id="card">
                <div class="card-header bg-primary">
                    <h3 class="text-center text-white">Informasi Peserta</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="<?= base_url('assets/img/avatar.jpg') ?>" alt="" class="img-thumbnail">
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-4"><span>Nomor Peserta</span></div>
                                <div class="col-sm-8"><span>: <?= $id_peserta ?></span></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4"><span>Nama Peserta</span></div>
                                <div class="col-sm-8"><span>: <?= $nama ?></span></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4"><span>Kelas</span></div>
                                <div class="col-sm-8"><span>: <?= $kelas ?></span></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4"><span>Ruangan</span></div>
                                <div class="col-sm-8"><span>: <?= $ruangan ?></span></div>
                            </div>
                            <div class="d-grid gap-2 mt-2">
                                <?php
                                if ($legitimasi_projek == "no") { ?>
                                    <a href="#" target="_blank" class="btn btn-secondary fw-bold" tabindex="-1">Cetak Kartu legitimasi Projek</a>
                                    <a href="#" target="_blank" class="btn btn-secondary fw-bold" tabindex="-1">Cetak Kartu Legitimasi Teori</a>
                                <?php } else if ($legitimasi_projek == "yes") { ?>
                                    <a href="<?= site_url('/peserta/kartu-peserta/legitimmasi-projek') ?>" target="_blank" class="btn btn-primary fw-bold">Cetak Kartu legitimasi Projek</a>
                                    <a href="#" class="btn btn-secondary fw-bold" tabindex="-1">Cetak Kartu Legitimasi Teori</a>
                                <?php } else if ($legitimasi_teori == "yes") { ?>
                                    <a href="<?= site_url('/peserta/kartu-peserta/legitimmasi-projek') ?>" target="_blank" class="btn btn-primary fw-bold">Cetak Kartu legitimasi Projek</a>
                                    <a href="<?= site_url('/peserta/kartu-peserta/legitimmasi-teori') ?>" target="_blank" class="btn btn-primary fw-bold">Cetak Kartu Legitimasi Teori</a>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.login-box -->

<?= $this->endSection() ?>