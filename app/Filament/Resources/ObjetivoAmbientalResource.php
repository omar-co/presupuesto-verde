<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ObjetivoAmbientalResource\Pages;
use App\Filament\Resources\ObjetivoAmbientalResource\RelationManagers;
use App\Models\Catalogo;
use App\Models\ObjetivoAmbiental;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ObjetivoAmbientalResource extends Resource
{
    protected static ?string $model = ObjetivoAmbiental::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Objetivo Ambiental';
    protected static ?string $pluralLabel = 'Objetivos Ambientales';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Heading')
                    ->tabs([
                        Tabs\Tab::make('Identificación del progrmama presupuestario')
                            ->schema([
                                Forms\Components\Select::make('ramo_id')
                                    ->label('Ramo')
                                    ->options(function () {
                                        return Catalogo::select('id_ramo', 'desc_ramo')->groupBy('id_ramo', 'desc_ramo')->get()->pluck('desc_ramo', 'id_ramo');
                                    })
                                    ->required()
                                    ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                        $ramo = Catalogo::where('id_ramo', $state)->first();
                                        if ($ramo) {
                                            $modalidadId = (int) $get('modalidad_id');

                                            if ($modalidadId && $modalidad = Catalogo::where('id_modalidad', $modalidadId)->first()) {
                                                if ($modalidad->id_ramo !== $ramo->id_ramo) {
                                                    $set('modalidad_id', null);
                                                }
                                            }
                                        }
                                    })
                                ->reactive(),
                                Forms\Components\Select::make('modalidad_id')
                                    ->label('Modalidad')
                                    ->options(function (callable $get, callable $set) {
                                        $ramoId = $get('ramo_id');
                                        if ($ramoId) {
                                            return Catalogo::select(['id_modalidad', 'desc_modalidad'])
                                                ->where('id_ramo', $ramoId)
                                                ->groupBy('id_modalidad', 'desc_modalidad')
                                                ->get()
                                                ->pluck('desc_modalidad', 'id_modalidad');
                                        }
                                        return [];
                                    })
                                    ->required()
                                    ->reactive(),
                                Forms\Components\Select::make('programa_presupuestario_id')
                                    ->label('Programa presupuestario')
                                    ->options(function (callable $get, callable $set) {
                                        $modalidadId = $get('modalidad_id');
                                        if ($modalidadId) {
                                            return Catalogo::select(['id_pp', 'desc_pp'])
                                                ->where('id_modalidad', $modalidadId)
                                                ->groupBy('id_pp', 'desc_pp')
                                                ->get()
                                                ->pluck('desc_pp', 'id_pp');
                                        }
                                        return [];
                                    })
                                    ->required(),
                                TextInput::make('mir_nivel_id')
                                    ->label('Nivel MIR')
                                    ->required(),
                            ]),
                        Tabs\Tab::make('Vinculación de los programas presupuestarios con los objetivos ambientales')
                            ->schema([
                                // ...
                            ]),
                        Tabs\Tab::make('Contribución de los programas presupuestarios a los objetivos ambientales')
                            ->schema([
                                // ...
                            ]),
                    ])
                ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListObjetivoAmbientals::route('/'),
            'create' => Pages\CreateObjetivoAmbiental::route('/create'),
            'edit' => Pages\EditObjetivoAmbiental::route('/{record}/edit'),
        ];
    }
}
