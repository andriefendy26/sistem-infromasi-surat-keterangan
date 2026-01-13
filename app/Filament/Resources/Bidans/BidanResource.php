<?php

namespace App\Filament\Resources\Bidans;

use App\Filament\Resources\Bidans\Pages\CreateBidan;
use App\Filament\Resources\Bidans\Pages\EditBidan;
use App\Filament\Resources\Bidans\Pages\ListBidans;
use App\Filament\Resources\Bidans\Schemas\BidanForm;
use App\Filament\Resources\Bidans\Tables\BidansTable;
use App\Models\Bidan as ModelsBidan;
use BackedEnum;
use Bidan;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BidanResource extends Resource
{
    protected static ?string $model = ModelsBidan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Schema $schema): Schema
    {
        return BidanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BidansTable::configure($table);
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
            'index' => ListBidans::route('/'),
            'create' => CreateBidan::route('/create'),
            'edit' => EditBidan::route('/{record}/edit'),
        ];
    }
}
