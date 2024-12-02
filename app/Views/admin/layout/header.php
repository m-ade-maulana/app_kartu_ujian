<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIKU | SISTEM INFORMASI KARTU UJIAN</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/css/adminlte.min.css">
    <link rel="stylesheet" href="/assets/css/sweetalert2.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light elevation-1">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-2">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="/assets/img/sc.png" alt="Logo" class="brand-image bg-secondary img-circle elevation-2" style="opacity: .8">
                <span class="brand-text font-weight-bold">SIKU</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/assets/img/avatar5.png" class=" img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $nama ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="<?= site_url('/admin') ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Data Peserta
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <!-- Looping -->
                            <?php

                            foreach ($link as $url) { ?>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= site_url($url['url']) ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p><?= esc($url['nama_link']) ?></p>
                                        </a>
                                    </li>
                                </ul>
                            <?php } ?>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/cetak_legitimasi') ?>" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Cetak Legitimasi</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= site_url('/admin/data-pengawas') ?>" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Data Pengawas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('/admin/jadwal-ujian') ?>" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>Jadwal Ujian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('/logout') ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign"></i>
                                <p>Logout</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>