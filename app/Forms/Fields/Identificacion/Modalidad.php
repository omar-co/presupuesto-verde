<?php

namespace App\Forms\Fields\Identificacion;

use App\Models\Catalogo;
use App\Services\FormBuilder\Field;
use Filament\Forms;
use Filament\Forms\Components\Select;

class Modalidad extends Select implements Field {

    public function build(): Forms\Components\Field {
        return $this
            ->label('Modalidad')
            ->options(function (callable $get, callable $set) {
                $ramoId = $get('ramo_id');
                if ($ramoId) {
                    return Catalogo::select(['id_modalidad', 'desc_modalidad'])
                        ->where('id_ramo', $ramoId)
                        ->groupBy('id_modalidad', 'desc_modalidad')
                        ->get()
                        ->mapWithKeys(function ($ramo, $key) {
                            return [$ramo->id_modalidad => "{$ramo->id_modalidad} - {$ramo->desc_modalidad}"];
                        });
                }
                return [];
            })
            ->required()
            ->reactive();
    }

    public function description(): string {
        return 'Select para modalidad, dependiente del ramo';
    }
}
