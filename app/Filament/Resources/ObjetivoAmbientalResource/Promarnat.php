<?php

namespace App\Filament\Resources\ObjetivoAmbientalResource;

use Filament\Forms\Components\Tabs;
use Filament\Forms;

class Promarnat {

    public function __invoke() {
        return Tabs\Tab::make('Promarnat')
            ->schema([
                Forms\Components\Select::make('promarnat_objetivo_id')
                ->label('Objetivo prioritario')
                ->required()
            ]);
    }

}
