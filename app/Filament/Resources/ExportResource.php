<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExportResource\Pages;
use App\Models\Export;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ExportResource extends Resource
{
    protected static ?string $model = Export::class;

    protected static ?string $navigationGroup = 'Gestión de archivos';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Descarga';

    protected static ?int $navigationSort = -1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ciclo')
                    ->label('Ejercicio Fiscal')
                    ->sortable(),
                TextColumn::make('user.name')
                    ->label('Creado por')
                    ->visible(fn() => auth()->user()->hasRole('super_admin'))
                    ->sortable(),
                TextColumn::make('type')
                    ->label('Tipo')
                    ->sortable(),
                IconColumn::make('completed')
                    ->label('¿Completado?')
                    ->boolean(),
                TextColumn::make('updated_at')
                    ->label('Actualizado el')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('descargar')
                    ->color('success')
                    ->icon('heroicon-s-download')
                    ->action(function (Model $record) {
                        return Storage::download($record->path);
                    })
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListExports::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
