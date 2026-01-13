<?php

namespace App\Filament\Resources\SuratKeteranganDokters\Pages;

use App\Filament\Resources\SuratKeteranganDokters\SuratKeteranganDokterResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSuratKeteranganDokters extends ListRecords
{
    protected static string $resource = SuratKeteranganDokterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
