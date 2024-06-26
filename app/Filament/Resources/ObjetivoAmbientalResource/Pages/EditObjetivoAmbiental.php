<?php

namespace App\Filament\Resources\ObjetivoAmbientalResource\Pages;

use App\Filament\Resources\ObjetivoAmbientalResource;
use App\Filament\Traits\ClearSessionTableEdit;
use App\Filament\Traits\HasTable;
use App\Filament\Traits\RedirectToList;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditObjetivoAmbiental extends EditRecord
{
    use RedirectToList, HasTable, ClearSessionTableEdit;

    protected static string $resource = ObjetivoAmbientalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
