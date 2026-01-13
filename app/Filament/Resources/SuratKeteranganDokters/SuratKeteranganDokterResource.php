<?php

namespace App\Filament\Resources\SuratKeteranganDokters;

use App\Filament\Resources\SuratKeteranganDokters\Pages\CreateSuratKeteranganDokter;
use App\Filament\Resources\SuratKeteranganDokters\Pages\EditSuratKeteranganDokter;
use App\Filament\Resources\SuratKeteranganDokters\Pages\ListSuratKeteranganDokters;
use App\Filament\Resources\SuratKeteranganDokters\Schemas\SuratKeteranganDokterForm;
use App\Filament\Resources\SuratKeteranganDokters\Tables\SuratKeteranganDoktersTable;
use App\Models\SuratKeteranganDokter;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

// use SuratKeteranganDokter;

class SuratKeteranganDokterResource extends Resource
{
    protected static ?string $model = SuratKeteranganDokter::class;

    protected static string | UnitEnum | null $navigationGroup = 'Surat Keterangan';
    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'no_surat';

    public static function form(Schema $schema): Schema
    {
        return SuratKeteranganDokterForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SuratKeteranganDoktersTable::configure($table);
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
            'index' => ListSuratKeteranganDokters::route('/'),
            'create' => CreateSuratKeteranganDokter::route('/create'),
            'edit' => EditSuratKeteranganDokter::route('/{record}/edit'),
        ];
    }
}
