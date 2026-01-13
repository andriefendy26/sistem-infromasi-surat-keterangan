<?php

namespace App\Filament\Resources\RegisSKDS\Pages;

use App\Filament\Resources\RegisSKDS\RegisSKDResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRegisSKD extends EditRecord
{
    protected static string $resource = RegisSKDResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
