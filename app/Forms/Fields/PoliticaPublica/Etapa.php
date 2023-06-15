<?php

namespace App\Forms\Fields\PoliticaPublica;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Select;

class Etapa extends Select implements Field {

    public function build(): Select {
        return $this->label('Etapa de la política')
            ->visible(fn(callable $get) => $get('politica_publica_id'))
            ->multiple()
            ->options([
                'Implementación',
                'Identificación y definición de problemas públicos',
                'Diseño de intervenciones públicas',
                'Monitoreo y seguimiento',
                'Evaluación'
            ]);
    }
}
