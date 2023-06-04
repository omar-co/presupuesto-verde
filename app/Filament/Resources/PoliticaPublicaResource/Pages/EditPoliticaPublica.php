<?php

namespace App\Filament\Resources\PoliticaPublicaResource\Pages;

use App\Filament\Resources\PoliticaPublicaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPoliticaPublica extends EditRecord
{
    protected static string $resource = PoliticaPublicaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
