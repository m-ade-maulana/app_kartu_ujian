<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Jurusan extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'jurusan';

    protected $primaryKey = 'id_jurusan';

    protected $fillable = [
        'id_jurusan',
        'nama_jurusan',
        'slug_jurusan'
    ];
}
