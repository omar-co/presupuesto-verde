<?php

namespace App\Filament\Resources\MirResource\Pages;

use App\Filament\Resources\MirResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMirs extends ListRecords
{
    protected static string $resource = MirResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
