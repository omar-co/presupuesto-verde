<?php

namespace App\Filament\Widgets\CambioClimatico;


use App\Models\CambioClimatico;
use App\Models\Catalogo;
use App\Models\Presupuesto;
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
    protected static string $chartId = 'CambioClimaticoCategoria';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Cambio climatico por categoría ';

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
        return CambioClimatico::withoutGlobalScopes()
            ->select(['politica_publica_id'])
            ->with(['politicaPublica'])
            ->addSelect(['presupuesto' => Presupuesto::query()
                ->select(DB::raw('SUM(monto) as total'))
                ->whereColumn('form_id', 'cambio_climaticos.form_id')
                ->limit(1)
            ])
            ->efecto($this->filterFormData['efecto'])
            ->ramo($this->filterFormData['ramo'])
            ->clasificacionTipoGasto($this->filterFormData['clasificacion_tipo_gasto'])
            ->ciclo((int)$this->filterFormData['ciclo'])
            ->groupBy('politica_publica_id', 'presupuesto')
            ->get()
            ->map(function ($ingreso) {
                return [
                    $ingreso->politicaPublica->name => (new Millions((int)$ingreso->presupuesto * 100))->formatted,
                ];
            })
            ->flatMap(fn($values) => $values)
            ->toArray();
    }
}
