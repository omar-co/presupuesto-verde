<?php

namespace App\Forms\Fields\Clasificacion;

use App\Services\FormBuilder\Field;
use App\Services\FormMessage;
use App\Settings\Calendario;
use Awcodes\Shout\Shout;

class Mensaje extends Shout implements Field
{

    public function build(): Shout
    {
        return $this->make('success')
            ->content('¡Atención! El programa presupuestario tiene un impacto ambiental favorable.')
            ->type('success')
            ->columnSpan('full')
            ->visible(function (callable $get) {
                return $get('pregunta_1') == 'si' && $get('pregunta_2') == 'si';
            });

    }

    public function description(): string
    {
        return 'Construye mensaje de formulario para clasificación';
    }

}
