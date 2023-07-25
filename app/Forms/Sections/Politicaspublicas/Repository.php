<?php

namespace App\Forms\Sections\Politicaspublicas;

use App\Models\ObjetivoAmbiental;
use App\Models\PoliticaPublica;
use App\Models\PoliticaPublicaElemento;
use App\Models\PoliticaPublicaNivel;
use App\Settings\Calendario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Repository {

    public static $pp;

    public static $niveles;


    public static function nombreNivel(int|null $pp, int $nivel) {
        if (!$pp) {
            return false;
        }
        if (!isset(self::$niveles) || (isset(self::$pp) && self::$pp !== $pp)) {
            self::$pp = $pp;
            self::$niveles = PoliticaPublicaNivel::query()
                ->where('politica_publica_id', $pp)
                ->get(['id', 'name'])
                ->pluck('name')
            ->toArray();
        }
        $key = $nivel - 1;

        return array_key_exists($key, self::$niveles) ? self::$niveles[$key] : false;
    }

    public static function optionsNivelUno(int $ppId): Collection {
        return PoliticaPublicaElemento::query()
            ->where('politica_publica_id', $ppId)
            ->where('politica_publica_nivel_id', 1)
            ->whereNull('parent_id')
            ->get()
            ->pluck('name', 'id');
    }

    public static function optionsNivel(int $ppId, int $nivel, array|null $parents): Collection {
        if (!$parents) {
            $parents = [];
        }
        return PoliticaPublicaElemento::query()
            ->where('politica_publica_id', $ppId)
            ->where('politica_publica_nivel_id', $nivel)
            ->whereIn('parent_id', $parents)
            ->get()
            ->pluck('name', 'id');
    }

    public static function politicasPublicas(string $model): Collection {
        /** @var Model $model */
        $registosActuales = $model::query()
            ->where('user_id', auth()->id()) //TODO: hacer global scope
            ->get('politica_publica_id');

        return PoliticaPublica::query()
            ->whereNotIn('id', $registosActuales)
            ->where('active', true)
            //TODO: Filtrar por tipo (objetivo ambienta, presupuesrto verde, ingresos verdes)
        ->get(['id', 'name'])
            ->pluck('name', 'id');
    }
}
