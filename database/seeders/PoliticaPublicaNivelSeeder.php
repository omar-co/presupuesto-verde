<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PoliticaPublicaElemento;

class PoliticaPublicaNivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('politicas_publicas_niveles')->insert([
            [
                'name' => 'Objetivo prioritario',
                'politica_publica_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Estrategia prioritaria',
                'politica_publica_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Actividad puntual',
                'politica_publica_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eje',
                'politica_publica_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SubEje',
                'politica_publica_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eje',
                'politica_publica_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Objetivo',
                'politica_publica_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Estrategia',
                'politica_publica_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Línea de Acción',
                'politica_publica_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Objetivo Prioritario',
                'politica_publica_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Estrategia Prioritaria',
                'politica_publica_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Acciones Puntuales',
                'politica_publica_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Objetivo Prioritario',
                'politica_publica_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Estrategia Prioritaria',
                'politica_publica_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Actividad Puntual',
                'politica_publica_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Objetivo Prioritario',
                'politica_publica_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Estrategia Prioritaria',
                'politica_publica_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Actividad Puntual',
                'politica_publica_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tipo de Acción Puntual',
                'politica_publica_id' => 6,
                'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Instituciones coordinadas',
                'politica_publica_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Encargado del seguimiento',
                'politica_publica_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eje',
                'politca_publica_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Acción Puntual',
                'politica_publica_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Componente de Mitigación',
                'politica_publica_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Acción Puntual',
                'politica_publica_id' => 7,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}
