<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('politicas_publicas')->insert([
            [
                'name' => 'ODS',
                'user_id' => 1,
                'objetivos_ambientales' => false,
                'cambio_climatico' => false,
                'ingresos_verdes' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('politicas_publicas_niveles')->insert([
            [
                'name' => 'Objetivo',
                'politica_publica_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        DB::table('politicas_publicas_elementos')->insert([
            [
                'name' => "Poner fin a la pobreza",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Hambre y seguridad alimentaria",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Salud y bienestar",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Educación de calidad",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Igualdad de género",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Agua limpia y saneamiento",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Energía asequible y no contaminante",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Trabajo decente y crecimiento económico",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Industria, innovación e infraestructura",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Reducción de las desigualdades",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Ciudades y comunidades sostenibles",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Producción y consumo responsables",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Cambio climático",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Vida submarina",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Bosques, desertificación y diversidad biológica",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Paz, justicia e instituciones solidas",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Alianzas para lograr los objetivos",
                'parent_id' => null,
                'politica_publica_id' => 9,
                'politica_publica_nivel_id' => 1,
            ],
        ]);
    }
}
