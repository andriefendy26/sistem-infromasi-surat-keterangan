<?php

namespace App\Filament\Resources\Dokters\RelationManagers;

use App\Filament\Resources\SuratKeteranganDokters\SuratKeteranganDokterResource;
use Filament\Actions\ActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;

class SuratKeteranganDokterRelationManager extends RelationManager
{
    protected static string $relationship = 'SuratKeteranganDokter';

    protected static ?string $relatedResource = SuratKeteranganDokterResource::class;

    public function table(Table $table): Table
    {
        return $table
        ->headerActions([
            CreateAction::make()
            ]);
            // ->columns([
            //     TextColumn::make('no_reg'),
            //     TextColumn::make('no_surat'),
            //     TextColumn::make('tanggal_surat'),
            //     TextColumn::make('nama'),
            //     TextColumn::make('keperluan'),
            // ])
            // ->recordActions([
            //     ActionGroup::make([
            //         ViewAction::make(),
            //         EditAction::make(),
            //         DeleteAction::make(),
            //     ]),
            
            // ]);
    }

    // public function form(Schema $schema): Schema
    // {
    //     return $schema
    //         ->components([
    //             Forms\Components\TextInput::make('no_reg')->required(),
    //         ]);
    // }
}
