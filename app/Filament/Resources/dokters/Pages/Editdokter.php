<?php

namespace App\Filament\Resources\dokters\Pages;

use App\Filament\Resources\dokters\dokterResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class Editdokter extends EditRecord
{
    protected static string $resource = dokterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
