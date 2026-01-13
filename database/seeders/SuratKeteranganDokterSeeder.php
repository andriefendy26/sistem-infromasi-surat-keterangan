<?php

namespace Database\Seeders;

use App\Models\Dokter;
use App\Models\SuratKeteranganDokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuratKeteranganDokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SuratKeteranganDokter::create([
            // 'id_dokter' => ,
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
        ]);
    }
}
