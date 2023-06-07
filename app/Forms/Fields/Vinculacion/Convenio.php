<?php

namespace App\Forms\Fields\Vinculacion;

use App\Models\Catalogo;
use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class Convenio extends Grid implements Field
{

    public function build(): Grid
    {
        return $this->schema([
            Select::make('convenio_diversidad')
                ->label('Convenio sobre la Diversidad Biológica:')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->reactive(),
            Select::make('convenio_desertificacion')
                ->label('Convenio internacional de lucha contra la desertificación:')
                ->options([
                    'si' => 'Sí',
                    'no' => 'No',
                ])
                ->reactive(),
            TextInput::make('recursos_convenio')
                ->label('Recursos internacionales recibidos para este ejercicio presupuestario en el marco de este Convenio:')
                ->reactive(),
            TextInput::make('recursos_convencion')
                ->label('Recursos internacionales recibidos para este ejercicio presupuestario en el marco de esta Convención:')
                ->reactive()]);

    }

    public function description(): string
    {
        return 'Construye sección de columnas para seleccionables y text inputs de vinculación';
    }
}
