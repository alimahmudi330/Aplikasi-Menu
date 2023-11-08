<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelMinuman extends Model
{
    use HasFactory;

    protected $table = 'tb_minuman';
    protected $primaryKey = 'id_minuman';

    protected $fillable = [
        'foto_minuman',
        'harga_minuman',
        'deskripsi_minuman',
    ];
}
