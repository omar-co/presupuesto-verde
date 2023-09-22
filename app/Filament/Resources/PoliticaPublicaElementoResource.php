<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PoliticaPublicaElementoResource\Pages;
use App\Filament\Resources\PoliticaPublicaElementoResource\RelationManagers;
use App\Models\PoliticaPublica;
use App\Models\PoliticaPublicaElemento;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PoliticaPublicaElementoResource extends Resource {
    protected static ?string $model = PoliticaPublicaElemento::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Adminstración';

    protected static ?string $label = 'Elemento';

    public static function form(Form $form): Form {
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
                        Forms\Components\Select::make('politica_publica_id')
                            ->label('Politica pública')
                            ->options(fn() => PoliticaPublica::query()
                                ->select('id', 'name')
                                ->get()
                                ->pluck('name', 'id')
                                ->toArray()
                            )
                            ->reactive()
                            ->required(),
                        Forms\Components\Select::make('parent_id')
                            ->label('Padre')
                            ->options(fn(callable $get) => PoliticaPublicaElemento::query()
                                ->select('id', 'name')
                                ->wherePoliticaPublicaId($get('politica_publica_id'))
                                ->get()
                                ->pluck('name', 'id')
                                ->toArray()
                            )
                            ->searchable()
                            ->reactive(),
                        Forms\Components\TextInput::make('politica_publica_nivel_id')
                            ->label('Nivel')
                            ->numeric()
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->wrap(),
                Tables\Columns\TextColumn::make('parent.name')
                    ->label('Elemento Padre')
                    ->wrap(),
                Tables\Columns\TextColumn::make('politicaPublica.name')
                    ->label('Politica pública')
                    ->wrap(),
                Tables\Columns\TextColumn::make('politica_publica_nivel_id')
                    ->label('Nivel')
                    ->wrap(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->label('Actualizado el'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPoliticaPublicaElementos::route('/'),
            'create' => Pages\CreatePoliticaPublicaElemento::route('/create'),
            'edit' => Pages\EditPoliticaPublicaElemento::route('/{record}/edit'),
        ];
    }
}
