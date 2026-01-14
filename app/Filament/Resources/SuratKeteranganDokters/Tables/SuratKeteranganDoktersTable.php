<?php

namespace App\Filament\Resources\SuratKeteranganDokters\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SuratKeteranganDoktersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('RegisSkd.nomor_kir')
                    ->label('No Surat')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('no_reg')
                    ->label('No Registrasi')
                    ->searchable(),

                TextColumn::make('nama')
                    ->label('Nama Pasien')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('dokter.nama')
                    ->label('Dokter')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('RegisSkd.keperluan')
                    ->limit(30)
                    ->toggleable(),

                TextColumn::make('status_gizi')
                    ->badge()
                    ->colors([
                        'danger' => 'kurus',
                        'success' => 'normal',
                        'warning' => 'gemuk',
                    ]),

                // TextColumn::make('catatan')
                //     ->label('Catatan')
                //     ->limit(30)
                //     ->wrap(),

                TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                Action::make('print')
                    ->label('Lihat Surat')
                    ->icon('heroicon-o-document-text')
                    ->color('info')
                    ->url(fn ($record) => "/keterangan/{$record->id}")
                    ->openUrlInNewTab(),
                    
                Action::make('download')
                    ->label('download PDF')
                    ->icon('heroicon-o-document-text')
                    ->color('success')
                    ->url(fn ($record) => "/download/keterangan/{$record->id}")
                    ->openUrlInNewTab(),

            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
