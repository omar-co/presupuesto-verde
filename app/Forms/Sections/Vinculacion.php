<?php

namespace App\Forms\Sections;

use App\Forms\Fields\Vinculacion\Convenio;
use App\Forms\Fields\Vinculacion\Observaciones;
use App\Forms\Fields\Vinculacion\Plataforma;
use App\Forms\Fields\Vinculacion\Recursos;
use App\Services\FormBuilder\FieldCollection;

class Vinculacion extends FieldCollection
{

    public function __construct() {
        parent::__construct(
            new Convenio(2),
            new Plataforma('plataforma_reduccion'),
            new Recursos('recursos_plataforma'),
            new Observaciones('observaciones'),
        );
    }

    public function description(): string
    {
        return 'Construye sección de formulario para vinculación de otros';
    }
}
