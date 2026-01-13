<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surat_keterangan_dokters', function (Blueprint $table) {
            $table->id();
            $table->string('no_reg')->unique()->nullable();
            $table->string('no_surat')->unique()->nullable();
            $table->string('keperluan')->nullable();
            $table->date('tanggal_surat')->nullable();

            $table->string('nama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama')->nullable();
            
            $table->string('tinggi_badan')->nullable();
            $table->string('berat_badan')->nullable();
            $table->enum('status_gizi',['kurus', 'normal', 'gemuk'])->nullable();
            
            $table->string('pekerjaan');
            $table->text('alamat');

            $table->text('kesimpulan')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('hasil_tes_buta_warna')->nullable();

            $table->enum('catatan', [
                'Memenuhi syarat untuk semua jenis pekerjaan',
                'Memenuhi syarat untuk pekerjaan tertentu',
                'Harap kontrol penyakitnya'
            ])->nullable();

            $table->text('catatan_tambahan')->nullable();

            $table->foreignId('id_dokter')
                  ->references('id')
                  ->on('dokters')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keterangan_dokters');
    }
};
