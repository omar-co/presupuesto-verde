<?php

namespace App\Forms\Sections;

use App\Forms\Fields\Contribucion\Mensaje;
use App\Forms\Fields\Contribucion\TipoContribucion;
use App\Services\FormBuilder\Field;
use App\Services\FormBuilder\FieldCollection;

class Contribucion extends FieldCollection {

    public function __construct() {
        parent::__construct(
            new Mensaje(''),
            new TipoContribucion('tipo_contribucion'),

        );
    }

}
