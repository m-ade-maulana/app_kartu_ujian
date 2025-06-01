<?php

namespace App\Models;

// use Illuminate\Auth\Middleware\Authenticate;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PesertaUjian extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'peserta_ujian';

    protected $primaryKey = 'id_peserta';

    protected $fillable = [
        'id_peserta',
        'no_peserta',
        'nama_siswa',
        'nis',
        'jenis_kelamin',
        'id_kelas',
        'id_jurusan',
        'status_legitimasi_tulis',
        'status_legitimasi_projek',
        'ruang_ujian'
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
