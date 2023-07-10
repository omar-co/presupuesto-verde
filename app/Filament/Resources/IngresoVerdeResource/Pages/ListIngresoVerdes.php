<?php

namespace App\Filament\Resources\IngresoVerdeResource\Pages;

use App\Filament\Resources\IngresoVerdeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIngresoVerdes extends ListRecords
{
    protected static string $resource = IngresoVerdeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
