<?php

namespace App\Filament\Resources\RegisSKDS\Schemas;

use App\Models\RegisSKD;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class RegisSKDForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Section::make('Register Surat')->schema([
                    DatePicker::make('tanggal')->required(),
                    TextInput::make('nomor_kir')
                        ->default(fn () => '400.7/'. 0 . (RegisSKD::max('id') ?? 0) + 1 . '/UPTD-PKMPA')
                        ->required(),
                    TextInput::make('keperluan')->required(),
                    TextInput::make('penerima')->required(),
                ])->columns(2)
            ]);
    }
}
