<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisCatin extends Model
{
    //
    use HasFactory;
    protected $table = "regis_catins";

    protected $fillable = [
        'tanggal',
        'nomor_kir',
        'keperluan',
        'penerima'
    ];

    public function Catin()
    {
        return $this->hasMany(Catin::class);
    }
}
