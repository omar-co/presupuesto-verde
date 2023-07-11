<?php

namespace App\Filament\Resources;

use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;
use App\Filament\Resources\CatalogoResource\Pages;
use App\Filament\Resources\CatalogoResource\RelationManagers;
use App\Models\Catalogo;
use App\Models\Presupuesto;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CatalogoResource extends Resource {
    protected static ?string $model = Catalogo::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Catálogos';

    protected static ?string $label = 'Programa Presupuestario';
    protected static ?string $pluralLabel = 'Programas Presupuestarios';

    protected static ?int $navigationSort = -1;

    public static function form(Form $form): Form {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table {
        return $table
            ->columns([
                TextColumn::make('id_ramo')
                    ->label('Id Ramo')
                    ->sortable(),
                TextColumn::make('desc_ramo')
                    ->label('Ramo')
                    ->sortable(),
                TextColumn::make('id_ur')
                    ->label('Id Unidad responsable')
                    ->sortable(),
                TextColumn::make('desc_ur')
                    ->label('Unidad responsable')
                    ->sortable(),
                TextColumn::make('gpo_funcional')
                    ->label('Id Grupo funcional')
                    ->sortable(),
                TextColumn::make('desc_gpo_funcional')
                    ->label('Grupo Funcional')
                    ->sortable(),
                TextColumn::make('id_funcion')
                    ->label('Id Función')
                    ->sortable(),
                TextColumn::make('desc_funcion')
                    ->label('Función')
                    ->sortable(),
                TextColumn::make('id_subfuncion')
                    ->label('Id Subfunción')
                    ->sortable(),
                TextColumn::make('desc_subfuncion')
                    ->label('Subfunción')
                    ->sortable(),
                TextColumn::make('id_ai')
                    ->label('Id Actividad institucional')
                    ->sortable(),
                TextColumn::make('desc_ai')
                    ->label('Actividad institucional')
                    ->sortable(),
                TextColumn::make('id_modalidad')
                    ->label('Id Modalidad')
                    ->sortable(),
                TextColumn::make('desc_modalidad')
                    ->label('Modalidad')
                    ->sortable(),
                TextColumn::make('id_pp')
                    ->label('Id Programa presupuestario')
                    ->sortable(),
                TextColumn::make('desc_pp')
                    ->label('Programa presupuestario')
                    ->sortable(),
                TextColumn::make('id_capitulo')
                    ->label('Id Capítulo')
                    ->sortable(),
                TextColumn::make('id_partida_especifica')
                    ->label('Id Partida específica')
                    ->sortable(),
                TextColumn::make('desc_partida_especifica')
                    ->label('Partida específica')
                    ->sortable(),
                TextColumn::make('id_tipogasto')
                    ->label('Id Tipo de gasto')
                    ->sortable(),
                TextColumn::make('desc_tipogasto')
                    ->label('Tipo de gasto')
                    ->sortable(),
                TextColumn::make('id_ff')
                    ->label('Id Fuente financiera')
                    ->sortable(),
                TextColumn::make('desc_ff')
                    ->label('Fuente financiera')
                    ->sortable(),
                TextColumn::make('id_entidad_federativa')
                    ->label('Id Entidad Federativa')
                    ->sortable(),
                TextColumn::make('entidad_federativa')
                    ->label('Entidad Federativa')
                    ->sortable(),
                TextColumn::make('id_clave_cartera')
                    ->label('Clave cartera')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
            ])
            ->headerActions([
                FilamentExportHeaderAction::make('exportar')
                    ->directDownload()
                    ->disablePreview()
                    ->defaultFormat('csv')
                    ->disableAdditionalColumns()
                    ->disableFilterColumns()
                    ->disableFileName()
                    ->disableFileNamePrefix()
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array {
        return [
            //
        ];
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListCatalogos::route('/'),
            'create' => Pages\CreateCatalogo::route('/create'),
            'edit' => Pages\EditCatalogo::route('/{record}/edit'),
        ];
    }
}
