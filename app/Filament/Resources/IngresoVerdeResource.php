<?php

namespace App\Filament\Resources;

use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;
use App\Filament\Resources\IngresoVerdeResource\Pages;
use App\Filament\Resources\IngresoVerdeResource\RelationManagers;
use App\Filament\Resources\ObjetivoAmbientalResource\Repository;
use App\Forms\Sections\Contribucion;
use App\Forms\Sections\Cuantificacion;
use App\Forms\Sections\Indentificacion;
use App\Forms\Sections\Politicaspublicas\PoliticasPublicas;
use App\Forms\Sections\Vinculacion;
use App\Models\Catalogo;
use App\Models\IngresoVerde;
use App\Repositories\CatalogoRepository;
use App\Services\FormMessage;
use App\Services\FormService;
use App\Settings\Calendario;
use Awcodes\Shout\Shout;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Wizard;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IngresoVerdeResource extends Resource
{
    protected static ?string $model = IngresoVerde::class;

    protected static ?string $navigationIcon = 'heroicon-o-cash';

    protected static ?string $navigationGroup = 'Ingresos Verdes';

    protected static ?string $label = 'Ingreso Verde';

    protected static ?string $pluralLabel = 'Ingresos Verdes';

    protected static ?int $navigationSort = -2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Shout::make('success')
                    ->content((new FormMessage())(app(Calendario::class)))
                    ->type('info')
                    ->columnSpan('full'),
                Hidden::make('form_id')
                    ->default(FormService::new()),
                Wizard::make([
                    Wizard\Step::make('Objetivo y destino')
                        ->description('del ingreso')
                        ->schema([
                            Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\Grid::make(1)
                                    ->schema([
                                        Forms\Components\Select::make('objetivo')
                                            ->label('Objetivo del ingreso')
                                            ->reactive()
                                            ->options([
                                                'O1' => 'Su objetivo principal es generar cambios en los comportamientos de los agentes con el fin de proteger el medio ambiente y/o promover la adecuada gestión de sus recursos.',
                                                'O2' => 'Su objetivo principal NO es generar cambios de los agentes económicos para proteger el medio ambiente o sus recursos.',
                                                'O3' => 'Su objetivo principal NO es generar cambios de los agentes económicos para proteger el medio ambiente o sus recursos, pero propician esos cambios positivos.',
                                            ]),
                                        Forms\Components\Select::make('destino')
                                            ->label('Destino del ingreso')
                                            ->reactive()
                                            ->options([
                                                'I1' => 'Los ingresos generados contribuyen a financiar partidas presupuestales vinculadas específicamente con gasto verde.',
                                                'I2' => 'Los ingresos generados contribuyen a financiar partidas presupuestales de gasto verde y no verde.',
                                            ]),
                                        Shout::make('success')
                                            ->content('Ingresos directos y parciales con las siguientes dos características: (1) su objetivo principal es generar cambios en los comportamientos de los agentes con el fin último de proteger el medio ambiente o gestionar los recursos o que han sido específicamente diseñados para la protección ambiental o la gestión de recursos, y (2) los ingresos que generan contribuyen a financiar partidas presupuestarias específicas de gasto verde.')
                                            ->columnSpan('full')
                                            ->visible(function (callable $get) {
                                                return $get('objetivo') === 'O1' && $get('destino') === 'I1';
                                            }),
                                        Shout::make('success')
                                            ->content('Ingresos directos y parciales con las siguientes características: (1) objetivo principal es también generar cambios en los comportamientos de los agentes con el fin último de proteger el medio ambiente o gestionar los recursos o que han sido específicamente diseñados para la protección ambiental o la gestión, pero (2) los ingresos que generan contribuyen a financiar partidas presupuestarias de gasto verde y no verde.')
                                            ->columnSpan('full')
                                            ->visible(function (callable $get) {
                                                return $get('objetivo') === 'O1' && $get('destino') === 'I2';
                                            }),
                                        Shout::make('success')
                                            ->content('Ingresos indirectos y completos, que se caracterizan por: (1) aunque su objetivo principal no es generar cambios en los comportamientos de los agentes con el fin último de proteger el medio ambiente o gestionar los recursos o que han sido específicamente diseñados para la protección ambiental o la gestión de recursos, generan dichos cambios y (2) los ingresos que generan contribuyen a financiar partidas presupuestarias específicas de gasto verde.')
                                            ->columnSpan('full')
                                            ->visible(function (callable $get) {
                                                return $get('objetivo') === 'O2' && $get('destino') === 'I1';
                                            }),
                                        Shout::make('success')
                                            ->content('Ingresos indirectos y parciales que se caracterizan (1) su objetivo principal no es generar cambios en los comportamientos de los agentes con el fin último de proteger el medio ambiente o gestionar los recursos o que han sido específicamente diseñados para la protección ambiental o la gestión de recursos, pero generan dichos cambios, y (2) los ingresos que generan contribuyen a financiar partidas presupuestarias de gasto verde y no verde.')
                                            ->columnSpan('full')
                                            ->visible(function (callable $get) {
                                                return $get('objetivo') === 'O3' && $get('destino') === 'I2';
                                            }),
                                    ])
                            ])
                        ]),
                    Wizard\Step::make('Efecto')
                        ->description('del ingreso')
                        ->schema([
                            Forms\Components\Select::make('efecto')
                                ->label('¿De qué manera se da su efecto?')
                                ->reactive()
                                ->visible(fn(callable $get) => $get('objetivo') && $get('destino'))
                                ->options([
                                    '1' => 'Directo (aquellos que gravan productos, servicios o actividades que tienen un efecto de forma directa en el medio
                                      ambiente y/o en la explotación de recursos y/o en las emisiones de GEI y/o en procesos de adaptación)',
                                    '0' => 'Indirecto (aquellos que NO gravan productos, servicios o actividades que tienen un efecto de forma directa
                                    en el medio ambiente y/o en la explotación de recursos y/o en las emisiones de GEI y/o en procesos de adaptación)',
                                ]),
                        ]),
                    Wizard\Step::make('Vinculación')
                        ->description('con políticas públicas')
                        ->schema([
                            (new PoliticasPublicas(self::$model))->build(),
                        ]),
                    Wizard\Step::make('Cuantificación')
                        ->description('del ingreso')
                        ->schema([
                            (new Cuantificacion())->build(),
                        ]),
                    Wizard\Step::make('Clasificación')
                        ->description('del ingreso')
                        ->schema([
                            (new Indentificacion())->build(),
                        ]),
                ])->columnSpan(2)
                    //->skippable()
            ]);
    }

    public static function table(Table $table): Table
    {
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
                FilamentExportHeaderAction::make('exportar')
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
            'index' => Pages\ListIngresoVerdes::route('/'),
            'create' => Pages\CreateIngresoVerde::route('/create'),
            'edit' => Pages\EditIngresoVerde::route('/{record}/edit'),
        ];
    }
}
