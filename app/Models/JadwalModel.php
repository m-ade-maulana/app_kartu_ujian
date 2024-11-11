<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'data_mapel_ujian';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_mapel', 'nama_mapel', 'tanggal', 'jam_mulai', 'jam_selesai', 'kelas']; // Tambahkan kolom yang ingin diizinkan untuk diinsert/update

    protected $useTimeStamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
