<?php

namespace App\Filament\Resources\CambioClimaticoResource\Pages;

use App\Filament\Resources\CambioClimaticoResource;
use App\Filament\Traits\ClearSessionTable;
use App\Filament\Traits\ClearSessionTableEdit;
use App\Filament\Traits\HasTable;
use App\Filament\Traits\RedirectToList;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCambioClimatico extends EditRecord
{
    use RedirectToList, HasTable, ClearSessionTableEdit;

    protected static string $resource = CambioClimaticoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
