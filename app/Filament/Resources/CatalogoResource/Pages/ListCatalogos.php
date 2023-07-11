<?php

namespace App\Filament\Resources\CatalogoResource\Pages;

use App\Filament\Resources\CatalogoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCatalogos extends ListRecords
{
    protected static string $resource = CatalogoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
