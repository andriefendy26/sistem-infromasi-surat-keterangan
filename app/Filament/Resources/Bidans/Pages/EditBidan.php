<?php

namespace App\Filament\Resources\Bidans\Pages;

use App\Filament\Resources\Bidans\BidanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBidan extends EditRecord
{
    protected static string $resource = BidanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
