<?php

namespace App\Scopes;

use App\Settings\Calendario;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ByCiclo implements Scope {



    public function apply(Builder $builder, Model $model): void {
        $builder->where('ciclo', app(Calendario::class)->ejercicio_fiscal);
    }


}
