<?php

namespace App\Forms\Fields\PoliticaPublica;

use App\Forms\Sections\Politicaspublicas\Repository;
use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Select;

class PoliticaPublica extends Select implements Field {

    public function build(): Select {
        return $this
            ->label('Política Pública')
            ->options(Repository::politicasPublicas())
            ->required()
            ->reactive();
    }
}
