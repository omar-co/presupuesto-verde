<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\ObjetivosAmbientales\Categoria;
use App\Filament\Widgets\ObjetivosAmbientales\Efecto;
use App\Filament\Widgets\ObjetivosAmbientales\IngresoPorCategoria;
use Filament\Pages\Page;

class ObjetivosAmbientales extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-square-bar';

    protected static ?string $title = "Objetivos Ambientales";

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
