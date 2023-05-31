<?php

namespace App\Filament\Resources\ObjetivoAmbientalResource\Widgets;

use App\Models\ObjetivoAmbiental;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestOrders extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?string $heading = 'Registros por Ramo';
    protected function getTableQuery(): Builder
    {
        return ObjetivoAmbiental::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('ramo_id')
                ->label('Ramo'),
        ];
    }
}
