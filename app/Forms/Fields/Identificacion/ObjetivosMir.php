<?php

namespace App\Forms\Fields\Identificacion;

use App\Models\Mir;
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
                            ->reactive(),
                        Select::make('mir_objetivo_id')
                            ->options(function (callable $get) {
                                if ($get('mir_nivel_id') && $get('ramo_id')) {
                                    $objetivos = Mir::query()
                                        ->select(['id_objetivo', 'desc_objetivo'])
                                        ->where('id_ramo', $get('ramo_id'))
                                        ->whereIn('id_nivel', $get('mir_nivel_id'))
                                        ->groupBy(['id_objetivo', 'desc_objetivo'])
                                        ->get()
                                        ->pluck('desc_objetivo', 'id_objetivo');

                                    return $objetivos->isNotEmpty() ? $objetivos : ['-1' => 'No hay objetivos'];
                                }
                                return [];
                            })
                            ->multiple()
                            ->reactive()
                    ]),
                TextInput::make('componentes')
                    ->label('Bienes y productos generados con posible incidencia (Componentes)'),
                Textarea::make('actividades_con_incidencia')
                    ->label('Actividad(es) actual(es) con posible incidencia')
            ]);
    }


}
