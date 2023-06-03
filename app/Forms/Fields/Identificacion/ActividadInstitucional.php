<?php

namespace App\Forms\Fields\Identificacion;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\KeyValue;

class ActividadInstitucional extends KeyValue implements Field {

    public function build(): KeyValue {
        return $this
            ->label('Actividades Institucionales')
            ->keyLabel('Id')
            ->valueLabel('Actividad Institucional')
                ->disableAddingRows()
                ->disableDeletingRows()
                ->disableEditingKeys()
            ->disabled();
    }

    public function description(): string {
        return 'Input text para actividad institucional, ProgramaPresupuestario es responsable de asignarle valor';
    }
}
