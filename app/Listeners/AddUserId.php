<?php

namespace App\Listeners;

use App\Events\SavingRegistry;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddUserId
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SavingRegistry $event): void
    {
        $event->model->user_id = auth()->id();
    }
}
