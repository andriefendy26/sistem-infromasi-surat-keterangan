<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    //
    use HasFactory;

    protected $table = "catatans";

    protected $fillable = [
        'dipilih',
        'catatan',
        
        'id_skd'
    ];
    protected $casts = [
        'dipilih' => 'boolean',
    ];
    public function skd()
    {
        return $this->belongsTo(SuratKeteranganDokter::class, 'id_skd', 'id');
    }

}
