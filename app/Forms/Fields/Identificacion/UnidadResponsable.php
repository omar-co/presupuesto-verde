<?php

namespace App\Forms\Fields\Identificacion;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\KeyValue;

class UnidadResponsable extends KeyValue implements Field {

    public function build(): KeyValue {
        return $this
            ->label('Unidades Responsables')
            ->keyLabel('Id')
            ->valueLabel('Unidad Responsable')
            ->disableAddingRows()
            ->disableDeletingRows()
            ->disableEditingKeys()
            ->disabled();
    }

    public function description(): string {
        return 'KeyValue para unidad responsable, ProgramaPresupuestario es responsable de asignarle valor';
    }
}
