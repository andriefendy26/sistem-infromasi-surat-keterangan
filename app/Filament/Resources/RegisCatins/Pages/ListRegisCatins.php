<?php

namespace App\Filament\Resources\RegisCatins\Pages;

use App\Filament\Resources\RegisCatins\RegisCatinResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRegisCatins extends ListRecords
{
    protected static string $resource = RegisCatinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
