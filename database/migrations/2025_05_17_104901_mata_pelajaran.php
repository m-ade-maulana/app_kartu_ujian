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
        Schema::create('mata_pelajaran', function (Blueprint $table) {
            $table->integer('id_mapel')->primary();
            $table->string('nama_mapel');
            $table->string('tanggal_ujian');
            $table->string('waktu_ujian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
