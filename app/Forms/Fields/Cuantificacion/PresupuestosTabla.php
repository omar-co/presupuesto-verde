<?php

namespace App\Forms\Fields\Cuantificacion;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\ViewField;

class PresupuestosTabla extends ViewField implements Field {

    public function build(): ViewField {
        return $this->view('presupuestosTabla');
    }

}
