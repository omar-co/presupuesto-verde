<?php

namespace App\Forms\Sections;

use App\Forms\Fields\Cuantificacion\Explicacion;
use App\Forms\Fields\Cuantificacion\PresupuestosTabla;
use App\Services\FormBuilder\FieldCollection;

class Cuantificacion  extends FieldCollection {

    public function __construct() {
        parent::__construct(
                new Explicacion('explicacion'),
                new PresupuestosTabla('tabla'),
        );
    }

}
