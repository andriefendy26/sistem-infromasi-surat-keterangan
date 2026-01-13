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
        Schema::create('catins', function (Blueprint $table) {
            $table->id();
            
            $table->string('nama');

            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('catatan');

            $table->foreignId('id_bidan')     
                  ->references('id')
                  ->on('bidans')
                  ->onDelete('cascade');
            $table->foreignId('id_regis_catin')     
                  ->references('id')
                  ->on('regis_catins')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catins');
    }
};
