<?php

namespace App\Filament\Pages;

use App\Settings\Calendario;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;

class General extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = Calendario::class;

    protected static ?string $navigationGroup = 'Configuración';

    protected static ?int $navigationSort = 999;

    protected function getFormSchema(): array
    {
        return [
            Section::make('Calendario')
                ->schema([
                    Grid::make()
                    ->schema([
                        TextInput::make('ejercicio_fiscal')
                            ->label('Ejercicio Fiscal')
                            ->numeric()
                            ->integer()
                            ->minValue(2019)
                            ->maxValue(2080)
                            ->required(),
                        DatePicker::make('fecha_corte')
                            ->label('Fecha de Corte')
                            ->required()
                    ])
                ])
        ];
    }
}
