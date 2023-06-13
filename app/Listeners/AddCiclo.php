<?php

namespace App\Listeners;

use App\Events\SavingRegistry;
use App\Settings\Calendario;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddCiclo
{
    /**
     * Create the event listener.
     */
    public function __construct(private Calendario $calendario)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SavingRegistry $event): void
    {
        $event->model->ciclo = $this->calendario->ejercicio_fiscal;
    }
}
