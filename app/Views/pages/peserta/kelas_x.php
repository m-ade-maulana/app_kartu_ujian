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
                        <li class="breadcrumb-item">Data Peserta/<a href="#">Kelas X</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <h3>Data Kelas X</h3>
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="kelas_x_mp_tab" data-toggle="pill" href="#kelas_x_mp" role="tab" aria-controls="kelas_x_mp" aria-selected="true">Manajemen Perkantoran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kelas_x_akl_tab" data-toggle="pill" href="#kelas_x_akl" role="tab" aria-controls="kelas_x_akl" aria-selected="false">Akuntansi Keuangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kelas_x_an_tab" data-toggle="pill" href="#kelas_x_an" role="tab" aria-controls="kelas_x_an" aria-selected="false">Animasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kelas_x_tjkt_tab" data-toggle="pill" href="#kelas_x_tjkt" role="tab" aria-controls="kelas_x_tjkt" aria-selected="false">Teknik Jaringan dan Komputer</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="kelas_x_dkv_tab" data-toggle="pill" href="#kelas_x_dkv" role="tab" aria-controls="kelas_x_dkv" aria-selected="false">Desain Komunikasi Visual</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kelas_x_bp_tab" data-toggle="pill" href="#kelas_x_bp" role="tab" aria-controls="kelas_x_bp" aria-selected="false">Broadcasting dan Perfileman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kelas_x_pplg_tab" data-toggle="pill" href="#kelas_x_pplg" role="tab" aria-controls="kelas_x_pplg" aria-selected="false">Pengembangan Perangkat Lunak dan Gim</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade show active" id="kelas_x_mp" role="tabpanel" aria-labelledby="kelas_x_mp_tab">
                            <table id="mp" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Ruangan</th>
                                        <th>Legitimasi Projek</th>
                                        <th>Legitiasi SAS Teori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta_x_mp as $pxmp) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxmp['nama']) ?></td>
                                            <td><?= esc($pxmp['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxmp['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasX<?= $pxmp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxmp['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasX<?= $pxmp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxmp['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasX<?= $pxmp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="kelas_x_akl" role="tabpanel" aria-labelledby="kelas_x_akl_tab">
                            <table id="akl" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Ruangan</th>
                                        <th>Legitimasi Projek</th>
                                        <th>Legitiasi SAS Teori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta_x_ak as $pxak) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxak['nama']) ?></td>
                                            <td><?= esc($pxak['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxak['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasX<?= $pxak['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxak['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasX<?= $pxak['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxak['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasX<?= $pxak['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="kelas_x_an" role="tabpanel" aria-labelledby="kelas_x_an_tab">
                            <table id="an" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Ruangan</th>
                                        <th>Legitimasi Projek</th>
                                        <th>Legitiasi SAS Teori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta_x_an as $pxan) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxan['nama']) ?></td>
                                            <td><?= esc($pxan['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxan['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasX<?= $pxan['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxan['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasX<?= $pxan['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxan['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasX<?= $pxan['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="kelas_x_tjkt" role="tabpanel" aria-labelledby="kelas_x_tjkt_tab">
                            <table id="tjkt" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Ruangan</th>
                                        <th>Legitimasi Projek</th>
                                        <th>Legitiasi SAS Teori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta_x_tjkt as $pxt) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxt['nama']) ?></td>
                                            <td><?= esc($pxt['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxt['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasX<?= $pxt['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxt['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasX<?= $pxt['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxt['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasX<?= $pxt['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="kelas_x_dkv" role="tabpanel" aria-labelledby="kelas_x_dkv_tab">
                            <table id="dkv" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Ruangan</th>
                                        <th>Legitimasi Projek</th>
                                        <th>Legitiasi SAS Teori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta_x_dkv as $pxdkv) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxdkv['nama']) ?></td>
                                            <td><?= esc($pxdkv['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxdkv['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasX<?= $pxdkv['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxdkv['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasX<?= $pxdkv['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxdkv['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasX<?= $pxdkv['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="kelas_x_bp" role="tabpanel" aria-labelledby="kelas_x_bp_tab">
                            <table id="bp" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Ruangan</th>
                                        <th>Legitimasi Projek</th>
                                        <th>Legitiasi SAS Teori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta_x_bp as $pxbp) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxbp['nama']) ?></td>
                                            <td><?= esc($pxbp['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxbp['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasX<?= $pxbp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxbp['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasX<?= $pxbp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxbp['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasX<?= $pxbp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="kelas_x_pplg" role="tabpanel" aria-labelledby="kelas_x_pplg_tab">
                            <table id="pplg" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Ruangan</th>
                                        <th>Legitimasi Projek</th>
                                        <th>Legitiasi SAS Teori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta_x_pplg as $pxpp) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxpp['nama']) ?></td>
                                            <td><?= esc($pxpp['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxpp['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasX<?= $pxpp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxpp['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasX<?= $pxpp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxpp['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasX<?= $pxpp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
        <?php
        foreach ($peserta_x as $px) { ?>
            <div class="modal fade" id="editRuanganKelasX<?= $px['id_peserta'] ?>" tabindex="-1" aria-labelledby="editRuangan" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalMapel">Edit Ruangan | <b><?= $px['nama'] ?></b> | <b><?= $px['nis'] ?></b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('/peserta/edit/ruangan/' . $px['id_peserta']) . '/kelas_x' ?>" method="post">
                                <div class="pb-2">
                                    <label for="Ruangan" class="col-form-label">Ruangan</label>
                                    <select name="ruangan" id="Ruangan" class="form-control">
                                        <option value="0">Pilih Ruangan</option>
                                        <?php
                                        for ($i = 1; $i <= 8; $i++) { ?>
                                            <option value="<?= $i ?>">Ruangan <?= $i ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-md btn-block mt-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <?php }
        ?>
        <?php
        foreach ($peserta_x as $px) { ?>
            <div class="modal fade" id="editLegitimasiTeoriKelasX<?= $px['id_peserta'] ?>" tabindex="-1" aria-labelledby="editLegitimasiTeori" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLegitimasiTeori">Edit Ruangan | <b><?= $px['nama'] ?></b> | <?= $px['nis'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('/peserta/edit/legitimasi_teori/' . $px['id_peserta']) . '/kelas_x' ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="pb-2">
                                    <label for="legitimasiTeori" class="col-form-label">Legitimasi Teori</label>
                                    <select name="legitimasi_teori" id="legitimasiTeori" class="form-control">
                                        <option value="">Pilih Status</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>

                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-md btn-block mt-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php
        foreach ($peserta_x as $px) { ?>
            <div class="modal fade" id="editLegitimasiProjekKelasX<?= $px['id_peserta'] ?>" tabindex="-1" aria-labelledby="editLegitimasiProjek" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLegitimasiProjek">Edit Legitimasi Projek | <b><?= $px['nama'] ?></b> | <?= $px['nis'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('/peserta/edit/legitimasi_projek/' . $px['id_peserta']) . '/kelas_x' ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="pb-2">
                                    <label for="legitimasiProjek" class="col-form-label">Legitimasi Projek</label>
                                    <select name="legitimasi_projek" id="legitimasiProjek" class="form-control">
                                        <option value="">Pilih Status</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-md btn-block mt-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>


    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>