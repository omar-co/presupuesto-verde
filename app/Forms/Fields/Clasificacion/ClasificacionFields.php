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
            Select::make('pregunta_1')
                ->label('P1. ¿Hay información suficiente para poder determinar el impacto ambiental del programa
                presupuestario?')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->reactive(),
            Select::make('pregunta_2')
                ->label('P2. ¿Tiene el programa presupuestario un impacto ambiental claro o participa directamente
                en la producción de bienes o servicios ambientales? ¿Es su objetivo prioritario proteger la
                biodiversidad, mejorar la calidad del aire o mejorar la calidad del agua?')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('pregunta_1') != 'si';
                }),
            Select::make('pregunta_3')
                ->label('P3. ¿Tiene el programa presuuestario un impacto indirecto favorable? ¿Es su objetivo
                 secundario (indirecto) proteger la biodiversidad, mejorar la calidad del aire o mejorar la calidad del
                  agua?')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('pregunta_2') != 'no';
                }),
            Select::make('tipo_gasto')
                ->label('Por favor seleccione el tipo de gasto:')
                ->options([
                    '1' => 'Gasto favorable pero contradictorio',
                    '2' => 'Gasto favorable',
                ])
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('pregunta_3') != 'si';
                }),
            Select::make('pregunta_4')
                ->label('P4. ¿Tiene el programa presupuestario algún efecto significativo sobre el medio ambiente?')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('pregunta_3') != 'no';
                }),
            Select::make('pregunta_5')
                ->label('P5. ¿Tiene el programa presupuestario algún impacto ambiental negativo o promueve
                comportamientos perjudiciales para el medio ambiente?')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->reactive()
                ->hidden(function (callable $get) {
                    return $get('pregunta_4') != 'si';
                }),
            ]);
    }

    public function description(): string
    {
        return 'Construye sección de formulario para clasificación';
    }

}
