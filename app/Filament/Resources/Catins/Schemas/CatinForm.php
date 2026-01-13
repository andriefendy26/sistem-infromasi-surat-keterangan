<?php

namespace App\Filament\Resources\Catins\Schemas;

use App\Models\Bidan;
use App\Models\RegisCatin;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CatinForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Section::make('Data Bidan')
                    ->schema([
                        Select::make('id_bidan')
                            // ->relationship('bidan', 'nama')
                            ->relationship('bidan','nama')
                            ->searchable()
                            ->preload()
                            ->required()
                    ]),
                Section::make('Data Surat')
                    ->schema([
                        Select::make('id_regis_catin')
                            // ->options(RegisCatin::query()->pluck('nomor_kir', 'id'))
                            ->relationship('regisCatin','nomor_kir')
                            ->createOptionForm([
                                    DatePicker::make('tanggal')->required(),
                                    TextInput::make('nomor_kir')->required(),
                                    TextInput::make('keperluan')->required(),
                                    TextInput::make('penerima')->required(),
                            ])
                            ->searchable()
                            // ->live()
                            ->preload()
                            ->required()
                        
                    ]),
                Section::make('Data Penerima')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama'),
                        TextInput::make('tempat_lahir')
                            ->label('Tempat Lahir'),
                        DatePicker::make('tanggal_lahir')
                            ->label('Tanggal Lahir'),
                        TextInput::make('pekerjaan')
                            ->label('Pekerjaan'),
                        TextInput::make('alamat')
                            ->label('Alamat'),
                        TextInput::make('catatan')
                            ->label('Catatan'),
                    ])->columns(2)
            ]);
    }
}
