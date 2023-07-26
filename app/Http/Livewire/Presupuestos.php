<?php

namespace App\Http\Livewire;


use App\Models\Catalogo;
use App\Models\ObjetivoAmbiental;
use App\Models\Presupuesto;
use App\Models\User;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Contracts\View\View;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Livewire\Component;
use Filament\Forms;

class Presupuestos extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;


    private $ramoId;
    private $modalidad;
    private $pp;
    private $contribucion;
    private $formId;

    protected $listeners = [
        'presupuestosRefreshCatalogTable' => 'actualiza',
    ];

    protected function getTableQueryStringIdentifier(): string
    {
        return 'catalogos';
    }

    public function actualiza(string $ramoId, $modalidad, $pp, $contribucion, $formId) {
        $this->ramoId = $ramoId;
        $this->modalidad = $modalidad;
        $this->pp = $pp;
        $this->contribucion = $contribucion;
        $this->formId = $formId;

        $this->setDataFromSession();

        $this->emit('$refresh');
    }


    public function render(): View
    {
        return view('livewire.presupuestos');
    }

    protected function getTableQuery(): ?Builder
    {

        $this->getDataFromSession();

        if ($this->ramoId) {
            $query = Catalogo::query()
                ->referencia($this->contribucion, $this->modalidad)
                ->where('id_ramo', $this->ramoId)
                ->where('id_modalidad', $this->modalidad)
                ->where('id_pp', $this->pp)
                ->addSelect(['presupuesto' => Presupuesto::query()
                ->select('monto')
                    ->where('form_id', $this->formId)
                    ->where('user_id', auth()->id())
                    ->whereColumn('catalogo_id', 'catalogos.id')
                    ->limit(1)
                ]);
        } else {
            $query = Catalogo::query()->where('id', 0);
        }

        $this->setDataFromSession();

        return $query;
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('id_ramo')
                ->getStateUsing(function (Catalogo $record) {
                    return "{$record->id_ramo} - {$record->desc_ramo}";
                })
                ->label('Ramo'),
            TextColumn::make('id_ur')
                ->label('Unidad responsable')
                ->getStateUsing(function (Catalogo $record) {
                    return "{$record->id_ur} - {$record->desc_ur}";
                })
                ->sortable(),
            TextColumn::make('gpo_funcional')
                ->label('Grupo funcional')
                ->getStateUsing(function (Catalogo $record) {
                    return "{$record->gpo_funcional} - {$record->desc_gpo_funcional}";
                })
                ->sortable(),
            TextColumn::make('id_funcion')
                ->label('Función')
                ->getStateUsing(function (Catalogo $record) {
                    return "{$record->id_funcion} - {$record->desc_funcion}";
                })
                ->sortable(),
            TextColumn::make('id_subfuncion')
                ->label('Subfunción')
                ->getStateUsing(function (Catalogo $record) {
                    return "{$record->id_subfuncion} - {$record->desc_subfuncion}";
                })
                ->sortable(),
            TextColumn::make('id_ai')
                ->label('Actividad institucional')
                ->getStateUsing(function (Catalogo $record) {
                    return "{$record->id_ai} - {$record->desc_ai}";
                })
                ->sortable(),
            TextColumn::make('id_modalidad')
                ->label('Modalidad')
                ->getStateUsing(function (Catalogo $record) {
                    return "{$record->id_modalidad} - {$record->desc_modalidad}";
                })
                ->sortable(),
            TextColumn::make('id_pp')
                ->label('Id Programa presupuestario')
                ->getStateUsing(function (Catalogo $record) {
                    return "{$record->id_pp} - {$record->desc_pp}";
                })
                ->sortable(),
            TextColumn::make('id_capitulo')
                ->label('Id Capítulo')
                ->sortable(),
            TextColumn::make('id_partida_especifica')
                ->label('Partida específica')
                ->getStateUsing(function (Catalogo $record) {
                    return "{$record->id_partida_especifica} - {$record->desc_partida_especifica}";
                })
                ->sortable(),
            TextColumn::make('id_tipogasto')
                ->label('Tipo de gasto')
                ->getStateUsing(function (Catalogo $record) {
                    return "{$record->id_tipogasto} - {$record->desc_tipogasto}";
                })
                ->sortable(),
            TextColumn::make('id_ff')
                ->label('Fuente financiera')
                ->getStateUsing(function (Catalogo $record) {
                    return "{$record->id_ff} - {$record->desc_ff}";
                })
                ->sortable(),
            TextColumn::make('id_entidad_federativa')
            ->label('Entidad Federativa')
                ->getStateUsing(function (Catalogo $record) {
                    return "{$record->id_entidad_federativa} - {$record->entidad_federativa}";
                })
                ->sortable(),
            TextColumn::make('id_clave_cartera')
            ->label('Clave cartera')
            ->sortable(),
            TextInputColumn::make('presupuesto')
            ->updateStateUsing(function ($state, $record) {
                Presupuesto::query()
                    ->create([
                        'user_id' => auth()->id(),
                        'form_id' => $this->formId,
                        'catalogo_id' => $record->id,
                        'monto' => $state,
                    ]);
            })
            ];
    }

    protected function getTableFilters(): array
    {
        return [
            SelectFilter::make('id_entidad_federativa')
                ->label('Entidad Federativa')
                ->options(
                    Catalogo::query()
                        ->select(['id_entidad_federativa', 'entidad_federativa'])
                        ->groupBy(['entidad_federativa', 'id_entidad_federativa'])->
                        get()
                        ->pluck('entidad_federativa', 'id_entidad_federativa')
                )
        ];
    }

    protected function getTableBulkActions(): array
    {
        return [

        ];
    }

    private function getDataFromSession() {
       $this->ramoId = session('ramoId');
       $this->modalidad = session('modalidad');
       $this->pp = session('pp');
       $this->contribucion = session('contribucion');
       $this->formId = session('formId');
     }

    private function setDataFromSession() {
        session([
           'ramoId' => $this->ramoId,
           'modalidad' => $this->modalidad,
           'pp' => $this->pp,
           'contribucion' => $this->contribucion,
           'formId' => $this->formId,
        ]);
    }

}
