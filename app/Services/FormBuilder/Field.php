<?php

namespace App\Services\FormBuilder;

interface Field {

    /**
     * Construye el campo (field), parte del formulario.
     */
    public function build(): \Filament\Forms\Components\Component;




}
