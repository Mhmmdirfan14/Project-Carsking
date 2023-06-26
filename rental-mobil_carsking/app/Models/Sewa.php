<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = "Sewa";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'nama', 'no_ktp', 'tanggal_mulai', 'tanggal_akhir', 'tujuan', 'sopir', 'mobil_id'
    ];
}
