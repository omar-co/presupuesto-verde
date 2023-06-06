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
use Filament\Tables\Filters\SelectFilter;

class ObjetivoAmbientalResource extends Resource {
    protected static ?string $model = ObjetivoAmbiental::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';
    protected static ?string $navigationGroup = 'Presupuesto Verde';

    protected static ?string $label = 'Objetivo Ambiental';
    protected static ?string $pluralLabel = 'Objetivos Ambientales';

    protected static ?int $navigationSort = -3;

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
                        Tabs\Tab::make('otro')
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
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado el')
                    ->sortable()->searchable(),
            ])
            ->filters([
                SelectFilter::make('ramo_id')
                    ->label('Ramo')
                    ->options(
                        Catalogo::select('id_ramo', 'desc_ramo')
                            ->groupBy('id_ramo', 'desc_ramo')
                            ->get()
                            ->mapWithKeys(function ($ramo, $key) {
                                return [$ramo->id_ramo => "{$ramo->id_ramo} - {$ramo->desc_ramo}"];
                            })
                    )
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
