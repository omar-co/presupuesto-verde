<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PoliticaPublicaElemento;

class EnbioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('politicas_publicas_elementos')->insert([
            [
                'name' => 'Conocimiento',
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => 'Conservación y restauración',
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => 'Uso y manejo sustentable',
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => 'Atención a los factores de presión',
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => 'Educación, comunicación y cultura ambiental',
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => 'Integración y gobernanza',
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 1,
            ]
        ]);
        DB::table('politicas_publicas_elementos')->insert([
            [
                'name' => '1.1 Generación, documentación y sistematización del conocimiento',
                'parent_id' => 105,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '1.2 Conocimiento tradicional',
                'parent_id' => 105,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '1.3 Promoción de la ciencia ciudadana',
                'parent_id' => 105,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '1.4 Desarrollo de herramientas para el acceso a la información',
                'parent_id' => 105,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '2.1 Conservación in situ',
                'parent_id' => 106,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '2.2 Conservación ex situ',
                'parent_id' => 106,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '2.3 Restauración de ecosistemas degradado',
                'parent_id' => 106,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '3.1 Aprovechamiento sustentable',
                'parent_id' => 107,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '3.2 Generación, fortalecimiento y diversificación de cadenas productivas y de valor agropecuarias, silvícolas, pesqueras y acuícolas',
                'parent_id' => 107,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '3.3 Creación y fortalecimiento de instrumentos para el uso sustentable y el reparto justo y equitativo de los beneficios',
                'parent_id' => 107,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '4.1 Prevención y reducción de la degradación y pérdida de los ecosistemas',
                'parent_id' => 108,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '4.2 Prevención, regulación y control para evitar la sobreexplotación de especies',
                'parent_id' => 108,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '4.3 Prevención, control y erradicación de especies invasoras',
                'parent_id' => 108,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '4.4 Prevención y control de posibles efectos adversos del uso de ogm',
                'parent_id' => 108,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '4.5 Prevención, control y reducción de la contaminación',
                'parent_id' => 108,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '4.6 Reducción de la vulnerabilidad de la biodiversidad ante el cambio climático',
                'parent_id' => 108,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '4.7 Uso ordenado del territorio y desarrollo urbano sustentable',
                'parent_id' => 108,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '5.1 Educación ambiental en el Sistema Educativo Nacional',
                'parent_id' => 109,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '5.2 Educación ambiental para la sociedad',
                'parent_id' => 109,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '5.3 Comunicación y difusión ambiental',
                'parent_id' => 109,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '6.1 Armonización e integración del marco jurídico',
                'parent_id' => 110,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '6.2 Consolidación del marco institucional y las políticas públicas para la integración y la transversalidad',
                'parent_id' => 110,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '6.3 Participación social para la gobernanza de la biodiversidad',
                'parent_id' => 110,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => '6.4 Fortalecimiento de la cooperación y el cumplimiento de los compromisos internacionales',
                'parent_id' => 110,
                'politica_publica_id' => 2,
                'politica_publica_nivel_id' => 2,
            ],

        ]);
    }
}
