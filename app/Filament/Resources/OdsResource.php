<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OdsResource\Pages;
use App\Filament\Resources\OdsResource\RelationManagers;
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

class OdsResource extends Resource
{
    protected static ?string $model = Ods::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Catálogos';

    protected static ?string $label = 'Objetivo de Desarrollo Sustentable';

    protected static ?string $pluralLabel = 'Objetivos de Desarrollo Sustentable';

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
                //
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
                        (new FastExcel())->import($data['attachment'], function ($row) {
                            return Ods::create([
                                'id_ramo' => $row['ramo'],
                                'desc_ramo' => $row['ramodescripcion'],
                                'id_modalidad' => $row['modalidad'],
                                'ciclo' => app(Calendario::class)->ejercicio_fiscal,
                                'desc_modalidad' => $row['modalidaddescripcion'],
                                'id_pp' => $row['programa_presupuestario'],
                                'desc_pp' => $row['programa_presupuestariodescripcion'],
                                'id_ods' => $row['objetivo_de_desarrollo_sostenible'],
                                'desc_ods' => $row['objetivo_de_desarrollo_sostenibledescripcion'],
                                'id_metaods' => $row['meta_del_objetivo_de_desarrollo_sostenible'],
                                'desc_metaods' => $row['meta_del_objetivo_de_desarrollo_sostenibledescripcion'],
                                'id_sm1' => $row['submeta_1_de_la_meta_de_desarrollo_sostenible'],
                                'desc_sm1' => $row['submeta_1_de_la_meta_de_desarrollo_sostenibledescripcion'],
                                'id_sm2' => $row['submeta_2_de_la_meta_de_desarrollo_sostenible'],
                                'desc_sm2' => $row['submeta_2_de_la_meta_de_desarrollo_sostenibledescripcion'],
                                'id_sm3' => $row['submeta_3_de_la_meta_de_desarrollo_sostenible'],
                                'desc_sm3' => $row['submeta_3_de_la_meta_de_desarrollo_sostenibledescripcion'],
                                'id_sm4' => $row['submeta_4_de_la_meta_de_desarrollo_sostenible'],
                                'desc_sm4' => $row['submeta_4_de_la_meta_de_desarrollo_sostenibledescripcion'],
                                'id_sm5' => $row['submeta_5_de_la_meta_de_desarrollo_sostenible'],
                                'desc_sm5' => $row['submeta_5_de_la_meta_de_desarrollo_sostenibledescripcion'],
                                'id_sm6' => $row['submeta_6_de_la_meta_de_desarrollo_sostenible'],
                                'desc_sm6' => $row['submeta_6_de_la_meta_de_desarrollo_sostenibledescripcion'],
                                'id_tcontribucion' => $row['tipo_de_contribucion'],
                                'desc_tcontribucion' => $row['tipo_de_contribuciondescripcion'],

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
            'index' => Pages\ListOds::route('/'),
            'create' => Pages\CreateOds::route('/create'),
            'edit' => Pages\EditOds::route('/{record}/edit'),
        ];
    }
}
