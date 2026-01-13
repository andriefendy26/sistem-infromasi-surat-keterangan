<?php

namespace App\Filament\Resources\dokters\Schemas;

use Filament\Actions\DeleteAction;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class dokterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Section::make('Data Dokter')
                ->schema([
                    TextInput::make('nama')
                        ->label('Nama Dokter')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('pangkat')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('jabatan')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('nip')
                        ->label('NIP')
                        // ->required() 
                        ->unique(ignoreRecord: true)
                        ->maxLength(50),

                    TextInput::make('sipd')
                        ->label('No SIPD')
                        // ->required()
                        ->unique(ignoreRecord: true)
                        ->maxLength(50),
                ])
                ->columns(2),
            ]);
    }
}
