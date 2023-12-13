<?php

namespace App\Filament\Widgets\IngresoVerde;

use App\Models\IngresoVerde;
use App\Models\PoliticaPublica;
use App\Values\Millions;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class TipoIngreso extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'IngresoVerdeTipoIngreso';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Ingreso verde por tipo de ingreso';

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
                'type' => 'bar',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'Millones de Pesos',
                    'data' => array_values($data),
                ],
            ],
            'xaxis' => [
                'categories' => array_keys($data),
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 600,
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 600,
                    ],
                ],
            ],
            'colors' => ['#6366f1'],
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

            Select::make('clasificacion_tipo_gasto')
                ->label('Categoría')
                ->options([
                    'gasto muy favorable' => 'gasto muy favorable',
                    'gasto favorable' => 'gasto favorable',
                    'gasto neutro' => 'gasto neutro',
                    'gasto desfavorable' => 'gasto desfavorable',
                    'gasto controvertido' => 'gasto controvertido',
                ]),

        ];
    }


    private function getValues()
    {

        return IngresoVerde::select(['tipo_ingreso', DB::raw('SUM(monto) as total')])
            ->efecto($this->filterFormData['efecto'])
            ->wherePoliticaPublica($this->filterFormData['politica_publica_id'])
            ->clasificacionTipoGasto($this->filterFormData['clasificacion_tipo_gasto'])
            ->groupBy('tipo_ingreso')
            ->get()
            ->map(function ($ingreso) {
                return [
                    $ingreso->tipo_ingreso => (new Millions((int)$ingreso->total))->formatted,
                ];
            })
            ->flatMap(fn($values) => $values)
            ->toArray();
    }
}
