<?php

namespace App\Forms\Fields\PoliticaPublica;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Select;

class Nivel extends Select implements Field {

    public function build(): Select {
        return $this
            ->required()
            ->multiple()
            ->reactive();
    }

}
