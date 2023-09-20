<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PoliticaPublicaElemento;

class PeccSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('politicas_publicas_elementos')->insert([
            [
                'name' => 'Objetivo_1. Disminuir la vulnerabilidad al cambio climático de la población, los ecosistemas y su biodiversidad, así como de los sistemas productivos y de la infraestructura estratégica mediante el impulso y fortalecimiento de los procesos de adaptación y el aumento de la resiliencia.',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => 'Objetivo_2. Reducir las emisiones de gases y compuestos de efecto invernadero a fin de generar un desarrollo con bienestar social, bajo en carbono y que proteja la capa de ozono, basado en el mejor conocimiento científico disponible.',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 1
            ],
            [
                'name' => 'Objetivo_3. Impulsar acciones y políticas sinérgicas entre mitigación y adaptación, que atiendan la crisis climática, priorizando la generación de cobeneficios ambientales, sociales y económicos.',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 1,
            ],
            [
                'name' => 'Objetivo_4. Fortalecer los mecanismos de coordinación, financiamiento y medios de implementación entre órdenes de gobierno para la instrumentación de la política de cambio climático, priorizando la co-creación de capacidades e inclusión de los distintos sectores de la sociedad, con enfoque de derechos humanos.',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 1,
            ],
        ]);
        DB::table('politicas_publicas_elementos')->insert([
            [
                'name' => 'Estrategia_1.1.- Fortalecer la resiliencia y capacidades adaptativas de la población ante los impactos negativos del cambio climático, considerando un enfoque de prevención, atención, particularmente de las comunidades más vulnerables.',
                'parent_id' => '451',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_1.2.- Promover la gestión integrada de los recursos hídricos del país considerando aspectos de cantidad y calidad de agua que aseguren el acceso equitativo de la población y sectores productivos, así como el mantenimiento de los servicios ambientales.',
                'parent_id' => '451',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_1.3.- Promover esquemas y acciones de manejo, conservación y restauración de la biodiversidad, ecosistemas terrestres, de agua dulce, costeros y marinos para fortalecer su conectividad y provisión de servicios ambientales potenciando la implementación de soluciones basadas en la naturaleza y comunidades.',
                'parent_id' => '451',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_1.4.- Instrumentar acciones en los sectores productivos, considerando todas las fases de la cadena productiva para reducir los riesgos asociados a la variabilidad y el cambio climático.',
                'parent_id' => '451',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_1.5.- Proteger la infraestructura estratégica del país mediante la integración de criterios de adaptación en las fases de diseño, construcción, reconstrucción, mantenimiento y operación, para fortalecer su resistencia ante impactos del cambio climático.',
                'parent_id' => '451',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_1.6.- Generar e integrar conocimiento científico, así como diseñar metodologías y herramientas que apoyen la toma de decisiones en materia de adaptación al cambio climático.',
                'parent_id' => '451',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_1.7.- Desarrollar y fortalecer las capacidades adaptativas para la atención del cambio climático en los tres órdenes de gobierno y los sectores de la sociedad civil, considerando los saberes tradicionales, las capacidades locales y el mejor conocimiento científico disponible.',
                'parent_id' => '451',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_2.1.- Impulsar la transición energética justa con énfasis en fuentes limpias, bajo un enfoque de derechos humanos para promover su generación y uso sustentable e incluyente.',
                'parent_id' => '452',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_2.2.- Impulsar políticas y acciones de movilidad sostenible con el fin de promover transportes eficientes, de bajo carbono, y asequibles para la población.',
                'parent_id' => '452',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_2.3.- Promover el uso eficiente de recursos en los sectores residencial y comercial que contribuya al desarrollo de asentamientos humanos inclusivos y resilientes al clima.',
                'parent_id' => '452',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_2.4.- Impulsar acciones para mitigar las emisiones generadas por las actividades de exploración y extracción de petróleo y gas, así como en el transporte, almacenamiento y distribución de hidrocarburos y sus derivados.',
                'parent_id' => '452',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_2.5.- Promover la aplicación de tecnologías de punta y de procesos eficientes y limpios en la industria, a fin de fomentar el desarrollo competitivo, sustentable y bajo en carbono.',
                'parent_id' => '452',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_2.6.- Promover, en coordinación con otros órdenes de gobierno, la prevención y gestión integral de los residuos sólidos urbanos bajo un enfoque de territorialidad y valorización.',
                'parent_id' => '452',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_2.7.- Desarrollar prácticas agroecológicas, ecotecnológicas, de ganadería regenerativa forestal, agroforestal y pecuaria, de manejo pesquero, sostenibles y resilientes al clima.',
                'parent_id' => '452',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_3.1.- Impulsar acciones para incrementar, preservar y restaurar las masas forestales y los ecosistemas naturales terrestres y acuáticos del país para contribuir a la adaptación al cambio climático y a la captura de carbono.',
                'parent_id' => '453',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_3.2.- Fomentar las prácticas agroecológicas, acuícolas y pesqueras bajo el enfoque de soluciones basadas en la naturaleza como medio para fomentar la inclusión social, el rescate de prácticas tradicionales de producción, así como el aumento de la capacidad adaptativa de la población.',
                'parent_id' => '453',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Estrategia_3.3.- Incorporar un enfoque integral de calidad del aire y cambio climático para el desarrollo de políticas y acciones que potencien beneficios en la salud pública y ambiental.',
                'parent_id' => '453',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' =>'Estrategia_4.1.- Reforzar las instituciones y los mecanismos de coordinación mandatados por la Ley General de Cambio Climático, para asegurar la participación ciudadana en la toma de decisiones.',
                'parent_id' => '454',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' =>'Estrategia_4.2.- Impulsar y orientar el presupuesto y el financiamiento hacia el logro de los objetivos y metas nacionales para la mitigación y adaptación al cambio climático.',
                'parent_id' => '454',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' =>'Estrategia_4.3.- Diseñar e implementar mecanismos que impulsen el fomento de las capacidades nacionales y la transversalidad para afrontar el cambio climático',
                'parent_id' => '454',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' =>'Estrategia_4.4.- Potenciar un marco de transparencia que permita asegurar la trazabilidad de la acción climática, su evaluación y verificación.',
                'parent_id' => '454',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' =>'Estrategia_4.5.- Generar e integrar conocimiento científico, así como diseñar metodologías y herramientas que apoyen la toma de decisiones en materia de mitigación del cambio climático.',
                'parent_id' => '454',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' =>'Estrategia_4.6.- Fomentar la difusión, divulgación y educación ambiental para generar una cultura climática en el país y ciudadanizar la política pública frente al cambio climático.',
                'parent_id' => '454',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' =>'Estrategia_4.7.- Potenciar y orientar los apoyos y cooperación para contribuir al fortalecimiento y co-creación de capacidades, incrementar la transversalidad de la política climática en los tres niveles de gobierno, promover un desarrollo inclusivo y aumentar la resiliencia de la población ante el cambio climático.',
                'parent_id' => '454',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 2,
            ],
        ]);
        DB::table('politicas_publicas_elementos')->insert([
            [
                'name'=> '1.1.1 Formular y publicar la Política Nacional de Adaptación (NAP, por sus siglas en inglés) en el marco del Sistema Nacional de Cambio Climático.',
                'parent_id' => '455',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=> '1.1.2 Promover la gestión integral del riesgo en la planeación del ordenamiento territorial y desarrollo urbano para la prevención y adaptación del territorio y sus habitantes ante fenómenos perturbadores.',
                'parent_id' => '455',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=> '1.1.3 Diseñar e implementar protocolos de prevención y atención de las enfermedades emergentes y exacerbadas por el cambio climático, en el marco de los sistemas de alerta temprana con información epidemiológica, así como la divulgación e implementación de los protocolos de acción ante éstas.',
                'parent_id' => '455',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=> '1.1.4 Elaborar normas, lineamientos, criterios, guías de cambio climático en instrumentos de planeación territorial para fortalecer la gestión integral de riesgos de desastres en los asentamientos humanos y el territorio.',
                'parent_id' => '455',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=> '1.1.5 Emitir lineamientos, supervisar y coordinar el desarrollo y actualización de Atlas de Riesgos municipales, considerando escenarios de cambio climático de manera prioritaria en los municipios considerados con alta vulnerabilidad ante el cambio climático.',
                'parent_id' => '455',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=> '1.1.6 Coordinar y promover el establecimiento de un sistema de alerta temprana ante la ocurrencia de fenómenos hidrometeorológicos extremos, así como el fortalecimiento de protocolos de prevención y atención para proteger a la población, la infraestructura estratégica y los sistemas productivos.',
                'parent_id' => '455',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=> '1.1.7 Mejorar los sistemas de alerta temprana y las acciones de prevención y mitigación ante fenómenos hidrometeorológicos.',
                'parent_id' => '455',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=> '1.1.8 Fortalecer la coordinación entre órdenes de gobierno y sectores para atender emergencias, considerando las necesidades diferenciadas de la población a través del Plan Nacional de Operación.',
                'parent_id' => '455',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=> '1.1.9 Apoyar la reducción de vulnerabilidad social relacionada con cambio climático en comunidades marginadas.',
                'parent_id' => '455',
                'politica_publica_id' => 6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=>'1.2.1 Desarrollar estrategias para contar con caudal ecológico en ríos y humedales para fortalecer el ciclo hidrológico.',
                'parent_id' => '456',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=>'1.2.2 Fomentar el establecimiento de sistemas de captación, almacenamiento y cosecha de agua y de prácticas que incrementen su disponibilidad privilegiando zonas de alta vulnerabilidad hídrica.',
                'parent_id' => '456',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=>'1.2.3 Delimitar cauces y cuerpos de agua de propiedad nacional y sus zonas federales.',
                'parent_id' => '456',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=>'1.2.4 Reconstruir la infraestructura hidráulica afectada por fenómenos hidrometeorológicos extremos.',
                'parent_id' => '456',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=>'1.2.5 Identificar los requerimientos de infraestructura de agua potable, drenaje y tratamiento de aguas residuales en los centros de población.',
                'parent_id' => '456',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name'=>'1.2.6 Revisar, y en su caso concluir, los proyectos de agua potable y saneamiento en curso.',
                'parent_id' => '456',
                'politica_publica_id' =>6,
                'politica_publica_nivel_id' => 3,
            ],
        ]);
    }
}
