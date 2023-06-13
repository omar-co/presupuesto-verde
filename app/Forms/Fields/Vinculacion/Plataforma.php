<?php

namespace App\Forms\Fields\Vinculacion;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Select;

class Plataforma extends Select implements Field
{

    public function build(): Select
    {
        return $this
            ->label('Plataforma para la Reducción del Riesgo de Desastres')
            ->options([
                'si' => 'Sí',
                'no' => 'No',
            ])->reactive();
    }

    public function description(): string
    {
        return 'Construye sección de formulario para identificacion reutilizable';
    }
}
