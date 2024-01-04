<?php

namespace App\Filament\Resources\IngresoVerdeResource\Pages;

use App\Filament\Resources\IngresoVerdeResource;
use App\Filament\Traits\ClearSessionTable;
use App\Filament\Traits\HasTable;
use App\Filament\Traits\RedirectToList;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIngresoVerde extends CreateRecord
{
    use RedirectToList, HasTable, ClearSessionTable;

    protected static string $resource = IngresoVerdeResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['ramo_id'] = auth()->user()->ramo_id;

        return $data;
    }
}
