<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganDokter extends Model
{
    use HasFactory;

    protected $table = 'surat_keterangan_dokters';

    protected $fillable = [
        'id_dokter',
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
}
