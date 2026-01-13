<?php

namespace App\Filament\Resources\Catins;

use App\Filament\Resources\Catins\Pages\CreateCatin;
use App\Filament\Resources\Catins\Pages\EditCatin;
use App\Filament\Resources\Catins\Pages\ListCatins;
use App\Filament\Resources\Catins\Schemas\CatinForm;
use App\Filament\Resources\Catins\Tables\CatinsTable;
use App\Models\Catin as ModelsCatin;
use BackedEnum;
use Catin;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CatinResource extends Resource
{
    protected static ?string $model = ModelsCatin::class;

    protected static string | UnitEnum | null $navigationGroup = 'Surat Keterangan';
    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Schema $schema): Schema
    {
        return CatinForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CatinsTable::configure($table);
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
            'index' => ListCatins::route('/'),
            'create' => CreateCatin::route('/create'),
            'edit' => EditCatin::route('/{record}/edit'),
        ];
    }
}
