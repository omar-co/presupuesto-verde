<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OdsResource\Pages;
use App\Filament\Resources\OdsResource\RelationManagers;
use App\Models\Ods;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OdsResource extends Resource
{
    protected static ?string $model = Ods::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Catálogos';

    protected static ?string $label = 'Objetivo de Desarrollo Sustentable';

    protected static ?string $pluralLabel = 'Objetivos de Desarrollo Sustentable';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListOds::route('/'),
            'create' => Pages\CreateOds::route('/create'),
            'edit' => Pages\EditOds::route('/{record}/edit'),
        ];
    }
}
