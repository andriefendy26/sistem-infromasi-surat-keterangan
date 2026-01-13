<?php

namespace App\Filament\Resources\SuratKeteranganDokters\Schemas;

use App\Models\Dokter;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SuratKeteranganDokterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Section::make('Data Dokter')
                ->schema([
                    Select::make('id_dokter')
                        ->label('Dokter')
                        ->options(Dokter::query()->pluck('nama', 'id'))
                        // ->relationship('dokter', 'nama')
                        ->searchable()
                        ->live()
                        ->required(),
                ])
                ->columns(1),

                Section::make('Informasi Surat')
                ->schema([
                    TextInput::make('no_reg')
                        ->label('No Registrasi')
                        ->unique(ignoreRecord: true),

                    TextInput::make('no_surat')
                        ->label('No Surat')
                        ->unique(ignoreRecord: true),

                    TextInput::make('keperluan')
                        ->label('Keperluan'),
                    DatePicker::make('tanggal_surat')
                        ->label('Tanggal Surat'),
                ])
                ->columns(2),

                Section::make('Data Pasien')
                    ->schema([
                        TextInput::make('nama')
                            ->required(),
                        Select::make('jenis_kelamin')
                            ->options([
                                'Laki-Laki' => 'Laki Laki',
                                'Perempuan' => 'Perempuan'
                            ])
                            ->required(),

                        TextInput::make('tempat_lahir'),

                        DatePicker::make('tanggal_lahir'),

                        TextInput::make('agama'),

                        TextInput::make('pekerjaan')
                            ->required(),

                        Textarea::make('alamat')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Pemeriksaan Fisik')
                    ->schema([
                        TextInput::make('tinggi_badan')
                            ->label('Tinggi Badan (cm)')
                            ->numeric(),

                        TextInput::make('berat_badan')
                            ->label('Berat Badan (kg)')
                            ->numeric(),

                        Select::make('status_gizi')
                            ->options([
                                'Kurus' => 'Kurus',
                                'Normal' => 'Normal',
                                'Gemuk' => 'Gemuk',
                            ]),

                        TextInput::make('golongan_darah'),

                        TextInput::make('hasil_tes_buta_warna'),
                    ])
                    ->columns(3),

                Section::make('Kesimpulan & Catatan')
                    ->schema([
                        Textarea::make('kesimpulan')
                            ->required()
                            ->columnSpanFull(),

                        Select::make('catatan')
                            ->required()
                            ->options([
                                'Memenuhi syarat untuk semua jenis pekerjaan'
                                    => 'Memenuhi syarat untuk semua jenis pekerjaan',
                                'Memenuhi syarat untuk pekerjaan tertentu'
                                    => 'Memenuhi syarat untuk pekerjaan tertentu',
                                'Harap kontrol penyakitnya'
                                    => 'Harap kontrol penyakitnya',
                            ]),

                        Textarea::make('catatan_tambahan')
                            // ->required()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                ]);
    }
}
