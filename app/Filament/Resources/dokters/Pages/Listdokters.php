<?php

namespace App\Filament\Resources\dokters\Pages;

use App\Filament\Resources\dokters\dokterResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class Listdokters extends ListRecords
{
    protected static string $resource = dokterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
