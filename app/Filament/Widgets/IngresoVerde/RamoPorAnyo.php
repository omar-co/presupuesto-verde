<?php

namespace App\Filament\Widgets\IngresoVerde;


use App\Models\CambioClimatico;
use App\Models\Catalogo;
use App\Models\IngresoVerde;
use App\Models\Presupuesto;
use App\Values\Millions;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class RamoPorAnyo extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'IngresoVerdeRamoPorAnyo';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Ingreso verde ramo por año ';

    protected static ?string $pollingInterval = null;

    protected function getFormSchema(): array
    {
        return [

            Select::make('efecto')
                ->options([
                    0 => 'Indirecto',
                    1 => 'Directo',
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
                ->options(CambioClimatico::select('ciclo')
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
                'stacked' => true,
            ],
            'series' =>  $this->series($data),
            'xaxis' => [
                'categories' => $data->pluck('ciclo')->unique()->values(),
                'labels' => [
                    'style' => [
                        'fontWeight' => 600,
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'fontWeight' => 600,
                    ],
                ],
            ],
            'plotOptions' => [
                'bar' => [
                    'horizontal' => true,

                ]
            ],
        ];
    }


    private function getValues()
    {
        return IngresoVerde::withoutGlobalScopes()
            ->with(['user'])
            ->efecto($this->filterFormData['efecto'])
            ->clasificacionTipoGasto($this->filterFormData['clasificacion_tipo_gasto'])
            ->ciclo($this->filterFormData['ciclo'])
            ->ramo($this->filterFormData['ramo'])
            ->get();
    }


    private function series($data)
    {
        $grouped = $data->groupBy(fn($item) => $item->user->ramo_id);

        $result = [];

        foreach ($grouped as $ramoId => $group) {
            $result[] = [
                'name' => $ramoId,
                'data' =>  $group
                    ->map(fn ($registro) => (new Millions((int) $registro->monto * 100))->formatted)
                    ->toArray()
            ];
        }

        return $result;
    }
}
