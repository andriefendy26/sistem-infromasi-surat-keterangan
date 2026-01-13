<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';

    protected $fillable = [
        'nama',
        'pangkat',
        'jabatan',
        'nip',
        'sipd',
    ];

    public function SuratKeteranganDokter()
    {
        return $this->hasMany(SuratKeteranganDokter::class, 'id_dokter');
    }
}
