<?php

namespace App\Filament\Resources\Catins\Pages;

use App\Filament\Resources\Catins\CatinResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCatins extends ListRecords
{
    protected static string $resource = CatinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
