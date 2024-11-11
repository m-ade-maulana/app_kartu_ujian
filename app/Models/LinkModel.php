<?php

namespace App\Models;

use CodeIgniter\Model;

class LinkModel extends Model
{
    protected $table = 'link';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nam_link', 'url']; // Tambahkan kolom yang ingin diizinkan untuk diinsert/update

    public function getAllLink()
    {
        return $this->findAll(); // Mengambil semua data
    }
}
