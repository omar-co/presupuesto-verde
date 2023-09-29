<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PoliticaPublicaResource\Pages;
use App\Filament\Resources\PoliticaPublicaResource\RelationManagers;
use App\Models\PoliticaPublica;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Fieldset;
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

    protected static ?string $navigationGroup = 'Adminstración';

    protected static ?int $navigationSort = -2;


    public static function form(Form $form): Form
    {
        return $form
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
                        Fieldset::make('Visible en:')
                            ->schema([
                                Forms\Components\Toggle::make('objetivos_ambientales')
                                    ->label('Objetivos Ambientales')
                                    ->required(),
                                Forms\Components\Toggle::make('cambio_climatico')
                                    ->label('Cambio Climatico')
                                    ->required(),
                                Forms\Components\Toggle::make('ingresos_verdes')
                                    ->label('Ingresos Verdes')
                                    ->required(),
                            ]),
                        Forms\Components\Toggle::make('active')
                            ->label('¿Activo?')
                            ->required(),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nombre'),
                Tables\Columns\IconColumn::make('objetivos_ambientales')->label('Objetivos Ambientales')
                    ->boolean(),
                Tables\Columns\IconColumn::make('cambio_climatico')->label('Cambio Climatico')
                    ->boolean(),
                Tables\Columns\IconColumn::make('ingresos_verdes')->label('Ingresos Verdes')
                    ->boolean(),
                Tables\Columns\IconColumn::make('active')->label('¿Activo?')
                    ->boolean(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado el')
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
            RelationManagers\NivelesRelationManager::class,
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
