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
            <div class="card">

                <div class="card-body">
                    <table id="peserta" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Legitimasi Projek</th>
                                <th>Legitimasi SAS Teori</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;

                            foreach ($peserta as $p) { ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= esc($p['nama']) ?></td>
                                    <td><?= esc($p['kelas']) ?></td>
                                    <td>
                                        <?php
                                        if ($p['legitimasi_projek'] == 'Yes') { ?>
                                            <a href="<?= site_url('admin/cetak-legitimasi-projek/' . $p['nis']) ?>" target="_blank" class="btn btn-sm btn-primary fw-bold">Unduh legitimasi Projek</a>
                                        <?php } else if ($p['legitimasi_projek'] == 'No') { ?>
                                            <a href="#" class="btn btn-sm btn-secondary fw-bold" tabindex="-1">Unduh Legitimasi Projek</a>
                                        <?php }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($p['legitimasi_teori'] == 'Yes') { ?>
                                            <a href="<?= site_url('admin/cetak-legitimasi-teori/' . $p['nis']) ?>" target="_blank" class="btn btn-sm btn-primary fw-bold">Unduh legitimasi Teori</a>
                                        <?php } else if ($p['legitimasi_teori'] == 'No') { ?>
                                            <a href="#" class="btn btn-sm btn-secondary fw-bold" tabindex="-1">Unduh Legitimasi Teori</a>
                                        <?php }
                                        ?>
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
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>