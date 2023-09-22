<?php

namespace App\Filament\Resources\PoliticaPublicaElementoResource\Pages;

use App\Filament\Resources\PoliticaPublicaElementoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPoliticaPublicaElementos extends ListRecords
{
    protected static string $resource = PoliticaPublicaElementoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
