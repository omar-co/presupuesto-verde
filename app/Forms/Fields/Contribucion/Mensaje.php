<?php

namespace App\Forms\Fields\Contribucion;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Placeholder;

class Mensaje extends Placeholder implements Field {

    public function build(): Placeholder {
        return $this->content('Vinculación entre el Programa presupuestario (Pp)
                                            y los objetivos y metas ambientales plasmados en la política pública mediambiental.');
    }
}
