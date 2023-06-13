<?php

namespace App\Forms\Fields\Vinculacion;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\TextInput;

class Recursos extends TextInput implements Field
{

    public function build(): TextInput
    {
        return $this
            ->label('Recursos internacionales recibidos para este ejercicio presupuestario en el marco de esta Plataforma')
            ->numeric()
            ->reactive();
    }

    public function description(): string
    {
        return 'Construye text input para recursos';
    }
}
