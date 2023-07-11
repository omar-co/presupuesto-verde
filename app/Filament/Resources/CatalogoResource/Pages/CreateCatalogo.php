<?php

namespace App\Filament\Resources\CatalogoResource\Pages;

use App\Filament\Resources\CatalogoResource;
use App\Filament\Traits\RedirectToList;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCatalogo extends CreateRecord
{
    use RedirectToList;
    protected static string $resource = CatalogoResource::class;
}
