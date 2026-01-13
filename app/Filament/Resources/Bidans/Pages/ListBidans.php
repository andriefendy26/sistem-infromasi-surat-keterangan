<?php

namespace App\Filament\Resources\Bidans\Pages;

use App\Filament\Resources\Bidans\BidanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBidans extends ListRecords
{
    protected static string $resource = BidanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
