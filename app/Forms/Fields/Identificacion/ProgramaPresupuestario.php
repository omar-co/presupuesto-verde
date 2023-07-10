<?php

namespace App\Forms\Fields\Identificacion;

use App\Models\Catalogo;
use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Select;
use Illuminate\Support\Collection;

class ProgramaPresupuestario extends Select implements Field {

    public function build(): Select {
        return $this
            ->label('Programa presupuestario')
            ->options(function (callable $get, callable $set) {
                $modalidadId = $get('modalidad_id');
                if ($modalidadId) {
                    return Catalogo::select(['id_pp', 'desc_pp'])
                        ->where('id_ramo', $get('ramo_id'))
                        ->where('id_modalidad', $modalidadId)
                        ->groupBy('id_pp', 'desc_pp')
                        ->get()
                        ->mapWithKeys(function ($ramo, $key) {
                            return [$ramo->id_pp => "{$ramo->id_pp} - {$ramo->desc_pp}"];
                        });
                }
                return [];
            })
            ->required()
            ->reactive()
            ->afterStateUpdated(function (callable $get, callable $set, $state) {
                $this->fillActividadesInstitucionales($get, $set);
                $this->fillUnidadesResponsables($get, $set);
            })
            ->afterStateHydrated(function (callable $get, callable $set, $state) {
                $this->fillActividadesInstitucionales($get, $set);
                $this->fillUnidadesResponsables($get, $set);
            });
    }

    public function description(): string {
        return 'Select para el programa presupuestario, en este componente también se asigna el valor a actividad institucional y unidad responsable';
    }


    private function fillActividadesInstitucionales(callable $get, callable $set): void {
        $set('actividad_institucional',
            Catalogo::query()
                ->select(['id_ai', 'desc_ai'])
                ->where('id_ramo', $get('ramo_id'))
                ->where('id_pp', $get('programa_presupuestario_id'))
                ->get()
                ->pluck('desc_ai', 'id_ai')
        );
    }


    private function fillUnidadesResponsables(callable $get, callable $set): void {
        $set('unidad_responsable',
            Catalogo::query()
                ->select(['id_ur', 'desc_ur'])
                ->where('id_ramo', $get('ramo_id'))
                ->where('id_pp', $get('programa_presupuestario_id'))
                ->get()
                ->pluck('desc_ur', 'id_ur')
        );
    }
}
