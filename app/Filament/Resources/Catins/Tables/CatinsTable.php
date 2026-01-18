<?php

namespace App\Filament\Resources\Catins\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CatinsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('nama')
                    ->label('Nama Catin'),
                TextColumn::make('id_regis_catin')
                    // ->relation('id_regis_catin' , 'nomor_kir')
                    ->label('Nomor Kir'),
                
                TextColumn::make('tempat_lahir'),
                TextColumn::make('tanggal_lahir'),
                // TextColumn::make('bidan.nama'),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
