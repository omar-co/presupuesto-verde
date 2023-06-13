<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ObjetivoAmbientalResource\Pages;
use App\Filament\Resources\ObjetivoAmbientalResource\Promarnat;
use App\Filament\Resources\ObjetivoAmbientalResource\RelationManagers;
use App\Forms\Sections\Clasificacion;
use App\Filament\Resources\ObjetivoAmbientalResource\Repository;
use App\Forms\Sections\Contribucion;
use App\Forms\Sections\Cuantificacion;
use App\Forms\Sections\Indentificacion;
use App\Forms\Sections\Vinculacion;
use App\Models\Catalogo;
use App\Models\ObjetivoAmbiental;
use App\Services\FormMessage;
use App\Settings\Calendario;
use Awcodes\Shout\Shout;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Wizard;
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
                Shout::make('success')
                    ->content((new FormMessage())(app(Calendario::class)))
                    ->type('info')
                    ->columnSpan('full'),
                Wizard::make([
                    Wizard\Step::make('Identificación')
                        ->description('Identificación')
                        ->schema([
                            Card::make()
                                ->schema([
                                    (new Indentificacion())->build(),
                                ])
                        ]),
                    Wizard\Step::make('Promarnat')
                        ->description('Promarnat')
                        ->schema([
                            (new Promarnat())(),
                        ]),
                    Wizard\Step::make('Vinculación otros')
                        ->description('Vinculación otros')
                        ->schema([
                            (new Vinculacion())->build(),
                        ]),
                    Wizard\Step::make('Contribución PP-PV')
                        ->description('Contribución PP-PV')
                        ->schema([
                            (new Contribucion())->build(),
                        ]),
                    Wizard\Step::make('Cuantificación')
                        ->description('Cuantificación')
                        ->schema([
                            (new Cuantificacion())->build()->reactive(),
                        ]),
                    Wizard\Step::make('Clasificación')
                        ->description('Clasificación')
                        ->schema([
                            (new Clasificacion())->build(),
                        ]),
                ])->columnSpan(2)
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
                    ->options(Repository::ramos())
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
