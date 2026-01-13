<?php

namespace App\Filament\Resources\dokters\Pages;

use App\Filament\Resources\dokters\dokterResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class Viewdokter extends ViewRecord
{
    protected static string $resource = dokterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
