<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->integer('id_siswa')->primary();
            $table->double('nis')->index()->unique();
            $table->double('nisn')->index()->unique();
            $table->string('nama_siswa');
            $table->string('jenis_kelamin');
            $table->integer('id_kelas')->index();
            $table->integer('id_jurusan')->index();
            $table->timestamps();
        });

        Schema::create('biodata_siswa', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->integer('id_siswa')->index();
            $table->string('nama_siswa');
            $table->string('jenis_kelamin');
            $table->double('nisn');
            $table->string('sekolah_asal');
            $table->double('nik');
            $table->double('no_kk');
            $table->double('no_akta_lahir');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('anak_ke');
            $table->string('kebutuhan_khusus');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->integer('lingkar_kepala');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('tempat_tinggal');
            $table->integer('jarak');
            $table->time('waktu_tempuh');
            $table->string('provinsi');
            $table->string('kota_kabupaten');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('dusun');
            $table->string('alamat');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('kode_pos');
            $table->integer('bujur');
            $table->integer('lintang');
            $table->integer('telpon_rumah');
            $table->integer('no_hp');
            $table->timestamps();
        });

        Schema::create('orang_tua_siswa', function (Blueprint $table) {
            $table->bigIncrements('id_orang_tua');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaaan_ibu');
            $table->string('penghasilan');
            $table->integer('id_siswa')->index()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
        Schema::dropIfExists('biodata_siswa');
        Schema::dropIfExists('orang_tua_siswa');
    }
};
