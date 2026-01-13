<?php

namespace App\Filament\Resources\Catins\Pages;

use App\Filament\Resources\Catins\CatinResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCatin extends EditRecord
{
    protected static string $resource = CatinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
