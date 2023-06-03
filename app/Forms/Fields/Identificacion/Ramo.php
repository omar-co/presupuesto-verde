<?php

namespace App\Forms\Fields\Identificacion;

use App\Models\Catalogo;
use App\Services\FormBuilder\Field;
use Filament\Forms;
use Filament\Forms\Components\Select;

class Ramo extends Select implements Field {

    public function build(): Forms\Components\Select {
        return $this->label('Ramo')
                ->options(function () {
                    return Catalogo::select('id_ramo', 'desc_ramo')
                        ->groupBy('id_ramo', 'desc_ramo')
                        ->get()
                        ->mapWithKeys(function ($ramo, $key) {
                            return [$ramo->id_ramo => "{$ramo->id_ramo} - {$ramo->desc_ramo}"];
                        });
                })
                ->afterStateUpdated(function ($state, callable $get, callable $set) {
                    $ramo = Catalogo::where('id_ramo', $state)->first();
                    if ($ramo) {
                        $modalidadId = (int)$get('modalidad_id');

                        if ($modalidadId && $modalidad = Catalogo::where('id_modalidad', $modalidadId)->first()) {
                            if ($modalidad->id_ramo !== $ramo->id_ramo) {
                                $set('modalidad_id', null);
                            }
                        }
                    }
                })
                ->required()
                ->reactive();
    }

    public function description(): string {
        return 'Select para el ramo, si se cambia regresa un array vació para la modalidad';
    }
}
