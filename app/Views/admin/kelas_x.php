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
                                        <th>Aksi</th>
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
                                            <td>
                                                <a href="<?= site_url('/admin/peserta/delete/' . $pxmp['id_peserta']) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
                                        <th>Aksi</th>
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
                                            <td>
                                                <a href="/peserta.p/hapus_data/<?= $pxak['id_peserta'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta_x_an as $pxa) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxa['nama']) ?></td>
                                            <td><?= esc($pxa['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxa['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasX<?= $pxa['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxa['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasX<?= $pxa['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxa['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasX<?= $pxa['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <a href="/pengawas/hapus_data/<?= $pxa['id_peserta'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
                                        <th>Aksi</th>
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
                                            <td>
                                                <a href="/pengawas/hapus_data/<?= $pxt['id_peserta'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta_x_dkv as $pxd) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxd['nama']) ?></td>
                                            <td><?= esc($pxd['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxd['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasX<?= $pxd['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxd['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasX<?= $pxd['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxd['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasX<?= $pxd['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <a href="/pengawas/hapus_data/<?= $pxd['id_peserta'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta_x_bp as $pxb) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxb['nama']) ?></td>
                                            <td><?= esc($pxb['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxb['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasX<?= $pxb['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxb['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasX<?= $pxb['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxb['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasX<?= $pxb['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <a href="/pengawas/hapus_data/<?= $pxb['id_peserta'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($peserta_x_pplg as $pxp) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxp['nama']) ?></td>
                                            <td><?= esc($pxp['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxp['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasX<?= $pxp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxp['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasX<?= $pxp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxp['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasX<?= $pxp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <a href="/pengawas/hapus_data/<?= $pxp['id_peserta'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
                            <form action="<?= site_url('/admin/data-peserta/update/' . $px['id_peserta'] . '/ruang/kelas_x') ?>" method="post">
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
                            <form action="<?= site_url('/admin/data-peserta/update/' . $px['id_peserta'] . '/legitimasi_teori/kelas_x') ?>" method="post">
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
                            <form action="<?= site_url('/admin/data-peserta/update/' . $px['id_peserta'] . '/legitimasi_projek/kelas_x') ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="pb-2">
                                    <label for="legitimasiProjek" class="col-form-label">Legitimasi Projek</label>
                                    <select name="legitimasi_projek" id="legitimasiProjek" class="form-control">
                                        <option value="">Pilih Status</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
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