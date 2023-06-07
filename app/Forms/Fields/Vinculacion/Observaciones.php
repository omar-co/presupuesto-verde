<?php

namespace App\Forms\Fields\Vinculacion;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Textarea;

class Observaciones extends Textarea implements Field
{

    public function build(): Textarea
    {
        return $this
            ->label('Observaciones:')
            ->reactive();
    }

    public function description(): string
    {
        return 'Construye text area para observaciones';
    }
}
