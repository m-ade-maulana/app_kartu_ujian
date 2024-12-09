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
                                <td><?= $no++ ?></td>
                                <td><?= $mapels['kode_mapel'] ?></td>
                                <td><?= $mapels['nama_mapel'] ?></td>
                                <td><?= $mapels['tanggal'] ?></td>
                                <td><?= $mapels['jam_mulai'] ?></td>
                                <td><?= $mapels['jam_selesai'] ?></td>
                                <td><?= $mapels['kelas'] ?></td>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->

    </div>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>