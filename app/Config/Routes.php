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

// Login Sistem
$routes->get('/', 'Login::index');
$routes->get('/login/pengawas', 'Login::login_page_pengawas/');
$routes->get('/login/peserta', 'Login::login_page_peserta/');
$routes->add('/login/admin/proses', 'Login::login_proses_admin');
$routes->add('/login/pengawas/proses', 'Login::login_proses_pengawas');
$routes->add('/login/peserta/proses', 'Login::cek_peserta');
$routes->get('/logout', 'Login::logout');
$routes->get('/logout_peserta', 'Login::logout_peserta');

// Admin
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/data-peserta/kelas-x', 'Admin::peserta_kelas_x');
$routes->get('/admin/data-peserta/kelas-xi', 'Admin::peserta_kelas_xi');
$routes->get('/admin/data-peserta/kelas-xii', 'Admin::peserta_kelas_xii');
$routes->get('/admin/cetak_legitimasi', 'Admin::cetak_legitimasi');
$routes->get('/admin/data-pengawas', 'Admin::pengawas');
$routes->get('/admin/jadwal-ujian', 'Admin::jadwal_ujian');
$routes->get('/admin/cetak-legitimasi-projek/(:any)', 'Admin::cetak_kartu_legitimasi_projek/$1');
$routes->get('/admin/cetak-legitimasi-teori/(:any)', 'Admin::cetak_kartu_legitimasi_teori/$1');

// Admin/Insert-Fitur
$routes->post('/admin/jadwal-ujian/insert', 'Admin::insert_jadwal_ujian');
$routes->post('/admin/pengawas/insert', 'Admin::insert_pengawas');

// Admin/Update-Fitur
$routes->add('/admin/data-peserta/update/(:any)/ruang/kelas_x', 'Admin::update_ruang_kelas_x/$1');
$routes->add('/admin/data-peserta/update/(:any)/ruang/kelas_xi', 'Admin::update_ruang_kelas_xi/$1');
$routes->add('/admin/data-peserta/update/(:any)/ruang/kelas_xii', 'Admin::update_ruang_kelas_xii/$1');

$routes->add('/admin/data-peserta/update/(:any)/legitimasi_projek/kelas_x', 'Admin::update_legitimasi_projek_kelas_x/$1');
$routes->add('/admin/data-peserta/update/(:any)/legitimasi_projek/kelas_xi', 'Admin::update_legitimasi_projek_kelas_xi/$1');
$routes->add('/admin/data-peserta/update/(:any)/legitimasi_projek/kelas_xii', 'Admin::update_legitimasi_projek_kelas_xii/$1');

$routes->add('/admin/data-peserta/update/(:any)/legitimasi_teori/kelas_x', 'Admin::update_legitimasi_teori_kelas_x/$1');
$routes->add('/admin/data-peserta/update/(:any)/legitimasi_teori/kelas_xi', 'Admin::update_legitimasi_teori_kelas_xi/$1');
$routes->add('/admin/data-peserta/update/(:any)/legitimasi_teori/kelas_xii', 'Admin::update_legitimasi_teori_kelas_xii/$1');

// Admin/Delete-Fitur
$routes->get('/admin/pengawas/delete/(:any)', 'Admin::delete_pengawas/$1');
$routes->get('/admin/peserta/delete/(:any)', 'Admin::delete_peserta/$1');

// Peserta
$routes->get('/peserta/cek-kartu', 'Peserta::index');
$routes->add('/peserta/kartu-peserta', 'Peserta::kartu_peserta');
$routes->add('/peserta/kartu-peserta/legitimasi-projek', 'Peserta::cetak_kartu_legitimasi_projek');
$routes->add('/peserta/kartu-peserta/legitimasi-teori', 'Peserta::cetak_kartu_legitimasi_teori');

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
