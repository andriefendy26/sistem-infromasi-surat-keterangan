<?php

namespace App\Filament\Resources\RegisCatins\Pages;

use App\Filament\Resources\RegisCatins\RegisCatinResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRegisCatin extends EditRecord
{
    protected static string $resource = RegisCatinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
