<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisSKD extends Model
{
    //

    use HasFactory;
    protected $table = "regis_skd";

    protected $fillable = [
        'tanggal',
        'nomor_kir',
        'keperluan',
        'penerima'
    ];

}
