<?php

namespace App\Forms\Sections;

use App\Forms\Fields\Clasificacion\ClasificacionFields;
use App\Forms\Fields\Clasificacion\Mensaje;
use App\Forms\Fields\Vinculacion\Convenio;
use App\Forms\Fields\Vinculacion\Observaciones;
use App\Forms\Fields\Vinculacion\Plataforma;
use App\Forms\Fields\Vinculacion\Recursos;
use App\Services\FormBuilder\FieldCollection;

class Clasificacion extends FieldCollection
{

    public function __construct() {
        parent::__construct(
            new ClasificacionFields(1),
            new Mensaje('mensaje'),
        );
    }

    public function description(): string
    {
        return 'Construye sección de formulario para vinculación de otros';
    }
}
