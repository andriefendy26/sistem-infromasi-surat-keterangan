<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catin extends Model
{
    //
    use HasFactory;
    protected $table = "catins";

    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'pekerjaan',
        'alamat',
        'catatan',

        'id_bidan',
        'id_regis_catin'
    ];

    public function bidan()
    {
        return $this->belongsTo(Bidan::class, 'id_bidan');
    }
    public function regisCatin()
    {
        return $this->belongsTo(RegisCatin::class);
    }

}
