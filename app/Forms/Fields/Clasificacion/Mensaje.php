<?php

namespace App\Forms\Fields\Clasificacion;

use App\Services\FormBuilder\Field;
use App\Services\FormMessage;
use App\Settings\Calendario;
use Awcodes\Shout\Shout;
use Filament\Forms\Components\Grid;

class Mensaje extends Grid implements Field
{

    public function build(): Grid
    {
        return $this->schema([
            Shout::make('success')
                ->content('¡Atención! El programa presupuestario tiene un impacto ambiental favorable.')
                ->type('success')
                ->columnSpan('full')
                ->visible(function (callable $get) {
                    return $get('clasificacion_p1') === '1' && $get('clasificacion_p2') === '3';
                }),
            Shout::make('warning')
                ->content('¡Atención! El programa presupuestario no tiene un impacto ambiental directo.')
                ->type('warning')
                ->columnSpan('full')
                ->visible(function (callable $get) {
                    return $get('clasificacion_p3') === '1' && ($get('clasificacion_p3_gasto') === '1' || $get('clasificacion_p3_gasto') === '2' );
                }),
            Shout::make('danger')
                ->content('¡Atención! El programa presupuestario no tiene un impacto directo favorable.')
                ->type('danger')
                ->columnSpan('full')
                ->visible(function (callable $get) {
                    return $get('clasificacion_p4') === '0' || $get('clasificacion_p5') === '-1';
                }),
        ]);

    }

    public function description(): string
    {
        return 'Construye mensaje de formulario para clasificación';
    }

}
