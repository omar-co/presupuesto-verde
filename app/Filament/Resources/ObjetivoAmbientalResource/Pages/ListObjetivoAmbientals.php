<?php

namespace App\Filament\Resources\ObjetivoAmbientalResource\Pages;

use App\Filament\Resources\ObjetivoAmbientalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListObjetivoAmbientals extends ListRecords
{
    protected static string $resource = ObjetivoAmbientalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
