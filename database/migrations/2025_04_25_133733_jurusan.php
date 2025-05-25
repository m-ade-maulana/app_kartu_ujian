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
        Schema::create('jurusan', function (Blueprint $table) {
            $table->integer('id_jurusan')->primary();
            $table->string('nama_jurusan')->unique()->index();
            $table->string('slug_jurusan')->unique()->index();
        });

        Schema::create('kelas', function (Blueprint $table) {
            $table->integer('id_kelas')->primary();
            $table->string('kelas')->unique()->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusan');
        Schema::dropIfExists('kelas');
    }
};
