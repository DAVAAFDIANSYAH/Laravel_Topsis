<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'kepadatan_lalu_lintas',
        'Populasi_penduduk',
        'persaingan_bisnis',
        'biaya_sewa',
        'peluang_tenaga_kerja'
    ];
}
