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
            Shout::make('warning')
                ->content('¡Atención! El programa presupuestario tiene un gasto neutro.')
                ->type('warning')
                ->columnSpan('full')
                ->visible(function (callable $get) {
                    return $get('clasificacion_p1') === 'no' || $get('clasificacion_p4') === 'no' || $get('clasificacion_p5') === 'no';
                }),
            Shout::make('success')
                ->content('¡Atención! El programa presupuestario tiene un gasto muy favorable.')
                ->type('success')
                ->columnSpan('full')
                ->visible(function (callable $get) {
                    return $get('clasificacion_p2_extra') === 'no';
                }),
            Shout::make('info')
                ->content('¡Atención! El programa presupuestario tiene un gasto controvertido.')
                ->type('warning')
                ->columnSpan('full')
                ->visible(function (callable $get) {
                    return $get('clasificacion_p2_extra') === 'si' || $get('clasificacion_p4_extra') === 'si';
                }),
            Shout::make('info')
                ->content('¡Atención! El programa presupuestario tiene un gasto favorable.')
                ->type('info')
                ->columnSpan('full')
                ->visible(function (callable $get) {
                    return $get('clasificacion_p3') === 'si';
                }),
            Shout::make('danger')
                ->content('¡Atención! El programa presupuestario tiene un gasto desfavorable.')
                ->type('danger')
                ->columnSpan('full')
                ->visible(function (callable $get) {
                    return $get('clasificacion_p5') === 'si';
                }),
        ]);

    }

    public function description(): string
    {
        return 'Construye mensaje de formulario para clasificación';
    }

}
