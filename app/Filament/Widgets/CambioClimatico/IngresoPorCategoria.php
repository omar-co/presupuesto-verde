<?php

namespace App\Filament\Widgets\CambioClimatico;

use App\Models\CambioClimatico;
use App\Models\PoliticaPublica;
use App\Models\Presupuesto;
use App\Values\Millions;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class IngresoPorCategoria extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'CambioClimaticoPorCategoria';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Cambio climatico Tipo de gasto por categoria';

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

            Select::make('ciclo')
                ->options(CambioClimatico::select('ciclo')
                    ->groupBy('ciclo')
                    ->get()
                    ->mapWithKeys(function ($ciclo) {
                        return [$ciclo->ciclo => $ciclo->ciclo];
                    })
                ),

        ];
    }


    private function getValues()
    {
        return CambioClimatico::withoutGlobalScopes()
            ->select(['clasificacion_tipo_gasto'])
            ->addSelect(['presupuesto' => Presupuesto::query()
                ->select(DB::raw('SUM(monto) as total'))
                ->whereColumn('form_id', 'cambio_climaticos.form_id')
                ->limit(1)
            ])
            ->ciclo($this->filterFormData['ciclo'])
            ->efecto($this->filterFormData['efecto'])
            ->wherePoliticaPublica($this->filterFormData['politica_publica_id'])
            ->groupBy('clasificacion_tipo_gasto', 'presupuesto')
            ->get()
            ->map(function ($ingreso) {
                return [
                    $ingreso->clasificacion_tipo_gasto => (new Millions((int)$ingreso->presupuesto * 100))->formatted,
                ];
            })
            ->flatMap(fn($values) => $values)
            ->toArray();
    }
}
