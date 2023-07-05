<?php

namespace App\Filament\Resources\ObjetivoAmbientalResource\Pages;

use App\Filament\Resources\ObjetivoAmbientalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateObjetivoAmbiental extends CreateRecord
{
    protected static string $resource = ObjetivoAmbientalResource::class;

    public function refreshCatalogTable($ramoId, $modalidad, $pp, $contribucion) {
        $this->emit('presupuestosRefreshCatalogTable', $ramoId, $modalidad, $pp, $contribucion);
    }

    public function mount(): void {
        session([
            'ramoId' => null,
            'modalidad' => null,
            'pp' => null,
            'contribucion' => null
        ]);

        parent::mount();
    }
}
