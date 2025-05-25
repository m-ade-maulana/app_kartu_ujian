<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Mapel extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'mata_pelajaran';

    protected $primaryKey = 'id_mapel';

    protected $fillable = [
        'nama_mapel',
        'tanggal_ujian',
        'waktu_ujian'
    ];
}
