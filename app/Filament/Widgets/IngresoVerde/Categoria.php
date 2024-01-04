<?php

namespace App\Filament\Widgets\IngresoVerde;

use App\Models\Catalogo;
use App\Models\IngresoVerde;
use App\Values\Millions;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class Categoria extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'blogPostsChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Ingreso verde por categoría ';

    protected static ?string $pollingInterval = null;

    protected function getFormSchema(): array
    {
        return [

            Select::make('efecto')
                ->options([
                    0 => 'Indirecto',
                    1 => 'Directo',
                ]),

            Select::make('tipo_gasto')
                ->label('Tipo de gasto')
                ->options([
                    'ordinarios' => 'ordinarios',
                    'extraordinarios' => 'extraordinarios',
                ]),

            Select::make('clasificacion_tipo_gasto')
                ->label('Categoría')
                ->options([
                    'gasto muy favorable' => 'gasto muy favorable',
                    'gasto favorable' => 'gasto favorable',
                    'gasto neutro' => 'gasto neutro',
                    'gasto desfavorable' => 'gasto desfavorable',
                    'gasto controvertido' => 'gasto controvertido',
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


    private function getValues()
    {
        return IngresoVerde::withoutGlobalScopes()
            ->select(['politica_publica_id', DB::raw('SUM(monto) as total')])
            ->with('politicaPublica')
            ->efecto($this->filterFormData['efecto'])
            ->ciclo($this->filterFormData['ciclo'])
            ->ramo($this->filterFormData['ramo'])
            ->tipoGasto($this->filterFormData['tipo_gasto'])
            ->clasificacionTipoGasto($this->filterFormData['clasificacion_tipo_gasto'])
            ->groupBy('politica_publica_id')
            ->get()
            ->map(function ($ingreso) {
                return [
                    $ingreso->politicaPublica->name => (new Millions((int)$ingreso->total))->formatted,
                ];
            })
            ->flatMap(fn($values) => $values)
            ->toArray();
    }
}
