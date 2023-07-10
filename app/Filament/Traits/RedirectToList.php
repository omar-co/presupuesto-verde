<?php

namespace App\Filament\Traits;

trait RedirectToList {

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
