<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PoliticaPublicaElemento;

class NdcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('politicas_publicas_elementos')->insert([
            [
                'name'=>'Adaptación',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>1,
            ],
            [
                'name'=>'Mitigacion',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>1,
            ],
        ]);

        DB::table('politicas_publicas_elementos')->insert([
            [
                'name'=>'Eje A: Prevención y atención de impactos negativos en la población humana y en el territorio',
                'parent_id'=>'713',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2
            ],
            [
                'name'=>'Eje B: Sistemas productivos resilientes y seguridad alimentaria',
                'parent_id'=>'713',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2
            ],
            [
                'name'=>'Eje C: Conservación, restauración y aprovechamiento',
                'parent_id'=>'713',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2
            ],
            [
                'name'=>'Eje D: Gestión integrada de los recursos hídricos con enfoque de cambio climático',
                'parent_id'=>'713',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2
            ],
            [
                'name'=>'Eje E: Protección de infraestructura estratégica y del patrimonio cultural tangible',
                'parent_id'=>'713',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2
            ],
            [
                'name'=>'Transporte',
                'parent_id'=>'714',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2,
            ],
            [
                'name'=>'Generación eléctrica',
                'parent_id'=>'714',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2,
            ],
            [
                'name'=>'Residencial y comercial',
                'parent_id'=>'714',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2,
            ],
            [
                'name'=>'Petróleo y gas',
                'parent_id'=>'714',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2,
            ],
            [
                'name'=>'Industria',
                'parent_id'=>'714',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2,
            ],
            [
                'name'=>'Agricultura y ganadería',
                'parent_id'=>'714',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2,
            ],
            [
                'name'=>'Residuos',
                'parent_id'=>'714',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2,
            ],
            [
                'name'=>'Uso de suelo, cambio de uso de suelo y  silvicultura',
                'parent_id'=>'714',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>2,
            ],
        ]);
        DB::table('politicas_publicas_elementos')->insert([
            [
                'name'=>'A1. Implementar acciones en 50% de los municipios identificados como vulnerables de acuerdo con el Atlas Nacional de Vulnerabilidad al Cambio Climático y el Programa Especial de Cambio Climático 2020—2024 priorizando a los de mayor rezago social.',
                'parent_id'=>'715',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'A2. Implementar estrategias integrales de adaptación que fortalezcan la resiliencia en asentamientos humanos.',
                'parent_id'=>'715',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'A3. Fortalecer en los tres órdenes de gobierno los sistemas de alerta temprana y protocolos de prevención y acción ante peligros hidrometeorológicos y climáticos en diferentes sistemas naturales y humanos.',
                'parent_id'=>'715',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'A4. Incorporar criterios de adaptación al cambio climático en los instrumentos de planeación, gestión territorial y del riesgo de desastres en todos los sectores y órdenes de gobierno.',
                'parent_id'=>'715',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'A5. Fortalecer instrumentos financieros, para la gestión del riesgo de desastres y atención mediante la integración de criterios de adaptación al cambio climático.',
                'parent_id'=>'715',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'A6. Implementar estrategias para reducir los impactos en la salud, relacionados con enfermedades exacerbadas por el cambio climático.',
                'parent_id'=>'715',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'A7. Identificar y atender el desplazamiento forzado de personas por los impactos negativos del cambio climático',
                'parent_id'=>'715',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'B1. Promover prácticas de producción y consumo sostenibles, la conservación de los recursos genéticos y la recuperación de paisajes bioculturales.',
                'parent_id'=>'716',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'B2. Incorporar el riesgo por cambio climático dentro de las cadenas de valor y planes de inversión de los sectores productivos.',
                'parent_id'=>'716',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'B3. Contribuir a la prevención y atención de plagas y enfermedades de especies animales domesticadas y cultivos vegetales, facilitadas y exacerbadas por el cambio climático.',
                'parent_id'=>'716',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'B4. Fortalecer instrumentos de política ambiental e implementar acciones para asegurar la protección ante impactos potenciales del cambio climático de los cultivos nativos, relevantes para la agricultura y la seguridad alimentaria.',
                'parent_id'=>'716',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'B5. Impulsar mecanismos de financiamiento que permitan enfrentar los impactos negativos del cambio climático en el sector primario.',
                'parent_id'=>'716',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'C1.  Alcanzar al 2030 una tasa cero de deforestación neta.',
                'parent_id'=>'717',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'C2. Fortalecer instrumentos de política ambiental e implementar acciones para conservar y restaurar los ecosistemas continentales, incrementar su conectividad ecológica y favorecer su resiliencia.',
                'parent_id'=>'717',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'C3. Fortalecer instrumentos e implementar acciones para la conservación de la biodiversidad y restauración en ecosistemas marinos, costeros y dulceacuícolas, así ́ como promover el incremento y permanencia de reservorios de carbono, haciendo énfasis en el carbono azul.',
                'parent_id'=>'717',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'C4. Impulsar acciones para prevenir el establecimiento, controlar y erradicar las especies invasoras, enfermedades y plagas, cuyos impactos se exacerban por efectos del cambio climático.',
                'parent_id'=>'717',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'C5. Diseñar e implementar acciones que contribuyan al combate de la desertificación y a la conservación de suelos.',
                'parent_id'=>'717',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'C6. Fortalecer instrumentos de política ambiental e implementar acciones para conservar y restaurar las islas e incrementar su resiliencia.',
                'parent_id'=>'717',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'C7. Implementar acciones de conservación y restauración de los mares y océanos para favorecer su resiliencia ante el cambio climático.',
                'parent_id'=>'717',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'D1. Implementar acciones para el uso sostenible de los recursos hídricos en sus diferentes usos consuntivos con enfoque de cambio climático.',
                'parent_id'=>'718',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'D2. Promover los servicios ambientales hidrológicos, mediante la conservación, protección y restauración en las cuencas con especial atención en Soluciones basadas en la Naturaleza.',
                'parent_id'=>'718',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'D3. Aumentar el tratamiento de aguas residuales industriales y urbanas, asegurando la cantidad y buena calidad del agua en asentamientos humanos mayores a 500,000 habitantes.',
                'parent_id'=>'718',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'D4. Garantizar el acceso al agua –en cantidad y calidad– para uso y consumo humano, ante condiciones de cambio climático.',
                'parent_id'=>'718',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'E1. Incrementar la seguridad estructural y funcional de la infraestructura estratégica actual y por desarrollar ante eventos asociados al cambio climático.',
                'parent_id'=>'719',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'E2. Incorporar criterios de adaptación al cambio climático y gestión integral del riesgo de desastres en proyectos de inversión de infraestructura estratégica.',
                'parent_id'=>'719',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'E3. Proteger, restaurar y conservar el patrimonio cultural tangible ante impactos del cambio climático.',
                'parent_id'=>'719',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'E4. Generar y fortalecer los instrumentos de financiamiento público, así como promover la inversión privada, para proyectos de infraestructura y patrimonio cultural que incorporen criterios de adaptación.',
                'parent_id'=>'719',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Estrategia Nacional de Movilidad Eléctrica (ENME): Promover la transformación en el transporte público.',
                'parent_id'=>'720',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Electromovilidad.',
                'parent_id'=>'720',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Eficiencia energética vehicular.',
                'parent_id'=>'720',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Transitar hacia vehículos más eficientes.',
                'parent_id'=>'720',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Promover el transporte limpio, sistemas de transporte público eficiente sistemas de transporte alternativos y no motorizados.',
                'parent_id'=>'720',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Estrategia Nacional de Trabajo Remoto (ENTR): El trabajo remoto o teletrabajo puede reducir la huella de carbono, así como de otros contaminantes atmosféricos, lo que fortalece las políticas de cambio climático y también las de calidad del aire.',
                'parent_id'=>'720',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Integrar energía limpia en la generación eléctrica.',
                'parent_id'=>'721',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Sustituir combustibles de alto contenido de carbono por gas natural en centrales de alta eficiencia.',
                'parent_id'=>'721',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Reducir las pérdidas técnicas de la red eléctrica.',
                'parent_id'=>'721',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Modernizar y construir centrales hidroeléctricas.',
                'parent_id'=>'721',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Aumentar la capacidad de generación con centrales fotovoltaicas, eólicas y geotérmicas.',
                'parent_id'=>'721',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Fomentar la generación distribuida renovable.',
                'parent_id'=>'721',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Impulsar nuevas tecnologías como el hidrogeno verde.',
                'parent_id'=>'721',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Promover proyectos de electrificación rural y proyectos de hogares solares',
                'parent_id'=>'721',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Fomentar la eficiencia energética, para reducir la factura eléctrica en hogares y comercios.',
                'parent_id'=>'722',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Optimizar el consumo de energía e impulsar mecanismos y normativas que fomenten la inclusión de mejores prácticas en construcciones nuevas y renovaciones.',
                'parent_id'=>'722',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Fortalecer la generación distribuida de energía, por su potencial tanto en el sector urbano como en las comunidades alejadas de la red eléctrica, donde las tecnologías renovables y de almacenamiento representan una oportunidad valiosa para el acceso universal a la energía.',
                'parent_id'=>'722',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Apoyar a las comunidades rurales para reducir el uso de leña y para tener procesos de combustión más eficientes.',
                'parent_id'=>'722',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Incrementar la cogeneración, tanto en centros procesadores de gas como en la refinación del petróleo.',
                'parent_id'=>'723',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Reducir las emisiones fugitivas del subsector gas y del subsector petróleo.',
                'parent_id'=>'723',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Programa de Eficiencia Energética en Petróleos Mexicanos y sus empresas productivas.',
                'parent_id'=>'723',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Estrategia de aprovechamiento de gas en pozos existentes. Acciones que sirvan para cumplir con el Compromiso Global de Metano.',
                'parent_id'=>'723',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Plan de implementación de acciones de mitigación en PEMEX.',
                'parent_id'=>'723',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Sistema de Comercio de Emisiones de México (SCE): Incentivar innovación para realizar acciones de mitigación costo-eficientes.',
                'parent_id'=>'724',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Medidas de mitigación apropiadas para cada país (NAMA por sus siglas en inglés) - MIPYME: Apoyar con medidas costo efectivas, principalmente de eficiencia energética.',
                'parent_id'=>'724',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Estrategia Nacional de Economía Circular (ENEC): Fomentar una industria circular y eficiente, mediante colaboración e innovación que promueva la competitividad y el uso más sustentable de materiales, agua y energía, con cobeneficios en la reducción de emisiones.',
                'parent_id'=>'724',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Estrategia Nacional de Enfriamiento (ENE): Promover acciones de reducción de HFC y participar en el Grupo de Acción Climática del Ácido Nítrico (NACAG) para mitigación de óxido nitroso (N2O).',
                'parent_id'=>'724',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Promover prácticas agroecológicas y agricultura de conservación.',
                'parent_id'=>'725',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Sustituir fertilizantes y aplicar bioinsumos.',
                'parent_id'=>'725',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Disminuir quemas agrícolas.',
                'parent_id'=>'725',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Impulsar sistemas agrosilvopastoriles.',
                'parent_id'=>'725',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Capturar y manejar biogás de residuos pecuarios, tales como sistemas de composta, de biodigestión y de tratamiento diario para evitar la generación de gas metano.',
                'parent_id'=>'725',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'Mejorar la gestión integral de los residuos sólidos municipales.',
                'parent_id'=>'726',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Mejorar el tratamiento de aguas residuales tanto municipales como industriales.',
                'parent_id'=>'726',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Promover actividades relacionadas con el mejoramiento de la disposición final, reaprovechamiento, reciclaje, compostaje y biodigestión de residuos sólidos y líquidos.',
                'parent_id'=>'726',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Avanzar en la captura y aprovechamiento del biogás, tanto de los rellenos sanitarios como de las plantas de tratamiento de aguas residuales.',
                'parent_id'=>'726',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Estrategia Nacional de Economía Circular (ENEC): Mejorar el manejo de residuos alimenticios, del reciclaje de electrónicos y residuos de la construcción, teniendo en cuenta su alto potencial de mitigación si se considera el análisis de ciclo de vida.',
                'parent_id'=>'726',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Soluciones Basadas en la Naturaleza (SBN): Conservar y recuperar ecosistemas, capital biocultural, bosques y biodiversidad al tiempo que se captura carbono.',
                'parent_id'=>'727',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Reducir deforestación y degradación forestal ENAREDD+): Lograr una meta de tasa neta de cero deforestación con fines de mitigación y captura de carbono.',
                'parent_id'=>'727',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Áreas Naturales Protegidas (ANPs). Creación, conservación y manejo de ANP que permitán al tiempo mitigar y capturar carbono.',
                'parent_id'=>'727',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Programa Sembrando Vida (PSV): Fomentar la agroforestería, la milpa intercalada con árboles frutales y acciones agroecológicas, que traigan consigo la reducción de emisiones de GEI.',
                'parent_id'=>'727',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'Estrategia Nacional de Carbono Azul (ENCA): Proteger, conservar y manejar manglares, pastos marinos y marismas, para capturar carbono.',
                'parent_id'=>'727',
                'politica_publica_id'=>7,
                'politica_publica_nivel_id'=>3,
            ],
        ]);

    }
}
