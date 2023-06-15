<?php

namespace App\Forms\Fields\Cuantificacion;

use App\Services\Data;
use App\Services\FormBuilder\Field;
use Filament\Forms\Components\Concerns\HasState;
use Filament\Forms\Components\ViewField;
use Filament\Support\Concerns\EvaluatesClosures;
use Illuminate\Support\Facades\Log;
use Livewire\Request;

class PresupuestosTabla extends ViewField implements Field {


    public $context;


    protected function setUp(): void
    {
        //$ramoId = $this->evaluate(fn ($get) => $get('ramo_id'));
        //$state = $this->getState();
        Log::debug($this->context);
        Log::debug('holi');
    }

    public function build(): ViewField {
        return $this->view('presupuestosTabla')
            ->beforeStateDehydrated(function (callable $get, callable $set){

                $set('tabla', [ $get('ramo_id'), $get('modalidad_id')]);
            })

            ;
    }

}
