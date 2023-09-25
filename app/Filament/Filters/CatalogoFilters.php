<?php

namespace App\Filament\Filters;

use App\Models\Catalogo;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Facades\Cache;

class CatalogoFilters {

    public static function build(): array {
        return [
            SelectFilter::make('id_ramo')
                ->label('Ramo')
                ->options(Cache::remember('ramos', now()->addDay(), function () {
                    return Catalogo::ramosOptionList();
                })),
            SelectFilter::make('id_ur')
                ->label('Unidad Responsable')
                ->searchable()
                ->options(Cache::remember('unidades_responsables', now()->addDay(), function () {
                    return Catalogo::unidadResponsableOptionList();
                })),
            SelectFilter::make('gpo_funcional')
            ->label('Grupo Funcional')
            ->options(Cache::remember('grupos_funcionales', now()->addDay(), fn() => Catalogo::grupoFuncionalOptionList())),

            SelectFilter::make('id_entidad_federativa')
                ->label('Entidad Federativa')
                ->options(
                    Cache::remember('entidades_federativas', now()->addDay(), fn() => Catalogo::entidadesFederativasOptionList())
                ),
        ];
    }

}
