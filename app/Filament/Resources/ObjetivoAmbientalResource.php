<?php

namespace App\Filament\Resources;

use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use App\Filament\Resources\ObjetivoAmbientalResource\Pages;
use App\Forms\Sections\Clasificacion;
use App\Forms\Sections\Contribucion;
use App\Forms\Sections\Cuantificacion;
use App\Forms\Sections\Indentificacion;
use App\Forms\Sections\Politicaspublicas\PoliticasPublicas;
use App\Forms\Sections\Vinculacion;
use App\Models\Catalogo;
use App\Models\ObjetivoAmbiental;
use App\Services\FormMessage;
use App\Services\FormService;
use App\Settings\Calendario;
use Awcodes\Shout\Shout;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Wizard;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;

class ObjetivoAmbientalResource extends Resource {
    protected static ?string $model = ObjetivoAmbiental::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';
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
                Hidden::make('form_id')
                    ->default(FormService::new()),
                Wizard::make([
                    Wizard\Step::make('Identificación')
                        ->description('del Programa presupuestario Pp')
                        ->schema([
                            (new Indentificacion())->build(),
                        ]),
                    Wizard\Step::make('Vinculación')
                        ->description('con políticas públicas')
                        ->schema([
                            (new PoliticasPublicas(self::$model))->build(),
                        ]),
                    Wizard\Step::make('Instrumentos relevantes')
                        ->description('Vinculación')
                        ->schema([
                            (new Vinculacion())->build(),
                        ]),
                    Wizard\Step::make('Contribución PP-PV')
                        ->description('del Programa presupuestario Pp')
                        ->schema([
                            (new Contribucion())->build(),
                        ]),
                    Wizard\Step::make('Cuantificación')
                        ->description('del Programa presupuestario Pp')
                        ->schema([
                            (new Cuantificacion())->build(),
                        ]),
                    Wizard\Step::make('Clasificación')
                        ->description('del Programa presupuestario Pp')
                        ->schema([
                            (new Clasificacion())->build(),
                        ]),
                ])->columnSpan(2)
                //->skippable()
            ]);
    }

    public static function table(Table $table): Table {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('ramo.desc_ramo'),
                Tables\Columns\TextColumn::make('modalidad.desc_modalidad'),
                Tables\Columns\TextColumn::make('programa_presupuestario_id'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado el')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('ramo_id')
                    ->label('Ramo')
                    ->options(Catalogo::ramosOptionList())
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->headerActions([
                //FilamentExportHeaderAction::make('exportar')
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                FilamentExportBulkAction::make('Exportar'),
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
