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

            <?= validation_list_errors() ?>
            <div class="card elevation-2">
                <div class="card-header pl-3 pt-4 border-bottom-0">
                    <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target="#modalTambahPengawas">Tambah Pengawas</button>
                </div>
                <div class="card-body">
                    <table id="mp" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kode Pengawas</th>
                                <th>Hari Pertama</th>
                                <th>Hari Kedua</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no = 1;
                            foreach ($data_pengawas as $dp) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $dp['nama'] ?></td>
                                    <td><?= $dp['kode_pengawas'] ?></td>
                                    <td><?= $dp['ruangan_hari_pertama'] ?></td>
                                    <td><?= $dp['ruangan_hari_kedua'] ?></td>
                                    <td>
                                        <a href="/pengawas/hapus_data/<?= $dp['id'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="modal fade" id="modalTambahPengawas" tabindex="-1" aria-labelledby="modalTambahPengawas" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pengawas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= site_url('/pengawas/tambah') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="pb-2">
                                <label for="Nama" class="col-form-label">Nama Pengawas</label>
                                <select name="nama" id="Nama" class="form-control">
                                    <option value="">Pilih Nama Guru</option>
                                    <?php
                                    foreach ($guru as $g) { ?>
                                        <option value="<?= $g['nama'] ?>"><?= $g['nama'] . " | " . $g['jabatan'] ?> </option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                            <div class="pb-2">
                                <label for="" class="col-form-label">Kode Pengawas</label>
                                <input type="text" name="kode_pengawas" class="form-control" value="KD<?= rand(111111, 999999) ?>" readonly>
                            </div>
                            <div class="pb-2">
                                <label for="" class="col-form-label">Hari Pertama Mengawas</label>
                                <select name="hari_pertama" id="hari_pertama" class="form-control">
                                    <option value="">Pilih Ruangan Mengawas</option>
                                    <?php
                                    for ($i = 1; $i <= 8; $i++) { ?>
                                        <option value="Ruangan <?= $i ?>">Ruangan <?= $i ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                            <div class="pb-2">
                                <label for="" class="col-form-label">Tanggal Mengawas Hari Pertama</label>
                                <input type="date" class="form-control" name="tanggal_hari_pertama">
                            </div>

                            <div class="pb-2">
                                <label for="" class="col-form-label">Hari Kedua Mengawas</label>
                                <select name="hari_kedua" id="hari_kedua" class="form-control">
                                    <option value="">Pilih Ruangan Mengawas</option>
                                    <?php
                                    for ($i = 1; $i <= 8; $i++) { ?>
                                        <option value="Ruangan <?= $i ?>">Ruangan <?= $i ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                            <div class="pb-2">
                                <label for="" class="col-form-label">Tanggal Mengawas Hari Kedua</label>
                                <input type="date" class="form-control" name="tanggal_hari_kedua">
                            </div>
                            <button type="submit" class="btn btn-primary btn-md btn-block mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>