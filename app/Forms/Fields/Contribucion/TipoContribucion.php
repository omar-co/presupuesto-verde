<?php

namespace App\Forms\Fields\Contribucion;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Select;

class TipoContribucion extends Select implements Field {

    public function build(): Select {
        return $this
            ->label('¿Cómo considera que es la contribución de las acciones sustantivas y
                                de apoyo del Pp a la Política Nacional mediambiental (PROMARNAT, PNH, ENBIO o ENAC) de
                                acuerdo con los objetivos seleccionados en las etapas previas?')
            ->required()
            ->options([
                1 => 'Explícitamente/Directamente',
                0 => 'Implícitamente/Indirectamente'
            ]);
    }
}
