<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait DashboardFilters
{
    public function scopeCiclo(Builder $query, ?int $ciclo): void
    {
        if ($ciclo) {
            $query->where('ciclo', $ciclo);
        }
    }

    public function scopeRamo(Builder $query, ?int $ramoId): void
    {
        if ($ramoId) {
            $query->where('ramo_id', $ramoId);
        }
    }
}
