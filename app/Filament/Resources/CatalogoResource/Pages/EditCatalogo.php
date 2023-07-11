<?php

namespace App\Filament\Resources\CatalogoResource\Pages;

use App\Filament\Resources\CatalogoResource;
use App\Filament\Traits\RedirectToList;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCatalogo extends EditRecord
{
    use RedirectToList;
    protected static string $resource = CatalogoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
