<?php

namespace App\Forms\Fields\PoliticaPublica;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Textarea;

class ActividadesProyectos extends Textarea implements Field {

    public function build(): Textarea {
        return $this->label('Actividades o proyectos comprometidos para la atención de la política pública')
            ->visible(fn(callable $get) => $get('politica_publica_id'));
    }
}
