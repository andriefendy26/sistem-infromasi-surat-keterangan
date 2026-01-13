<?php

namespace App\Filament\Resources\SuratKeteranganDokters\Pages;

use App\Filament\Resources\SuratKeteranganDokters\SuratKeteranganDokterResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSuratKeteranganDokter extends EditRecord
{
    protected static string $resource = SuratKeteranganDokterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
