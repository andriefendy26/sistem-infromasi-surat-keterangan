<?php

use App\Models\SuratKeteranganDokter;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Container\Attributes\Auth;

Route::get('/', function () {
    return view('welcome');
});

//print pdf
Route::get('/keterangan/{id}', function ($id) {
    $surat = SuratKeteranganDokter::findOrFail($id);
    return view('pdf.surat-keterangan', compact(['surat']));
})->middleware('auth');

//download pdf
Route::get('/download/keterangan/{id}', function($id) {
    // $logoTarakan = base64_encode(file_get_contents(public_path('storage/gambar/logo-tarakan.png')));
    $surat = SuratKeteranganDokter::findOrFail($id);
    // dd($surat);
    
    $pdf = Pdf::loadView('pdf.surat-keterangan', compact(['surat']));

    return $pdf->download('surat-keterangan.pdf');
})->middleware('auth');