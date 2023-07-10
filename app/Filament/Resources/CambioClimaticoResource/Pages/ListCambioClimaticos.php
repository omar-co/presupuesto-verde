<?php

namespace App\Filament\Resources\CambioClimaticoResource\Pages;

use App\Filament\Resources\CambioClimaticoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCambioClimaticos extends ListRecords
{
    protected static string $resource = CambioClimaticoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
