<?php

namespace App\Filament\Resources\ObjetivoAmbientalResource\Pages;

use App\Filament\Resources\ObjetivoAmbientalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditObjetivoAmbiental extends EditRecord
{
    protected static string $resource = ObjetivoAmbientalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
