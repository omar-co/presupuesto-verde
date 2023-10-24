<?php

namespace App\Forms\Sections\Politicaspublicas;

use App\Forms\Fields\PoliticaPublica\ActividadesProyectos;
use App\Forms\Fields\PoliticaPublica\Etapa;
use App\Forms\Fields\PoliticaPublica\Indicador;
use App\Forms\Fields\PoliticaPublica\Nivel;
use App\Forms\Fields\PoliticaPublica\PeriodoImplementacion;
use App\Forms\Fields\PoliticaPublica\PoliticaPublica;
use App\Services\FormBuilder\FieldCollection;

class PoliticasPublicas extends FieldCollection {

    public function __construct(private readonly string $model) {
        parent::__construct(
            (new PoliticaPublica('politica_publica_id'))->setModelClass($this->model)
                ->afterStateUpdated(function (callable $set) {
                    $set('nivel_uno', null);
                    $set('nivel_dos', null);
                    $set('nivel_tres', null);
                    $set('nivel_cuatro', null);
                }),
            (new Nivel('nivel_uno'))
                ->label(fn(callable $get) => Repository::nombreNivel($get('politica_publica_id'), 1))
                ->options(fn(callable $get) => Repository::optionsNivelUno($get('politica_publica_id')))
                ->visible(fn(callable $get) => $get('politica_publica_id'))
                ->afterStateUpdated(function (callable $set) {
                    $set('nivel_dos', null);
                    $set('nivel_tres', null);
                    $set('nivel_cuatro', null);
                }),
            (new Nivel('nivel_dos'))
                ->label(fn(callable $get) => Repository::nombreNivel($get('politica_publica_id'), 2))
                ->options(fn(callable $get) => Repository::optionsNivel($get('politica_publica_id'), 2, $get('nivel_uno')))
                ->visible(fn(callable $get) => ($get('politica_publica_id') && Repository::nombreNivel($get('politica_publica_id'), 2)))
                ->afterStateUpdated(function (callable $set) {
                    $set('nivel_tres', null);
                    $set('nivel_cuatro', null);
                }),
            (new Nivel('nivel_tres'))
                ->label(fn(callable $get) => Repository::nombreNivel($get('politica_publica_id'), 3))
                ->options(fn(callable $get) => Repository::optionsNivel($get('politica_publica_id'), 3, $get('nivel_dos')))
                ->visible(fn(callable $get) => ($get('politica_publica_id') && Repository::nombreNivel($get('politica_publica_id'), 3)))
                ->afterStateUpdated(function (callable $set) {
                    $set('nivel_cuatro', null);
                }),
            (new Nivel('nivel_cuatro'))
                ->label(fn(callable $get) => Repository::nombreNivel($get('politica_publica_id'), 4))
                ->options(fn(callable $get) => Repository::optionsNivel($get('politica_publica_id'), 4, $get('nivel_tres')))
                ->visible(fn(callable $get) => ($get('politica_publica_id') && Repository::nombreNivel($get('politica_publica_id'), 4))),
            new ActividadesProyectos('actividades_o_proyectos'),
            new Indicador('indicador'),
            new PeriodoImplementacion('periodo_implementacion'),
            new Etapa('etapa',)
        );
    }

}
