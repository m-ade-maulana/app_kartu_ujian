<?php

namespace App\Models;

use CodeIgniter\Model;
use Predis\Command\Redis\SELECT;

class PesertaModel extends Model
{
    protected $table = 'data_peserta';
    protected $primaryKey = 'id_peserta';
    protected $allowedFields = ['nis', 'nama', 'kelas', 'foto', 'ruangan', 'legitimasi_projek', 'legitimasi_teori']; // Tambahkan kolom yang ingin diizinkan untuk diinsert/update

    public function getByData($data, $where)
    {
        return $this->db->table('data_peserta')
            ->select("*")
            ->where([$data => $where])
            ->get()
            ->getResultArray();
    }
}
