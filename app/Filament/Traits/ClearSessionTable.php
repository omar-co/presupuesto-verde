<?php

namespace App\Filament\Traits;

trait ClearSessionTable {
    public function mount(): void {
        session([
            'ramoId' => null,
            'modalidad' => null,
            'pp' => null,
            'contribucion' => null,
            'formId' => null,
        ]);

        parent::mount();
    }

}
