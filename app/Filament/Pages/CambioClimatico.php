<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\CambioClimatico\Categoria;
use App\Filament\Widgets\CambioClimatico\Efecto;
use App\Filament\Widgets\CambioClimatico\IngresoPorCategoria;
use Filament\Pages\Page;

class CambioClimatico extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static ?string $title = "Cambio Climatico";

    protected static string $view = 'filament.pages.ingreso-verde';

    protected static ?int $navigationSort = -2;

    protected function getHeaderWidgets(): array
    {
        return [
            Categoria::class,
            Efecto::class,
            //TipoIngreso::class,
            IngresoPorCategoria::class,
        ];
    }

}
