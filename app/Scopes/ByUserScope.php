<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ByUserScope implements Scope {

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param Builder $builder
     * @param Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model): void {

        $user = auth()->user();
        if (!$user->hasRole('super_admin')) {
            $builder->where('user_id', $user->id);
        }
    }

}
