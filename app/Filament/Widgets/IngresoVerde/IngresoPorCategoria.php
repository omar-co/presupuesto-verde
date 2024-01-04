<?php

namespace App\Filament\Widgets\IngresoVerde;

use App\Models\Catalogo;
use App\Models\IngresoVerde;
use App\Models\PoliticaPublica;
use App\Values\Millions;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class IngresoPorCategoria extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'IngresoVerdePorCategoria';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Ingreso verde Tipo de gasto por categoria';

    protected static ?string $pollingInterval = null;

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $data = $this->getValues();

        return [
            'chart' => [
                'type' => 'pie',
                'height' => 300,
            ],
            'series' => array_values($data),
            'labels' => array_keys($data),
            'legend' => [
                'labels' => [
                    'colors' => '#9ca3af',
                    'fontWeight' => 600,
                ],
            ],
        ];
    }

    protected function getFormSchema(): array
    {
        return [

            Select::make('efecto')
                ->options([
                    0 => 'Indirecto',
                    1 => 'Directo',
                ]),

            Select::make('politica_publica_id')
                ->label('Politica pública')
                ->options(
                    PoliticaPublica::select(['id', 'name'])
                        ->get()
                        ->pluck('name', 'id')
                ),

            Select::make('tipo_gasto')
                ->label('Tipo de gasto')
                ->options([
                    'ordinarios' => 'ordinarios',
                    'extraordinarios' => 'extraordinarios',
                ]),

            Select::make('ciclo')
                ->options(IngresoVerde::select('ciclo')
                    ->groupBy('ciclo')
                    ->get()
                    ->mapWithKeys(function ($ciclo) {
                        return [$ciclo->ciclo => $ciclo->ciclo];
                    })
                ),

            Select::make('ramo')
                ->options(Cache::remember('ramos', now()->addDay(), function () {
                    return Catalogo::ramosOptionList();
                })),

        ];
    }


    private function getValues()
    {
        return IngresoVerde::withoutGlobalScopes()
            ->select(['clasificacion_tipo_gasto', DB::raw('SUM(monto) as total')])
            ->efecto($this->filterFormData['efecto'])
            ->ciclo((int)$this->filterFormData['ciclo'])
            ->ramo($this->filterFormData['ramo'])
            ->tipoGasto($this->filterFormData['tipo_gasto'])
            ->wherePoliticaPublica($this->filterFormData['politica_publica_id'])
            ->groupBy('clasificacion_tipo_gasto')
            ->get()
            ->map(function ($ingreso) {
                return [
                    $ingreso->clasificacion_tipo_gasto => (new Millions((int)$ingreso->total))->formatted,
                ];
            })
            ->flatMap(fn($values) => $values)
            ->toArray();
    }
}
