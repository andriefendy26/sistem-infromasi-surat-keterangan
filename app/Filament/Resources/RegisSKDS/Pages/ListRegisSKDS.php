<?php

namespace App\Filament\Resources\RegisSKDS\Pages;

use App\Filament\Resources\RegisSKDS\RegisSKDResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRegisSKDS extends ListRecords
{
    protected static string $resource = RegisSKDResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
