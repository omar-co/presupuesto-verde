<?php

namespace App\Forms\Fields\Identificacion;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class ObjetivosMir extends Section implements \App\Services\FormBuilder\Field {

    public function build(): \Filament\Forms\Components\Component {
        return Section::make('Objetivos MIR')
            ->schema([
                Grid::make(2)
                    ->schema([
                        Select::make('nivel')
                            ->options([
                                'Fin', 'Proposito', 'Componente', 'Actividad', 'FID',
                            ])
                            ->multiple()
                            ->required(),
                        Select::make('objetivo')
                    ]),
                TextInput::make('bienes')
                ->label('Bienes y productos generados con posible incidencia (Componentes)'),
                Textarea::make('actividades')
                ->label('Actividad(es) actual(es) con posible incidencia')
            ]);
    }


}
