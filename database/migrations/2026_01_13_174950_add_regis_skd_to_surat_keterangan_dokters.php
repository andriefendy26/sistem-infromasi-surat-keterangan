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
        Schema::table('surat_keterangan_dokters', function (Blueprint $table) {
            //
            $table->foreignId('id_regis_skd')
                    ->references('id')
                    ->on('regis_skd')
                    ->onDelete('cascade')->nullable() ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surat_keterangan_dokters', function (Blueprint $table) {
            //
            $table->dropForeign('id_regis_skd');
            $table->dropColumn('id_regis_skd');
        });
    }
};
