<?php

namespace App\Filament\Resources\RegisSKDS;

use App\Filament\Resources\RegisSKDS\Pages\CreateRegisSKD;
use App\Filament\Resources\RegisSKDS\Pages\EditRegisSKD;
use App\Filament\Resources\RegisSKDS\Pages\ListRegisSKDS;
use App\Filament\Resources\RegisSKDS\Schemas\RegisSKDForm;
use App\Filament\Resources\RegisSKDS\Tables\RegisSKDSTable;
use App\Models\RegisSKD as ModelsRegisSKD;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use RegisSKD;
use UnitEnum;

class RegisSKDResource extends Resource
{
    protected static ?string $model = ModelsRegisSKD::class;

    protected static string | UnitEnum | null $navigationGroup = 'Register Surat';
    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nomor_kir';

    public static function form(Schema $schema): Schema
    {
        return RegisSKDForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RegisSKDSTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRegisSKDS::route('/'),
            'create' => CreateRegisSKD::route('/create'),
            'edit' => EditRegisSKD::route('/{record}/edit'),
        ];
    }
}
