<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.ejercicio_fiscal', 2022);
        $this->migrator->add('general.fecha_corte', now()->addYear());
    }
};
