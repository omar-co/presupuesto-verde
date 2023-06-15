<?php

namespace App\Forms\Fields\PoliticaPublica;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\TextInput;

class Indicador extends TextInput implements Field {

    public function build(): TextInput {
        return $this->label('Indicador o parámetro propuesto para el monitoreo y reporte de los avances en torno a la actividad o proyecto')
            ->visible(fn(callable $get) => $get('politica_publica_id'));
    }
}
