<?php

namespace App\Filament\Resources\Bidans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BidanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

             Section::make('Data Bidan')->schema([
                 //
                 TextInput::make('nama'),
                 TextInput::make('jabatan'),
                 TextInput::make('pangkat'),
                 TextInput::make('nip'),
                 TextInput::make('sipd'),

             ])->columns(2)
            ]);
    }
}
