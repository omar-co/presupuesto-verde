<?php

namespace App\Http\Livewire;


use App\Models\Catalogo;
use App\Models\ObjetivoAmbiental;
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

    protected $listeners = [
        'presupuestosRefreshCatalogTable' => 'actualiza',
    ];

    protected function getTableQueryStringIdentifier(): string
    {
        return 'catalogos';
    }

    public function actualiza(string $ramoId, $modalidad, $pp, $contribucion) {
        $this->ramoId = $ramoId;
        $this->modalidad = $modalidad;
        $this->pp = $pp;
        $this->contribucion = $contribucion;

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
                ->where('id_ramo', $this->ramoId)
                ->where('id_modalidad', $this->modalidad)
                ->where('id_pp', $this->pp);
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
            ->label('Id Unidad responsable')
            ->sortable(),
            TextColumn::make('desc_ur')
            ->label('Unidad responsable')
            ->sortable(),
            TextColumn::make('gpo_funcional')
            ->label('Id Grupo funcional')
            ->sortable(),
            TextColumn::make('desc_gpo_funcional')
            ->label('Grupo Funcional')
            ->sortable(),
            TextColumn::make('id_funcion')
            ->label('Id Función')
            ->sortable(),
            TextColumn::make('desc_funcion')
            ->label('Función')
            ->sortable(),
            TextColumn::make('id_subfuncion')
            ->label('Id Subfunción')
            ->sortable(),
            TextColumn::make('desc_subfuncion')
            ->label('Subfunción')
            ->sortable(),
            TextColumn::make('id_ai')
            ->label('Id Actividad institucional')
            ->sortable(),
            TextColumn::make('desc_ai')
            ->label('Actividad institucional')
            ->sortable(),
            TextColumn::make('id_modalidad')
            ->label('Id Modalidad')
            ->sortable(),
            TextColumn::make('desc_modalidad')
            ->label('Modalidad')
            ->sortable(),
            TextColumn::make('id_pp')
            ->label('Id Programa presupuestario')
            ->sortable(),
            TextColumn::make('desc_pp')
            ->label('Programa presupuestario')
            ->sortable(),
            TextColumn::make('id_capitulo')
            ->label('Id Capítulo')
            ->sortable(),
            TextColumn::make('id_partida_especifica')
            ->label('Id Partida específica')
            ->sortable(),
            TextColumn::make('desc_partida_especifica')
            ->label('Partida específica')
            ->sortable(),
            TextColumn::make('id_tipogasto')
            ->label('Id Tipo de gasto')
            ->sortable(),
            TextColumn::make('desc_tipogasto')
            ->label('Tipo de gasto')
            ->sortable(),
            TextColumn::make('id_ff')
            ->label('Id Fuente financiera')
            ->sortable(),
            TextColumn::make('desc_ff')
            ->label('Fuente financiera')
            ->sortable(),
            TextColumn::make('id_entidad_federativa')
            ->label('Id Entidad Federativa')
            ->sortable(),
            TextColumn::make('entidad_federativa')
            ->label('Entidad Federativa')
            ->sortable(),
            TextColumn::make('id_clave_cartera')
            ->label('Clave cartera')
            ->sortable(),
            TextInputColumn::make('name')
            ->updateStateUsing(function ($state, $record) {
               $ob = ObjetivoAmbiental::find(2);
               $ob->componentes = $state;
               $ob->save();
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
            BulkAction::make('updateAuthor')
                ->action(function (Collection $records, array $data): void {
                    foreach ($records as $record) {
                        $record->monto_aprobado = $data['authorId'];
                        $record->save();
                    }
                })
                ->form([
                    Forms\Components\Select::make('authorId')
                        ->label('Author')
                        ->options(User::query()->pluck('name', 'id'))
                        ->required(),
                ])
        ];
    }

    private function getDataFromSession() {
       $this->ramoId = session('ramoId');
       $this->modalidad = session('modalidad');
       $this->pp = session('pp');
       $this->contribucion = session('contribucion');
     }

    private function setDataFromSession() {
        session([
           'ramoId' => $this->ramoId,
           'modalidad' => $this->modalidad,
           'pp' => $this->pp,
           'contribucion' => $this->contribucion
        ]);
    }

}
