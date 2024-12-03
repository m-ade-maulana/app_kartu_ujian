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
                        <li class="breadcrumb-item">Data Peserta/<a href="#">Kelas XI</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <h3>Data Kelas XI</h3>
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="kelas_xi_mp_tab" data-toggle="pill" href="#kelas_xi_mp" role="tab" aria-controls="kelas_xi_mp" aria-selected="true">Manajemen Perkantoran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kelas_xi_akl_tab" data-toggle="pill" href="#kelas_xi_akl" role="tab" aria-controls="kelas_xi_akl" aria-selected="false">Akuntansi Keuangan Lembaga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kelas_xi_an_tab" data-toggle="pill" href="#kelas_xi_an" role="tab" aria-controls="kelas_xi_an" aria-selected="false">Animasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kelas_xi_tjkt_tab" data-toggle="pill" href="#kelas_xi_tjkt" role="tab" aria-controls="kelas_xi_tjkt" aria-selected="false">Teknik Komputer dan Jaringan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="kelas_xi_dkv_tab" data-toggle="pill" href="#kelas_xi_dkv" role="tab" aria-controls="kelas_xi_dkv" aria-selected="false">Desain Komunikasi Visual</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kelas_xi_bp_tab" data-toggle="pill" href="#kelas_xi_bp" role="tab" aria-controls="kelas_xi_bp" aria-selected="false">Broadcasting dan Perfileman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="kelas_xi_pplg_tab" data-toggle="pill" href="#kelas_xi_pplg" role="tab" aria-controls="kelas_xi_pplg" aria-selected="false">Rekayasa Perangkat Lunak</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade show active" id="kelas_xi_mp" role="tabpanel" aria-labelledby="kelas_xi_mp_tab">
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
                                    foreach ($peserta_xi_mp as $pxmp) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxmp['nama']) ?></td>
                                            <td><?= esc($pxmp['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxmp['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasXI<?= $pxmp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxmp['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasXI<?= $pxmp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxmp['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasXI<?= $pxmp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
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
                        <div class="tab-pane fade" id="kelas_xi_akl" role="tabpanel" aria-labelledby="kelas_xi_akl_tab">
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
                                    foreach ($peserta_xi_ak as $pxak) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxak['nama']) ?></td>
                                            <td><?= esc($pxak['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxak['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasXI<?= $pxak['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxak['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasXI<?= $pxak['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxak['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasXI<?= $pxak['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
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
                        <div class="tab-pane fade" id="kelas_xi_an" role="tabpanel" aria-labelledby="kelas_xi_an_tab">
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
                                    foreach ($peserta_xi_an as $pxa) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxa['nama']) ?></td>
                                            <td><?= esc($pxa['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxa['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasXI<?= $pxa['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxa['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasXI<?= $pxa['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxa['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasXI<?= $pxa['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
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
                        <div class="tab-pane fade" id="kelas_xi_tjkt" role="tabpanel" aria-labelledby="kelas_xi_tjkt_tab">
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
                                    foreach ($peserta_xi_tjkt as $pxt) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxt['nama']) ?></td>
                                            <td><?= esc($pxt['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxt['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasXI<?= $pxt['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxt['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasXI<?= $pxt['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxt['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasXI<?= $pxt['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
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
                        <div class="tab-pane fade" id="kelas_xi_dkv" role="tabpanel" aria-labelledby="kelas_xi_dkv_tab">
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
                                    foreach ($peserta_xi_dkv as $pxd) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxd['nama']) ?></td>
                                            <td><?= esc($pxd['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxd['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasXI<?= $pxd['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxd['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasXI<?= $pxd['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxd['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasXI<?= $pxd['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
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
                        <div class="tab-pane fade" id="kelas_xi_bp" role="tabpanel" aria-labelledby="kelas_xi_bp_tab">
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
                                    foreach ($peserta_xi_bp as $pxb) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxb['nama']) ?></td>
                                            <td><?= esc($pxb['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxb['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasXI<?= $pxb['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxb['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasXI<?= $pxb['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxb['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasXI<?= $pxb['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
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
                        <div class="tab-pane fade" id="kelas_xi_pplg" role="tabpanel" aria-labelledby="kelas_xi_pplg_tab">
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
                                    foreach ($peserta_xi_pplg as $pxp) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= esc($pxp['nama']) ?></td>
                                            <td><?= esc($pxp['kelas']) ?></td>
                                            <td>
                                                <?= esc($pxp['ruangan']) ?> |
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editRuanganKelasXI<?= $pxp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxp['legitimasi_projek']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiProjekKelasXI<?= $pxp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <?= esc($pxp['legitimasi_teori']) ?>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editLegitimasiTeoriKelasXI<?= $pxp['id_peserta'] ?>"><i class="fas fa-edit"></i></a>
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
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

        <?php
        foreach ($peserta_xi as $px) { ?>
            <div class="modal fade" id="editRuanganKelasXI<?= $px['id_peserta'] ?>" tabindex="-1" aria-labelledby="editRuangan" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalMapel">Edit Ruangan | <b><?= $px['nama'] ?></b> | <b><?= $px['nis'] ?></b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('/admin/data-peserta/update/' . $px['id_peserta']) . '/ruang/kelas_xi' ?>" method="post">
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
        foreach ($peserta_xi as $px) { ?>
            <div class="modal fade" id="editLegitimasiTeoriKelasXI<?= $px['id_peserta'] ?>" tabindex="-1" aria-labelledby="editLegitimasiTeori" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLegitimasiTeori">Edit Ruangan | <b><?= $px['nama'] ?></b> | <?= $px['nis'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('/admin/data-peserta/update/' . $px['id_peserta']) . '/legitimasi_teori/kelas_xi' ?>" method="post">
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
        foreach ($peserta_xi as $px) { ?>
            <div class="modal fade" id="editLegitimasiProjekKelasXI<?= $px['id_peserta'] ?>" tabindex="-1" aria-labelledby="editLegitimasiProjek" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLegitimasiProjek">Edit Legitimasi Projek | <b><?= $px['nama'] ?></b> | <?= $px['nis'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= site_url('/admin/data-peserta/update/' . $px['id_peserta']) . '/legitimasi_projek/kelas_xi' ?>" method="post">
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