<?php

namespace App\Filament\Resources\RegisCatins\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
// use Illuminate\Support\Facades\Date;

class RegisCatinForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Section::make('Register Surat')->schema([
                    DatePicker::make('tanggal')->required(),
                    TextInput::make('nomor_kir')->required(),
                    TextInput::make('keperluan')->required(),
                    TextInput::make('penerima')->required(),
                ])->columns(2)
            ]);
    }
}
