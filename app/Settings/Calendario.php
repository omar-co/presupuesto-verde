<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class Calendario extends Settings {

    public int $ejercicio_fiscal;

    public string $fecha_corte;

    public static function group(): string {
        return 'general';
    }
}
