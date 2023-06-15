<?php

namespace App\Http\Livewire;


use App\Models\Catalogo;
use App\Models\User;
use Filament\Forms\Concerns\HasState;
use Filament\Support\Concerns\EvaluatesClosures;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Contracts\View\View;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Filament\Forms;

class Presupuestos extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;


    public $ramoId;

    protected $listeners = [
        'refreshCatalogTable' => 'actualiza',
    ];




    public function actualiza(string $ramoId) {
        $this->ramoId = $ramoId;
        Log::debug('ramo: ' . $this->ramoId);
        $this->emit('$refresh');
    }

    protected function getTableFilters(): array
    {
        return [
            SelectFilter::make('id_ramo')
                ->options([
                    16 => '16',
                    15 => '15',
                    13 => '13',
                ]),
        ];
    }


    public function render(): View
    {
        return view('livewire.presupuestos');
    }

    protected function getTableQuery(): ?Builder
    {

        if ($this->ramoId) {
            $query = Catalogo::query();
        } else {
            $query = Catalogo::query()->where('id', 0);
        }


        return $query;
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('id'),
            TextColumn::make('ciclo'),
            TextColumn::make('desc_ramo'),
            TextColumn::make('created_at'),
            ];
    }

}
