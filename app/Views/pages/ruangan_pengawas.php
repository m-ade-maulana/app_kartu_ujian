<?= $this->extend('layouts/main') ?>

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
                        <li class="breadcrumb-item"><a href="#">Pengawas Ujian</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <?php
            if ($tanggal == $tanggal_kesatu) {
                $no = 1; ?>
                <div class="card elevation-2">
                    <div class="card-header pl-3 pt-4 border-bottom-0">
                        <h4>Pengawas Ruangan : <?= $ruangan_1 ?> <br> Tanggal : <?= $tanggal ?></h4>
                    </div>
                    <div class="card-body">
                        <table id="mp" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Ruangan</th>
                                    <th>Legitimasi Projek</th>
                                    <th>Legitimasi Teori</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($peserta_pertama as $php) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $php['nama'] ?></td>
                                        <td><?= $php['kelas'] ?></td>
                                        <td><?= $php['ruangan'] ?></td>
                                        <?php
                                        if ($pk['legitimasi_projek'] == 'no') { ?>
                                            <td style="color: red;" class="text-uppercase"><?= $php['legitimasi_projek'] ?></td>
                                            <td style="color: red;" class="text-uppercase"><?= $php['legitimasi_teori'] ?></td>
                                        <?php } else { ?>
                                            <td style="color: green" class="text-uppercase"><?= $php['legitimasi_projek'] ?></td>
                                            <td style="color: green" class="text-uppercase"><?= $php['legitimasi_teori'] ?></td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php } else if ($tanggal == $tanggal_kedua) { ?>
                <div class="card elevation-2">
                    <div class="card-header pl-3 pt-4 border-bottom-0">
                        <h4>Pengawas Ruangan : <?= $ruangan_2 ?> <br> Tanggal : <?= $tanggal ?></h4>
                    </div>
                    <div class="card-body">
                        <table id="mp" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Ruangan</th>
                                    <th>Legitimasi Projek</th>
                                    <th>Legitimasi Teori</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($peserta_kedua as $pk) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $pk['nama'] ?></td>
                                        <td><?= $pk['kelas'] ?></td>
                                        <td><?= $pk['ruangan'] ?></td>
                                        <?php

                                        if ($pk['legitimasi_projek'] == 'no') { ?>
                                            <td style="color: red;" class="text-uppercase"><?= $pk['legitimasi_projek'] ?></td>
                                            <td style="color: red;" class="text-uppercase"><?= $pk['legitimasi_teori'] ?></td>
                                        <?php } else { ?>
                                            <td style="color: green" class="text-uppercase"><?= $pk['legitimasi_projek'] ?></td>
                                            <td style="color: green" class="text-uppercase"><?= $pk['legitimasi_teori'] ?></td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php } else { ?>
                <div class="alert alert-info">
                    <span>Anda tidak mengawas hari ini</span>
                </div>
            <?php } ?>

            <!-- /.row -->
        </div><!-- /.container-fluid -->

    </div>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>