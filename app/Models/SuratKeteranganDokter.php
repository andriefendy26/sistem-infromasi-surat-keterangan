<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;



class SuratKeteranganDokter extends Model
{
    use HasFactory;

    protected $table = 'surat_keterangan_dokters';

    protected $fillable = [
        'id_dokter',
        'id_regis_skd',
        'no_reg',
        'no_surat',
        'keperluan',
        'tanggal_surat',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'tinggi_badan',
        'berat_badan',
        'status_gizi',
        'pekerjaan',
        'alamat',
        'kesimpulan',
        'golongan_darah',
        'hasil_tes_buta_warna',
        'catatan',
        'catatan_tambahan',
    ];

    /**
     * Relasi ke Dokter
     */
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }

    public function RegisSkd()
    {
        return $this->belongsTo(RegisSKD::class, 'id_regis_skd');
    }

    public function catatans(): HasMany
    {
        return $this->hasMany(Catatan::class, 'id_skd', 'id');
    }
}
