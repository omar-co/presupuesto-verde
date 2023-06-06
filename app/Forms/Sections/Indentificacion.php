<?php

namespace App\Forms\Sections;

use App\Forms\Fields\Identificacion\ActividadInstitucional;
use App\Forms\Fields\Identificacion\Modalidad;
use App\Forms\Fields\Identificacion\ProgramaPresupuestario;
use App\Forms\Fields\Identificacion\Ramo;
use App\Forms\Fields\Identificacion\UnidadResponsable;
use App\Services\FormBuilder\FieldCollection;

class Indentificacion extends FieldCollection {

    public function __construct() {
        parent::__construct(
            'Identificación',
            new Ramo('ramo_id'),
            new Modalidad('modalidad_id'),
            new ProgramaPresupuestario('programa_presupuestario_id'),
            new ActividadInstitucional('actividad_institucional'),
            new UnidadResponsable('unidad_responsable'),
        );
    }

    public function description(): string {
        return 'Construye sección de formulario para identificacion reutilizable';
    }
}
