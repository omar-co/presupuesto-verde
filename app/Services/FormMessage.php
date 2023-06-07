<?php

namespace App\Services;

use App\Settings\Calendario;
use Carbon\Carbon;

class FormMessage {

    public function __invoke(Calendario $calendario): string {

        $fecha = Carbon::make($calendario->fecha_corte);
        return "La información precargada en este sistema, corresponde al ejercicio fiscal
         {$calendario->ejercicio_fiscal} con corte al {$fecha->translatedFormat('d M Y')}.";
    }

}
