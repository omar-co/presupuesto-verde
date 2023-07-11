<?php

namespace App\Filament\Resources\OdsResource\Pages;

use App\Filament\Resources\OdsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOds extends ListRecords
{
    protected static string $resource = OdsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
