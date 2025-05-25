<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Kelas extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'kelas';

    protected $primaryKey = 'id_kelas';

    protected $fillable = [
        'id_kelas',
        'kelas',
    ];
}
