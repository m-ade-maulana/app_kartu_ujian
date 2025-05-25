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
        Schema::create('peserta_ujian', function (Blueprint $table) {
            $table->integer('id_peserta')->primary();
            $table->string('no_peserta')->index()->unique();
            $table->integer('nis')->index()->unique();
            $table->string('nama_siswa');
            $table->string('jenis_kelamin');
            $table->integer('id_kelas')->index();
            $table->integer('id_jurusan')->index();
            $table->integer('status_legitimasi_tulis')->index();
            $table->integer('status_legitimasi_projek')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_ujian');
    }
};
