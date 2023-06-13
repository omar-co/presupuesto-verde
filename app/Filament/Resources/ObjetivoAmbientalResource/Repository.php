<?php

namespace App\Filament\Resources\ObjetivoAmbientalResource;

use App\Models\Catalogo;

class Repository {

    private static $ramos;

    public static function ramos() {

        if (!isset(self::$ramos)) {
            self::$ramos = Catalogo::select('id_ramo', 'desc_ramo')
                ->groupBy('id_ramo', 'desc_ramo')
                ->get()
                ->mapWithKeys(function ($ramo, $key) {
                    return [$ramo->id_ramo => "{$ramo->id_ramo} - {$ramo->desc_ramo}"];
                });
        }

        return self::$ramos;
    }

}
