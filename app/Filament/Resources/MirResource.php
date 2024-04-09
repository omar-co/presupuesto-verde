<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MirResource\Pages;
use App\Filament\Resources\MirResource\RelationManagers;
use App\Forms\Fields\Identificacion\ObjetivosMir;
use App\Models\Mir;
use App\Models\Ods;
use App\Settings\Calendario;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Rap2hpoutre\FastExcel\FastExcel;

class MirResource extends Resource
{
    protected static ?string $model = Mir::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Catálogos';

    protected static ?string $label = 'Objetivo MIR';

    protected static ?string $pluralLabel = 'Objetivos MIR';



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
                Tables\Columns\TextColumn::make('ciclo'),
                Tables\Columns\TextColumn::make('id_ramo')->label('id ramo'),
                Tables\Columns\TextColumn::make('id_objetivo')->label('id objetivo'),
                Tables\Columns\TextColumn::make('desc_objetivo')->label('objetivo'),
                Tables\Columns\TextColumn::make('id_nivel')->label('id nivel'),
                Tables\Columns\TextColumn::make('desc_nivel')->label('nivel'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->headerActions([
                Action::make('importar')
                    ->form([
                        FileUpload::make('attachment')
                    ])
                    ->action(function (array $data) {
                        $file = storage_path('app/public/' . $data['attachment']);
                        (new FastExcel())->import($file, function ($row) {
                            return Mir::create([
                                'ciclo' => $row['ciclo'],
                                'id_ramo' => $row['id_ramo'],
                                'id_objetivo' => $row['id_objetivo'] === '' ? null : $row['id_objetivo'],
                                'desc_objetivo' => $row['desc_objetivo'] === '' ? null : $row['desc_objetivo'],
                                'id_nivel' => $row['id_nivel'],
                                'desc_nivel' => $row['desc_nivel'],
                            ]);
                        });
                    })
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
            'index' => Pages\ListMirs::route('/'),
            'create' => Pages\CreateMir::route('/create'),
            'edit' => Pages\EditMir::route('/{record}/edit'),
        ];
    }
}
