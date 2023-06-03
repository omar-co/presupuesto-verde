<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ObjetivoAmbientalResource\Pages;
use App\Filament\Resources\ObjetivoAmbientalResource\Promarnat;
use App\Filament\Resources\ObjetivoAmbientalResource\RelationManagers;
use App\Forms\Fields\Identificacion\Modalidad;
use App\Forms\Fields\Identificacion\Ramo;
use App\Forms\Sections\Indentificacion;
use App\Models\Catalogo;
use App\Models\ObjetivoAmbiental;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ObjetivoAmbientalResource extends Resource {
    protected static ?string $model = ObjetivoAmbiental::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Objetivo Ambiental';
    protected static ?string $pluralLabel = 'Objetivos Ambientales';

    public static function form(Form $form): Form {
        return $form
            ->schema([
                Tabs::make('Heading')
                    ->tabs([
                        (new Indentificacion())->build(),
                        (new Promarnat())(),
                        Tabs\Tab::make('Contribución')
                            ->schema([
                                // ...
                            ]),
                    ])
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('ramo_id')->sortable()->searchable(),
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

    public static function getRelations(): array {
        return [
            //
        ];
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListObjetivoAmbientals::route('/'),
            'create' => Pages\CreateObjetivoAmbiental::route('/create'),
            'edit' => Pages\EditObjetivoAmbiental::route('/{record}/edit'),
        ];
    }
}
