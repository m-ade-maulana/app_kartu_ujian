<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

Route::get('/', [AdminController::class, 'index'])->name('dasboard.index');
// Presensi
Route::get('/presensi_guru_staff', [AdminController::class, 'presensi_guru_staff'])->name('presensi_guru_staff.presensi_guru_staff');
Route::get('/presensi_siswa', [AdminController::class, 'presensi_siswa'])->name('presensi_siswa.presensi_siswa');
// Ujian
Route::get('/ujian_sts', [AdminController::class, 'ujian_sts'])->name('ujian_sts.ujian_sts');
Route::get('/ujian_sas', [AdminController::class, 'ujian_sas'])->name('ujian_sas.ujian_sas');
Route::get('/ujian_Projek', [AdminController::class, 'ujian_projek'])->name('ujian_projek.ujian_projek');
Route::get('/kartu_ujian', [AdminController::class, 'kartu_ujian'])->name('kartu_ujian.kartu_ujian');
// Master
Route::get('/peserta_ujian', [AdminController::class, 'peserta_ujian'])->name('peserta_ujian.peserta_ujian');
Route::put('/peserta_ujian/update/{id_peserta}', [AdminController::class, 'update_peserta'])->name('peserta.update_peserta');
Route::post('/import_data', [AdminController::class, 'import_data_peserta'])->name('import_data.import_data_peserta');
// Administrasi Guru

// Client
Route::get('/client/login', [ClientController::class, 'index'])->name('login.index');
Route::post('/client/masuk', [ClientController::class, 'masuk'])->name('proses.masuk');
Route::get('/client/keluar', [ClientController::class, 'keluar'])->name('logout.keluar');
Route::get('/client/dashboard', [ClientController::class, 'dashboard'])->name('dashboard.dashboard');
Route::get('/client/cetak/kartu_projek/{id_peserta}', [ClientController::class, 'unduh_kartu_legitimasi_projek'])->name('cetak.unduh_kartu_legitimasi_projek');

// Logout
Route::get('/logout', [ClientController::class, 'keluar']);
