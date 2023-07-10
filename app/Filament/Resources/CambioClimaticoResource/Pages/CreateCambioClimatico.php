<?php

namespace App\Filament\Resources\CambioClimaticoResource\Pages;

use App\Filament\Resources\CambioClimaticoResource;
use App\Filament\Traits\ClearSessionTable;
use App\Filament\Traits\HasTable;
use App\Filament\Traits\RedirectToList;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCambioClimatico extends CreateRecord
{
    use RedirectToList, HasTable, ClearSessionTable;

    protected static string $resource = CambioClimaticoResource::class;

}
