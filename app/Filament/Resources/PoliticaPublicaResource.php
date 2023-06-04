<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PoliticaPublicaResource\Pages;
use App\Filament\Resources\PoliticaPublicaResource\RelationManagers;
use App\Models\PoliticaPublica;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Wizard;
use Yemenpoint\FilamentTree\Forms\Components\TreeField;

class PoliticaPublicaResource extends Resource
{
    protected static ?string $model = PoliticaPublica::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Wizard::make([
                    Wizard\Step::make('Nombre')
                        ->description('Nombre de la política pública')
                        ->schema([
                            Card::make()
                                ->schema([
                                    Forms\Components\Hidden::make('user_id')
                                        ->default(auth()->id())
                                        ->required(),
                                    Forms\Components\TextInput::make('name')
                                        ->label('Nombre')
                                        ->required()
                                        ->maxLength(255),
                                    Forms\Components\Toggle::make('active')
                                        ->label('¿Activo?')
                                        ->required(),
                                ])
                        ]),
                    Wizard\Step::make('Estructura')
                        ->description('Niveles de la política pública')
                        ->schema([
                            Card::make()
                            ->schema([
                                Placeholder::make('Niveles')
                                    ->content('Aquí se crean los nombres de los niveles de la política pública por ejemplo: Objetivo, Estrategia, Actividad o Eje, Sub-eje.'),
                                Grid::make(2)
                                    ->schema([
                                        TreeField::make("estructura")
                                            ->setMaxDepth(999),

                                        Forms\Components\TextInput::make('name')
                                            ->label('Nuevo elemento')
                                            ->reactive()
                                            ->maxLength(255)
                                            ->afterStateUpdated(function (callable $get, callable $set, string $state) {
                                                $get('estructura');
                                            }),
                                    ]),
                            ])
                        ]),
                    Wizard\Step::make('Detalles')
                        ->description('Detalles de la política pública')
                        ->schema([
                            Card::make()
                                ->schema([
                                    Placeholder::make('Detalles')
                                        ->content('Usa esta sección para crear los elementos individuales de cada nivel.'),
                                    TreeField::make("items")
                                        ->setMaxDepth(999)
                                        ->default([["id" => "1", "name" => "item 1", "children" => [["id" => "2", "name" => "item 2", "children" => []]]]]),
                                    /*Repeater::make('detalles')
                                        ->schema([
                                            Forms\Components\Select::make('nivel')
                                                ->required()
                                                ->options(function (callable $get) {
                                                    $niveles = collect($get('../../niveles'))->flatten(2);
                                                    if ($niveles->count() > 1){
                                                        return $niveles;
                                                    }

                                                    return [];
                                                }),
                                            Forms\Components\Select::make('parent')
                                                ->required()
                                                ->options(function (callable $get) {
                                                   return [];
                                                }),
                                            TextInput::make('name')
                                                ->label('Nombre del elemento')
                                                ->required(),
                                        ])
                                        ->createItemButtonLabel('Agregar nuevo nivel')
                                        ->columns(1)*/
                                ])
                        ]),
                ])->columnSpan(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPoliticaPublicas::route('/'),
            'create' => Pages\CreatePoliticaPublica::route('/create'),
            'view' => Pages\ViewPoliticaPublica::route('/{record}'),
            'edit' => Pages\EditPoliticaPublica::route('/{record}/edit'),
        ];
    }
}
