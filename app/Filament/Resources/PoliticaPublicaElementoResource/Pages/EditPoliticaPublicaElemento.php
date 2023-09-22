<?php

namespace App\Filament\Resources\PoliticaPublicaElementoResource\Pages;

use App\Filament\Resources\PoliticaPublicaElementoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPoliticaPublicaElemento extends EditRecord
{
    protected static string $resource = PoliticaPublicaElementoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
