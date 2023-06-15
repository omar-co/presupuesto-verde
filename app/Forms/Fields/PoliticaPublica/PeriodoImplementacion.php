<?php

namespace App\Forms\Fields\PoliticaPublica;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\TextInput;

class PeriodoImplementacion extends TextInput implements Field {

    public function build(): TextInput {
        return $this->label('Periodo de implementación de la actividad o proyecto')
            ->visible(fn(callable $get) => $get('politica_publica_id'));
    }
}
