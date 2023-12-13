<?php

namespace App\Forms\Fields\Clasificacion;

use App\Services\FormBuilder\Field;
use App\Services\FormMessage;
use App\Settings\Calendario;
use Awcodes\Shout\Shout;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;

class Mensaje extends Grid implements Field
{

    public function build(): Grid
    {
        return $this->schema([
            Shout::make('warning')
                ->content('¡Atención! El programa presupuestario tiene un gasto neutro.')
                ->type('warning')
                ->columnSpan('full')
                ->visible(function (callable $get, callable $set) {
                    $visible = $get('clasificacion_p1') === 'no' || $get('clasificacion_p4') === 'no' || $get('clasificacion_p5') === 'no';

                    if ($visible){
                        $set('clasificacion_puntaje', 0);
                        $set('clasificacion_tipo_gasto', 'gasto neutro');
                    }

                    return $visible;
                }),
            Shout::make('success')
                ->content('¡Atención! El programa presupuestario tiene un gasto muy favorable.')
                ->type('success')
                ->columnSpan('full')
                ->visible(function (callable $get, callable $set) {
                    $visible = $get('clasificacion_p2_extra') === 'no';

                    if ($visible){
                        $set('clasificacion_puntaje', 3);
                        $set('clasificacion_tipo_gasto', 'gasto muy favorable');
                    }

                    return $visible;
                }),
            Shout::make('info')
                ->content('¡Atención! El programa presupuestario tiene un gasto controvertido.')
                ->type('warning')
                ->columnSpan('full')
                ->visible(function (callable $get, callable $set) {
                    $visible = $get('clasificacion_p2_extra') === 'si' || $get('clasificacion_p4_extra') === 'si';

                    if ($visible){
                        $set('clasificacion_puntaje', 1);
                        $set('clasificacion_tipo_gasto', 'gasto controvertido');
                    }

                    return $visible;
                }),
            Shout::make('info')
                ->content('¡Atención! El programa presupuestario tiene un gasto favorable.')
                ->type('info')
                ->columnSpan('full')
                ->visible(function (callable $get, callable $set) {
                    $visible = $get('clasificacion_p3') === 'si';

                    if ($visible){
                        $set('clasificacion_puntaje', 2);
                        $set('clasificacion_tipo_gasto', 'gasto favorable');
                    }

                    return $visible;
                }),
            Shout::make('danger')
                ->content('¡Atención! El programa presupuestario tiene un gasto desfavorable.')
                ->type('danger')
                ->columnSpan('full')
                ->visible(function (callable $get, callable $set) {
                    $visible = $get('clasificacion_p5') === 'si';
                    if ($visible){
                        $set('clasificacion_puntaje', -1);
                        $set('clasificacion_tipo_gasto', 'gasto desfavorable');
                    }

                    return $visible;
                }),
            Hidden::make('clasificacion_puntaje')->default(null),
            Hidden::make('clasificacion_tipo_gasto')->default(null),
        ]);

    }

    public function description(): string
    {
        return 'Construye mensaje de formulario para clasificación';
    }

}
