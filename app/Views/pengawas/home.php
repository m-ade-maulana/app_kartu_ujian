<?= $this->extend('pengawas/layout/main') ?>
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
            <div class="p-5 mb-4 bg-white rounded elevation-4">
                <div class="container py-4">
                    <h1 class="fw-bold">Selamat Datang</h1>
                    <p class="col-md-8 fs-4"><b>SIKU</b> adalah sistem informasi kartu ujian yang digunakan peserta ujian untuk mengetahui jadwal ujian siswa dan mencetak kartu ujian siswa</p>
                    <button class="btn btn-secondary btn-lg" type="button">Lihat Data Peserta</button>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>