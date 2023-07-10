<?php

namespace App\Services;

use App\Models\Form;
use App\Settings\Calendario;

class FormService {

    public static function new(): int {
        return Form::query()
            ->create([
                'user_id' => auth()->id(),
                'ciclo' => app(Calendario::class)->ejercicio_fiscal,
            ])
            ->id;
    }

}
