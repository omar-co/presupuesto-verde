<?php

namespace App\Filament\Resources\ObjetivoAmbientalResource\Pages;

use App\Filament\Resources\ObjetivoAmbientalResource;
use App\Filament\Traits\HasTable;
use App\Filament\Traits\RedirectToList;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateObjetivoAmbiental extends CreateRecord
{
    use RedirectToList, HasTable;

    protected static string $resource = ObjetivoAmbientalResource::class;

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
