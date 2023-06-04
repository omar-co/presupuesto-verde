<?php

namespace App\Filament\Resources\PoliticaPublicaResource\Pages;

use App\Filament\Resources\PoliticaPublicaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPoliticaPublica extends ViewRecord
{
    protected static string $resource = PoliticaPublicaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
