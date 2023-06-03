<?php

namespace App\Services\FormBuilder;

interface Field {

    /**
     * Construye el campo (field), parte del formulario.
     */
    public function build(): \Filament\Forms\Components\Component;


    /**
     * Descripción amigable para el usuario sobre que el elemento del formulario que construye.
     */
    public function description(): string;


}
