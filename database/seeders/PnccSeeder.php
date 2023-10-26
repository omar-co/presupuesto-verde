<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PnccSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('politicas_publicas')->insert([
            [
                'name' => 'PNCC',
                'user_id' => 1,
                'objetivos_ambientales' => false,
                'cambio_climatico' => true,
                'ingresos_verdes' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('politicas_publicas_niveles')->insert([
            [
                'name' => 'Politica',
                'politica_publica_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Nombre',
                'politica_publica_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        DB::table('politicas_publicas_elementos')->insert([
            [
                'name' => "Adaptación",
                'parent_id' => null,
                'politica_publica_id' => 8,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "Mitigación",
                'parent_id' => null,
                'politica_publica_id' => 8,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => "A1 Fortalecimiento de capacidades adaptativas de los municipios para responder al cambio climático",
                'parent_id' => 797,
                'politica_publica_id' => 8,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => "M1 Emisiones totales nacionales de gases y compuestos de efecto invernadero en CO2e",
                'parent_id' => 798,
                'politica_publica_id' => 8,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => "M2 Emisión de bióxido de carbono por quema de combustibles fósiles",
                'parent_id' => 798,
                'politica_publica_id' => 8,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => "M3 Toneladas de CO2e mitigadas por el Programa Especial de Cambio Climático",
                'parent_id' => 798,
                'politica_publica_id' => 8,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => "M4 Emisión de bióxido de carbono por Producto Interno Bruto",
                'parent_id' => 798,
                'politica_publica_id' => 8,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => "M5 Emisión per cápita por bióxido de carbono",
                'parent_id' => 798,
                'politica_publica_id' => 8,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => "M6 Participación de fuentes renovables y alternas en la producción nacional de energía",
                'parent_id' => 798,
                'politica_publica_id' => 8,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => "M7 Participación de fuentes de energía límpia para la generación de energía eléctrica",
                'parent_id' => 798,
                'politica_publica_id' => 8,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => "M8 Participación de las fuentes renovables de energía en el consumo energético total",
                'parent_id' => 798,
                'politica_publica_id' => 8,
                'politica_publica_nivel_id' => 2,
            ],
        ]);
    }
}
