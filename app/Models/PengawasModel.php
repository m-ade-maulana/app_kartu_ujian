<?php

namespace App\Models;

use CodeIgniter\Model;

class PengawasModel extends Model
{
    protected $table = 'data_pengawas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_pengawas', 'nama', 'ruangan_hari_pertama', 'tanggal_hari_pertama', 'ruangan_hari_kedua', 'tanggal_hari_kedua']; // Tambahkan kolom yang ingin diizinkan untuk diinsert/update

    protected $useTimeStamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getData()
    {
        return $this->findAll(); // Mengambil semua data
    }

    public function login_pengawas($kode)
    {
        return $this->db->table('data_pengawas')
            ->where(['kode_pengawas' => $kode])
            ->get()
            ->getRowArray();
    }
}
