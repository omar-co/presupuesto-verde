<?php

namespace App\Forms\Fields\Cuantificacion;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Placeholder;

class Explicacion extends Placeholder implements Field {

    public function build(): Placeholder {
        return $this->content('Para la cuantificación del presupuesto destinado a los objetivos climáticos se
         muestra una tabla con la estructura programática a nivel partida presupuestaria, en la cual debes seleccionar
         la partida o partidas dando click a la respectiva fila e incluir el monto destinado a dichos objetivos en la
         columna “Monto Aprobado” de la extrema derecha')->disableLabel();
    }
}
