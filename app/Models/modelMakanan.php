<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class modelMakanan extends Model
{
    use HasFactory;

    protected $table = 'tb_makanan';
    protected $primaryKey = 'id_makanan';

    protected $fillable = [
        'foto_makanan',
        'harga_makanan',
        'deskripsi_makanan',
    ];
}
