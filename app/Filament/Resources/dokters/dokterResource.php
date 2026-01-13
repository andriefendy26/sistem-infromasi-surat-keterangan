<?php

namespace App\Filament\Resources\dokters;

use App\Filament\Resources\dokters\Pages\Createdokter;
use App\Filament\Resources\dokters\Pages\Editdokter;
use App\Filament\Resources\dokters\Pages\Listdokters;
use App\Filament\Resources\dokters\Pages\Viewdokter;
use App\Filament\Resources\Dokters\RelationManagers\SuratKeteranganDokterRelationManager;
use App\Filament\Resources\dokters\Schemas\dokterForm;
use App\Filament\Resources\dokters\Schemas\dokterInfolist;
use App\Filament\Resources\dokters\Tables\doktersTable;
use App\Models\Dokter as ModelsDokter;
use BackedEnum;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
// use dokter;

class dokterResource extends Resource
{
    protected static ?string $model = ModelsDokter::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Schema $schema): Schema
    {
        return dokterForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return dokterInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return doktersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
            SuratKeteranganDokterRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Listdokters::route('/'),
            'create' => Createdokter::route('/create'),
            // 'view' => Viewdokter::route('/{record}'),
            'edit' => Editdokter::route('/{record}/edit'),
        ];
    }
}
