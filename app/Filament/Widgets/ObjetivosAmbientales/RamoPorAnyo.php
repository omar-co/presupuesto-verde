<?php

namespace App\Filament\Widgets\ObjetivosAmbientales;


use App\Models\CambioClimatico;
use App\Models\ObjetivoAmbiental;
use App\Models\Presupuesto;
use App\Values\Millions;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class RamoPorAnyo extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'ObjetivosAmbientalesRamoPorAnyo';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Objetivos ambientales ramo por año ';

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
                ->options(ObjetivoAmbiental::select('ciclo')
                    ->groupBy('ciclo')
                    ->get()
                    ->mapWithKeys(function ($ciclo) {
                        return [$ciclo->ciclo => $ciclo->ciclo];
                    })
                ),

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
        return ObjetivoAmbiental::withoutGlobalScopes()
            ->select(['ciclo', 'ramo_id'])
            ->addSelect(['presupuesto' => Presupuesto::query()
                ->select(DB::raw('SUM(monto) as total'))
                ->whereColumn('form_id', 'objetivos_ambientales.form_id')
                ->limit(1)
            ])
            ->efecto($this->filterFormData['efecto'])
            ->clasificacionTipoGasto($this->filterFormData['clasificacion_tipo_gasto'])
            ->ciclo($this->filterFormData['ciclo'])
            ->groupBy('ciclo', 'ramo_id', 'presupuesto')
            ->get();
    }


    private function series($data)
    {
        $grouped = $data->groupBy('ramo_id');

        $result = [];

        foreach ($grouped as $ramoId => $group) {
            $result[] = [
                'name' => $ramoId,
                'data' =>  $group
                    ->map(fn ($registro) => (new Millions((int) $registro->presupuesto * 100))->formatted)
                    ->toArray()
            ];
        }

        return $result;
    }
}
