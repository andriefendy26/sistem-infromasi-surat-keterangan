<?php

namespace App\Filament\Resources\RegisCatins;

use App\Filament\Resources\RegisCatins\Pages\CreateRegisCatin;
use App\Filament\Resources\RegisCatins\Pages\EditRegisCatin;
use App\Filament\Resources\RegisCatins\Pages\ListRegisCatins;
use App\Filament\Resources\RegisCatins\Schemas\RegisCatinForm;
use App\Filament\Resources\RegisCatins\Tables\RegisCatinsTable;
use App\Models\RegisCatin as ModelsRegisCatin;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use RegisCatin;
use UnitEnum;

class RegisCatinResource extends Resource
{
    protected static ?string $model = ModelsRegisCatin::class;

    protected static string | UnitEnum | null $navigationGroup = 'Register Surat';
    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nomor_kir';

    public static function form(Schema $schema): Schema
    {
        return RegisCatinForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RegisCatinsTable::configure($table);
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
            'index' => ListRegisCatins::route('/'),
            'create' => CreateRegisCatin::route('/create'),
            'edit' => EditRegisCatin::route('/{record}/edit'),
        ];
    }
}
