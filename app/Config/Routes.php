<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->get('/login/page/pengawas', 'Login::login_page_pengawas/');
$routes->add('/login/pengawas', 'Login::login_pengawas/');
$routes->add('/login/admin', 'Login::login_admin/');
$routes->add('/cek_peserta/kartu', 'Login::cek_peserta/');
$routes->add('/logout', 'Login::logout');
$routes->add('/logout_peserta', 'Login::logout_peserta');

// Home
$routes->get('/home', 'Home::index');

// Peserta
$routes->get('/peserta/kelas_x', 'Peserta::kelas_x');
$routes->get('/peserta/kelas_xi', 'Peserta::kelas_xi');
$routes->get('/peserta/kelas_xii', 'Peserta::kelas_xii');
$routes->add('/peserta/edit/ruangan/(:any)/kelas_x', 'Peserta::edit_kelas_x/$1');
$routes->add('/peserta/edit/legitimasi_projek/(:any)/kelas_x', 'Peserta::edit_kelas_x/$1');
$routes->add('/peserta/edit/legitimasi_teori/(:any)/kelas_x', 'Peserta::edit_kelas_x/$1');

// Halaman Peserta
$routes->get('/cek_peserta', 'Peserta::cek_peserta');
$routes->get('/kartu_peserta', 'Peserta::kartu_peserta');
$routes->get('/cetak_kartu_legitimasi_projek', 'Peserta::cetak_kartu_legitimasi_projek');

$routes->add('/peserta/edit/ruangan/(:any)/kelas_xi', 'Peserta::edit_kelas_xi/$1');
$routes->add('/peserta/edit/legitimasi_projek/(:num)/kelas_xi', 'Peserta::edit_kelas_xi/$1');
$routes->add('/peserta/edit/legitimasi_teori/(:num)/kelas_xi', 'Peserta::edit_kelas_xi/$1');

$routes->add('/peserta/edit/ruangan/(:any)/kelas_xii', 'Peserta::edit_kelas_xii/$1');
$routes->add('/peserta/edit/legitimasi_projek/(:num)/kelas_xii', 'Peserta::edit_kelas_xii/$1');
$routes->add('/peserta/edit/legitimasi_teori/(:num)/kelas_xii', 'Peserta::edit_kelas_xii/$1');

// Pengawas
$routes->get('/pengawas', 'Pengawas::index');
$routes->get('/pengawas/ruangan', 'Pengawas::ruangan_pengawas');
$routes->add('/pengawas/tambah', 'Pengawas::insert_pengawas');
$routes->add('/pengawas/hapus_data/(:num)', 'Pengawas::delete_data/$1');

// Jadwal Ujian
$routes->get('/jadwal_ujian', 'Jadwal::index');
$routes->add('/jadwal_ujian/tambah', 'Jadwal::insert_mapel_ujian');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
