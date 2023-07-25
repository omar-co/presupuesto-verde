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
                    '1' => 'Sí',
                    '0' => 'No',
                ])
                ->reactive(),
            Select::make('clasificacion_p2')
                ->label('P2. ¿Tiene el programa presupuestario un impacto ambiental claro o participa directamente
                en la producción de bienes o servicios ambientales? ¿Es su objetivo prioritario proteger la
                biodiversidad, mejorar la calidad del aire o mejorar la calidad del agua?')
                ->options([
                    '3' => 'Sí',
                    '0' => 'No',
                ])
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('clasificacion_p1') != '1';
                }),
            Select::make('clasificacion_p3')
                ->label('P3. ¿Tiene el programa presupuestario un impacto indirecto favorable? ¿Es su objetivo
                 secundario (indirecto) proteger la biodiversidad, mejorar la calidad del aire o mejorar la calidad del
                  agua?')
                ->options([
                    '1' => 'Sí',
                    '0' => 'No',
                ])
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('clasificacion_p2') != '0';
                }),
            Select::make('clasificacion_p3_gasto')
                ->label('Por favor seleccione el tipo de gasto:')
                ->options([
                    '1' => 'Gasto favorable pero contradictorio',
                    '2' => 'Gasto favorable',
                ])
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('clasificacion_p3') != '1';
                }),
            Select::make('clasificacion_p4')
                ->label('P4. ¿Tiene el programa presupuestario algún efecto significativo sobre el medio ambiente?')
                ->options([
                    '1' => 'Sí',
                    '0' => 'No',
                ])
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('clasificacion_p3') != '0';
                }),
            Select::make('clasificacion_p5')
                ->label('P5. ¿Tiene el programa presupuestario algún impacto ambiental negativo o promueve
                comportamientos perjudiciales para el medio ambiente?')
                ->options([
                    '-1' => 'Sí',
                ])
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('clasificacion_p4') != '1';
                }),
            ]);
    }

    public function description(): string
    {
        return 'Construye sección de formulario para clasificación';
    }

}
