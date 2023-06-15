<?php

namespace App\Forms\Fields\Identificacion;

use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class ObjetivosMir extends Section implements Field {

    public function build(): Component {
        return Section::make('Objetivos MIR')
            ->schema([
                Grid::make(2)
                    ->schema([
                        Select::make('mir_nivel_id')
                            ->options([
                                'Fin', 'Proposito', 'Componente', 'Actividad', 'FID',
                            ])
                            ->multiple()
                            ->required(),
                        Select::make('mir_objetivo_id')
                    ]),
                TextInput::make('componentes')
                ->label('Bienes y productos generados con posible incidencia (Componentes)'),
                Textarea::make('actividades_con_incidencia')
                ->label('Actividad(es) actual(es) con posible incidencia')
            ]);
    }


}
