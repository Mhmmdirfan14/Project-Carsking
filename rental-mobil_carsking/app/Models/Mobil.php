<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = "Mobil";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'nopol', 'warna', 'harga_sewa', 'deskripsi', 'tahun', 'sopir', 'merk_id'
    ];
}
