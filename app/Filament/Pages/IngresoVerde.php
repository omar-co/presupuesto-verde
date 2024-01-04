<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\IngresoVerde\Categoria;
use App\Filament\Widgets\IngresoVerde\Efecto;
use App\Filament\Widgets\IngresoVerde\IngresoPorCategoria;
use App\Filament\Widgets\IngresoVerde\RamoPorAnyo;
use App\Filament\Widgets\IngresoVerde\TipoIngreso;
use Filament\Pages\Page;

class IngresoVerde extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';

    protected static string $view = 'filament.pages.ingreso-verde';

    protected function getHeaderWidgets(): array
    {
        return [
            Categoria::class,
            Efecto::class,
            TipoIngreso::class,
            IngresoPorCategoria::class,
            RamoPorAnyo::class,
        ];
    }
}
