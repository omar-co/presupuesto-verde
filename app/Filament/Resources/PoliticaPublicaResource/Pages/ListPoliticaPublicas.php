<?php

namespace App\Filament\Resources\PoliticaPublicaResource\Pages;

use App\Filament\Resources\PoliticaPublicaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPoliticaPublicas extends ListRecords
{
    protected static string $resource = PoliticaPublicaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
