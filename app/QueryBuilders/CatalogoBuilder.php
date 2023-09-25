<?php

namespace App\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class CatalogoBuilder extends Builder {

    private ?Collection $ramos;
    private ?Collection $unidadesResponsables;

    private ?Collection $gruposFuncionales;

    public function ramosOptionList(): Collection {

        if (!isset($this->ramos)) {
            $this->ramos = $this
                ->select('id_ramo', 'desc_ramo')
                ->groupBy('id_ramo', 'desc_ramo')
                ->get()
                ->mapWithKeys(function ($ramo, $key) {
                    return [$ramo->id_ramo => "{$ramo->id_ramo} - {$ramo->desc_ramo}"];
                });
        }

        return $this->ramos;
    }

    public function unidadResponsableOptionList(): Collection {

        if (!isset($this->unidadesResponsables)) {
            $this->unidadesResponsables = $this
                ->select('id_ur', 'desc_ur')
                ->groupBy('id_ur', 'desc_ur')
                ->get()
                ->mapWithKeys(function ($ramo, $key) {
                    return [$ramo->id_ur => "{$ramo->id_ur} - {$ramo->desc_ur}"];
                });
        }

        return $this->unidadesResponsables;
    }

    public function grupoFuncionalOptionList(): Collection {

        if (!isset($this->unidadesResponsables)) {
            $this->unidadesResponsables = $this
                ->select('gpo_funcional', 'desc_gpo_funcional')
                ->groupBy('gpo_funcional', 'desc_gpo_funcional')
                ->get()
                ->mapWithKeys(function ($ramo, $key) {
                    return [$ramo->gpo_funcional => "{$ramo->gpo_funcional} - {$ramo->desc_gpo_funcional}"];
                });
        }

        return $this->unidadesResponsables;
    }

    public function entidadesFederativasOptionList(): Collection {
        return $this->select(['id_entidad_federativa', 'entidad_federativa'])
            ->groupBy(['entidad_federativa', 'id_entidad_federativa'])
            ->get()
            ->pluck('entidad_federativa', 'id_entidad_federativa');
    }

}
