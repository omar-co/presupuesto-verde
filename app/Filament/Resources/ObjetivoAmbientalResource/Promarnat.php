<?php

namespace App\Filament\Resources\ObjetivoAmbientalResource;

use App\Models\PoliticaPublica;
use Filament\Forms\Components\Tabs;
use Filament\Forms;

class Promarnat {

    public function __invoke() {
        return Tabs\Tab::make('Promarnat')
            ->schema([
                Forms\Components\Select::make('promarnat_objetivo_id')
                ->label('Objetivo prioritario')
                    ->options(PoliticaPublica::query()->where('active', true)->get(['id', 'name'])->pluck('name', 'id'))
                ->required()
                ->reactive(),
                Forms\Components\Select::make('demo')
                ->label('Objetivo Prioritario')
                    ->reactive()
                ->hidden(function (callable $get) {
                    return $get('promarnat_objetivo_id') != 1;
                })
            ]);
    }

}
