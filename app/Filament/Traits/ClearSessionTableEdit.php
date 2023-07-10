<?php

namespace App\Filament\Traits;

trait ClearSessionTableEdit {

    public function mount($record): void {
        session([
            'ramoId' => null,
            'modalidad' => null,
            'pp' => null,
            'contribucion' => null,
            'formId' => null,
        ]);

        parent::mount($record);
    }

}
