<?php

namespace App\Forms\Fields\Clasificacion;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class ClasificacionFields extends Grid implements Field
{

    public function build(): Grid
    {
        return $this->schema([
            Select::make('clasificacion_p1')
                ->label('P1. ¿Hay información suficiente para poder determinar el impacto ambiental del programa
                presupuestario?')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->afterStateUpdated(function (callable $set) {
                    $set('clasificacion_p2', null);
                    $set('clasificacion_p2_extra', null);
                    $set('clasificacion_p3', null);
                    $set('clasificacion_p4', null);
                    $set('clasificacion_p4_extra', null);
                    $set('clasificacion_p5', null);
                })
                ->reactive(),
            Select::make('clasificacion_p2')
                ->label('P2. ¿Tiene el programa presupuestario un impacto ambiental claro o participa directamente
                en la producción de bienes o servicios ambientales? ¿Es su objetivo prioritario proteger la
                biodiversidad, mejorar la calidad del aire o mejorar la calidad del agua?')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->afterStateUpdated(function (callable $set) {
                    $set('clasificacion_p2_extra', null);
                    $set('clasificacion_p3', null);
                    $set('clasificacion_p4', null);
                    $set('clasificacion_p4_extra', null);
                    $set('clasificacion_p5', null);
                })
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('clasificacion_p1') != 'si';
                }),
            Select::make('clasificacion_p2_extra')
                ->label('¿El Pp podría causar otro daño al ambiente o efectos contradictorios?')
                ->options([
                    'no' => 'No',
                    'si' => 'Si',
                ])
                ->afterStateUpdated(function (callable $set) {
                    $set('clasificacion_p3', null);
                    $set('clasificacion_p4', null);
                    $set('clasificacion_p4_extra', null);
                    $set('clasificacion_p5', null);
                })
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('clasificacion_p2') != 'si';
                }),
            Select::make('clasificacion_p3')
                ->label('P3. ¿Tiene el programa presupuestario un impacto indirecto favorable? ¿Es su objetivo
                 secundario (indirecto) proteger la biodiversidad, mejorar la calidad del aire o mejorar la calidad del
                  agua?')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->afterStateUpdated(function (callable $set) {
                    $set('clasificacion_p4', null);
                    $set('clasificacion_p4_extra', null);
                    $set('clasificacion_p5', null);
                })
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('clasificacion_p2') != 'no';
                }),
            Select::make('clasificacion_p4')
                ->label('P4. ¿Tiene el pp algún otro efecto significativo (positivo o negativo) sobre el ambiente?')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->afterStateUpdated(function (callable $set) {
                    $set('clasificacion_p4_extra', null);
                    $set('clasificacion_p5', null);
                })
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('clasificacion_p3') != 'no';
                }),
            Select::make('clasificacion_p4_extra')
                ->label('¿El pp se presta para fines verdes?')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->afterStateUpdated(function (callable $set) {
                    $set('clasificacion_p5', null);
                })
                ->reactive()
                ->visible(function (callable $get) {
                    return $get('clasificacion_p4') == 'si';
                }),
            Select::make('clasificacion_p5')
                ->label('P5. ¿Tiene el programa presupuestario algún impacto ambiental negativo o promueve
                comportamientos perjudiciales para el medio ambiente?')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('clasificacion_p4_extra') != 'no';
                }),
            ]);
    }

    public function description(): string
    {
        return 'Construye sección de formulario para clasificación';
    }

}
