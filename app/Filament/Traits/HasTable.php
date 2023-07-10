<?php

namespace App\Filament\Traits;

trait HasTable {

    public function refreshCatalogTable($ramoId, $modalidad, $pp, $contribucion, $formId) {
        $this->emit('presupuestosRefreshCatalogTable', $ramoId, $modalidad, $pp, $contribucion, $formId);
    }

}
