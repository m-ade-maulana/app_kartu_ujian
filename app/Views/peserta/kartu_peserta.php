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
                                if ($legitimasi_projek == "Yes" && $legitimasi_teori == "Yes") { ?>
                                    <a href="<?= site_url('/peserta/kartu-peserta/legitimasi-projek') ?>" target="_blank" class="btn btn-primary fw-bold">Cetak Kartu legitimasi Projek</a>
                                    <a href="<?= site_url('/peserta/kartu-peserta/legitimasi-teori') ?>" target="_blank" class="btn btn-primary fw-bold">Cetak Kartu Legitimasi Teori</a>
                                <?php } else if ($legitimasi_projek == "Yes" && $legitimasi_teori == "No") { ?>
                                    <a href="<?= site_url('/peserta/kartu-peserta/legitimasi-projek') ?>" target="_blank" class="btn btn-primary fw-bold">Cetak Kartu legitimasi Projek</a>
                                    <a href="#" target="_blank" class="btn btn-secondary fw-bold">Cetak Kartu Legitimasi Teori</a>
                                <?php } else if ($legitimasi_projek == "No" && $legitimasi_teori == "No") { ?>
                                    <a href="#" target="_blank" class="btn btn-secondary fw-bold">Cetak Kartu legitimasi Projek</a>
                                    <a href="#" target="_blank" class="btn btn-secondary fw-bold">Cetak Kartu Legitimasi Teori</a>
                                <?php }
                                ?>
                            </div>

                        </div>

                    </div>

                    <div class="mt-3">
                        <h3>Jadwal Ujian</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Waktu</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if ($kelas === "X AK" || $kelas === "X MP" || $kelas === "X TJKT" || $kelas === "X DKV" || $kelas === "X AN" || $kelas === "BP" || $kelas === "X PPLG") {
                                    $no = 1;
                                    foreach ($jadwal_ujian_kelas_x as $jpx) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $jpx['nama_mapel'] ?></td>
                                            <td><?= $jpx['jam_mulai'] . " - " . $jpx['jam_selesai'] ?></td>
                                            <td><?= $jpx['tanggal'] ?></td>
                                        </tr>
                                    <?php }
                                } else if ($kelas === "XI AKL" || $kelas === "XI MPLB" || $kelas === "XI TKJ" || $kelas === "XI DKV" || $kelas === "XI AN" || $kelas === "PSPT" || $kelas === "XI RPL") {
                                    $no = 1;
                                    foreach ($jadwal_ujian_kelas_xi as $jpxi) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $jpxi['nama_mapel'] ?></td>
                                            <td><?= $jpxi['jam_mulai'] . " - " . $jpxi['jam_selesai'] ?></td>
                                            <td><?= $jpxi['tanggal'] ?></td>
                                        </tr>
                                    <?php }
                                } else if ($kelas === "XII AKL" || $kelas === "XII MPLB" || $kelas === "XII TKJ" || $kelas === "XII DKV" || $kelas === "XII AN" || $kelas === "PSPT" || $kelas === "XII RPL") {
                                    $no = 1;
                                    foreach ($jadwal_ujian_kelas_xii as $jpxii) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $jpxii['nama_mapel'] ?></td>
                                            <td><?= $jpxii['jam_mulai'] . " - " . $jpxii['jam_selesai'] ?></td>
                                            <td><?= $jpxii['tanggal'] ?></td>
                                        </tr>
                                <?php }
                                }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.login-box -->

<?= $this->endSection() ?>