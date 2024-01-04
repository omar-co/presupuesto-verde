<?php

namespace App\Filament\Widgets\ObjetivosAmbientales;

use App\Models\Catalogo;
use App\Models\ObjetivoAmbiental;
use App\Models\PoliticaPublica;
use App\Models\Presupuesto;
use App\Values\Millions;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class TipoIngreso extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'ObjetivosAmbientalesTipoIngreso';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Objetivos ambientales por tipo de ingreso';

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

            Select::make('ciclo')
                ->options(ObjetivoAmbiental::select('ciclo')
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
        return ObjetivoAmbiental::withoutGlobalScopes()
            ->select(['clasificacion_tipo_gasto'])
            ->addSelect(['presupuesto' => Presupuesto::query()
                ->select(DB::raw('SUM(monto) as total'))
                ->whereColumn('form_id', 'objetivos_ambientales.form_id')
                ->limit(1)
            ])
            ->tipoGasto($this->filterFormData['tipo_gasto'])
            ->efecto($this->filterFormData['efecto'])
            ->ciclo($this->filterFormData['ciclo'])
            ->ramo($this->filterFormData['ramo'])
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
