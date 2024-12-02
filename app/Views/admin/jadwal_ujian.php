<?= $this->extend('admin/layout/main') ?>

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
                        <li class="breadcrumb-item"><a href="#">Jadwal Ujian</a></li>
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
                    <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target="#modalTambahMapel">Tambah Mata Pelajaran Ujian</button>
                </div>
                <div class="card-body">
                    <table id="mp" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Mapel</th>
                                <th>Mata Pelajaran</th>
                                <th>Tanggal Ujian</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($mapel as $mapels) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $mapels['kode_mapel'] ?></td>
                                    <td><?= $mapels['nama_mapel'] ?></td>
                                    <td><?= $mapels['tanggal'] ?></td>
                                    <td><?= $mapels['jam_mulai'] ?></td>
                                    <td><?= $mapels['jam_selesai'] ?></td>
                                    <td><?= $mapels['kelas'] ?></td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="modal fade" id="modalTambahMapel" tabindex="-1" aria-labelledby="modalTambahMapel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMapel">Tambah Data Mapel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= site_url('/admin/jadwal-ujian/insert') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="pb-2">
                                <label for="namaMapel" class="col-form-label">Nama Mata Pelajaran</label>
                                <select name="nama_mapel" id="namaMapel" class="form-control">
                                    <option value="">Pilih Nama Mata Pelajaran</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="PAI">PAI</option>
                                    <option value="Seni Budaya">Seni Budaya</option>
                                    <option value="Sejarah Indonesia">Sejarah Indonesia</option>
                                    <option value="Pendidikan Pancasila">Pendidikan Pancasila</option>
                                    <option value="Pend. Pancasiladan Kewarganegaraan">Pend. Pancasila dan Kewarganegaraan</option>
                                </select>
                            </div>
                            <div class="pb-2">
                                <label for="" class="col-form-label">Kode Mapel</label>
                                <input type="text" name="kode_mapel" class="form-control" value="KD<?= random_int(00000000, 99999999); ?>" readonly>
                            </div>
                            <div class="pb-2">
                                <label for="" class="col-form-label">Tanggal Ujian</label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>
                            <div class="pb-2">
                                <label for="" class="col-form-label">Mulai</label>
                                <input type="time" name="jam_mulai" class="form-control">
                            </div>
                            <div class="pb-2">
                                <label for="" class="col-form-label">Selesai</label>
                                <input type="time" name="jam_selesai" class="form-control">
                            </div>
                            <div class="pb-2">
                                <label for="" class="col-form-label">Kelas</label>
                                <select name="kelas" id="" class="form-control">
                                    <option value="">Pilih Kelas</option>
                                    <option value="X Semua Jurusan">Kelas X</option>
                                    <option value="XI Semua Jurusan">Kelas XI</option>
                                    <option value="XII Semua Jurusan">Kelas XII</option>
                                </select>
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