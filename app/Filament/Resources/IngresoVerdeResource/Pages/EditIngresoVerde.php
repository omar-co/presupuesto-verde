<?php

namespace App\Filament\Resources\IngresoVerdeResource\Pages;

use App\Filament\Resources\IngresoVerdeResource;
use App\Filament\Traits\ClearSessionTableEdit;
use App\Filament\Traits\HasTable;
use App\Filament\Traits\RedirectToList;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIngresoVerde extends EditRecord
{
    use RedirectToList, HasTable, ClearSessionTableEdit;
    protected static string $resource = IngresoVerdeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
