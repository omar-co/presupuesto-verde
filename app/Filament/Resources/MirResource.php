<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MirResource\Pages;
use App\Filament\Resources\MirResource\RelationManagers;
use App\Models\Mir;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MirResource extends Resource
{
    protected static ?string $model = Mir::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Catálogos';

    protected static ?string $label = 'Objetivo MIR';

    protected static ?string $pluralLabel = 'Objetivos MIR';



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
            'index' => Pages\ListMirs::route('/'),
            'create' => Pages\CreateMir::route('/create'),
            'edit' => Pages\EditMir::route('/{record}/edit'),
        ];
    }
}
