<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PoliticaPublicaElemento;

class PeccSeeder extends Seeder
{
    /**
     * PEEC Seeder
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
            [
                'name'=>'1.3.1 Incorporar criterios de cambio climático en la Estrategia Nacional para la Conservación y el Uso Sostenible de Polinizadores (ENCUSP).',
                'parent_id'=>'457',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'1.3.2 Evaluar la exposición de las especies y ecosistemas ante el cambio climático.',
                'parent_id'=>'457',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'1.3.3 Compilar la evidencia aportada por la literatura científica sobre el impacto negativo del cambio climático en la biodiversidad a fin de reducir la vulnerabilidad de especies amenazadas.',
                'parent_id'=>'457',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'1.3.4 Promover mecanismos de compensación en el sector turístico para el desarrollo de medidas de Adaptación basadas en Ecosistemas.',
                'parent_id'=>'457',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'1.3.5 Impulsar la conservación de especies prioritarias y de interés y su hábitat.',
                'parent_id'=>'457',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'1.3.6 Impulsar medidas de adaptación basadas en ecosistemas, su biodiversidad y los servicios ambientales que proporcionan a la sociedad, a fin de fortalecer la resiliencia de las poblaciones y el uso sustentable de recursos naturales.',
                'parent_id'=>'457',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'1.3.7 Incorporar criterios de silvicultura adaptativa en las acciones de manejo forestal.',
                'parent_id'=>'457',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'1.3.8 Establecer refugios pesqueros que apoyen la sostenibilidad de la producción y equilibrio del ecosistema, considerando variables de cambio climático en su manejo.',
                'parent_id'=>'457',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'1.3.9 Coordinar y consolidar el programa de restauración de arrecifes de coral integrando consideraciones de cambio climático.',
                'parent_id'=>'457',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name' =>'1.4.1 Fomentar el cumplimiento de las recomendaciones derivadas de los estudios de vulnerabilidad al cambio climático en destinos turísticos a fin de disminuir los riesgos asociados.',
                'parent_id' => '458',
                'politica_publica_id'=>6,
                'polititcas_publicas_nivel'=>3
            ],
            [
                'name' =>'1.4.2 Supervisar que se mantenga actualizado, de manera continua, el Atlas Nacional de Riesgos integrando análisis de escenarios de cambio climático para sistemas y sectores prioritarios.',
                'parent_id' => '458',
                'politica_publica_id'=>6,
                'polititcas_publicas_nivel'=>3
            ],
            [
                'name' =>'1.4.3 Fomentar proyectos y emprendimientos productivos sustentables que fortalezcan a las comunidades locales y disminuyan su vulnerabilidad en ANP y zonas de influencia.',
                'parent_id' => '458',
                'politica_publica_id'=>6,
                'polititcas_publicas_nivel'=>3
            ],
            [
                'name' =>'1.4.4 Impulsar acciones de restauración con fines productivos en ANP y zonas de influencia.',
                'parent_id' => '458',
                'politica_publica_id'=>6,
                'polititcas_publicas_nivel'=>3
            ],
            [
                'name'=>'1.5.1 Elaborar normas, lineamientos, criterios y/o guías con acciones dirigidas a la reducción de Gases de Efecto Invernadero (GEI)), para su incorporación e implementación en el diseño y rediseño de programas de ordenamiento territorial, urbano y metropolitano, para fortalecer la resiliencia en asentamientos humanos y el territorio.',
                'parent_id' => '459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'1.5.2 Desarrollar criterios de gestión de riesgos y de adaptación al cambio climático en el diseño, construcción, reconstrucción, rehabilitación y mantenimiento de infraestructura de transporte y comunicaciones.',
                'parent_id' => '459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'1.5.3 Actualizar el diagnóstico de vulnerabilidad actual y futura ante el cambio climático de la infraestructura estratégica del sector salud.',
                'parent_id' => '459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'1.5.4 Impulsar la gestión integral de riesgos a favor de la infraestructura pública hidráulica, urbana, de salud y educativa.',
                'parent_id' => '459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'1.5.5 Realizar el Diagnostico de Vulnerabilidad en el Sector Energético ante el Cambio Climático.',
                'parent_id' => '459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'1.5.6 Desarrollar y adaptar proyectos para la construcción, operación y mantenimiento de infraestructura en cauces, en particular en zonas de alta vulnerabilidad.',
                'parent_id' => '459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'1.5.7 Desarrollar instrumentos regulatorios para promover la construcción y el desarrollo urbano resiliente al clima.',
                'parent_id' => '459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'1.5.8 Generar e implementar herramientas y estrategias de fomento, creación de capacidades y difusión, que promueven el desarrollo urbano y la construcción resiliente al clima.',
                'parent_id' => '459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'1.5.9 Identificar la vulnerabilidad de la infraestructura estratégica del sector hidrocarburos.',
                'parent_id' => '459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'1.5.10 Construir y/o rehabilitar proyectos de infraestructura urbana, equipamiento urbano, espacio público, movilidad o conectividad que contribuyan a la mitigación y/o adaptación al cambio climático.',
                'parent_id' => '459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'1.6.1 Diseñar herramientas que apoyen el desarrollo de capacidades y la toma de decisiones en materia de adaptación en el sector agropecuario, acuícola-pesquero.',
                'parent_id' => '460',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'1.7.1 Fortalecer las capacidades técnicas del sector turístico para la conservación y uso sustentable de los recursos naturales a partir del diseño e implementación de medidas de Adaptación basada en Ecosistemas (AbE) que consideren la vulnerabilidad y capacidades locales.',
                'parent_id' => '461',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'1.7.2 Contribuir al fortalecimiento de capacidades en materia de adaptación al cambio climático privilegiando municipios con alta vulnerabilidad ante el cambio climático.',
                'parent_id' => '461',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'1.7.3 Impulsar la formación en capacidades adaptativas en municipios principalmente los más vulnerables al cambio climático, a través de gestionar la creación de una Red colaborativa en capacidades adaptativas con instituciones gubernamentales, educativas, organizaciones sociales y diversos sectores.',
                'parent_id' => '461',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'1.7.4 Desarrollar un programa de capacitación para el sector transportes sobre vulnerabilidad y adaptación al cambio climático e implementarlo mediante cursos/talleres regionales en los Centros SCT.',
                'parent_id' => '461',
                'politica_publica_id'=> 6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.1.1 Planificar la incorporación de energías limpias en la generación eléctrica, bajo condiciones de seguridad, calidad, continuidad y eficiencia; así como sostenibilidad económica del Sistema Eléctrico Nacional para alcanzar el 35% al año 2024.',
                'parent_id'=> '462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.1.2 Disminuir la emisión de GyCEI en el sector eléctrico mediante acciones y proyectos del Programa de Desarrollo del Sistema Eléctrico Nacional; y los establecidos en el Plan de Negocios de CFE, que cuenten con aprobación de su Consejo de Administración y recursos presupuestales con actualización anual.',
                'parent_id'=> '462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.1.3 Elevar el nivel de eficiencia y sustentabilidad en la producción y uso de las energías en el territorio nacional.',
                'parent_id'=> '462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.1.4 Planificar el desarrollo de las tecnologías críticas para la Electromovilidad.',
                'parent_id'=> '462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.1.5 Implementar el Proyecto Unidades Turbo Gas Aeroderivadas en Baja California Sur, en coordinación con la CFE.',
                'parent_id'=> '462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.1.6 Implementar el Programa de incremento de eficiencia en la distribución de energía eléctrica en las Redes Generales de Distribución 2021 - 2024.',
                'parent_id'=> '462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.1.7 Desarrollar el Proyecto piloto hogares solares en coordinación con CFE.',
                'parent_id'=> '462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.1.8 Incrementar productividad de generación a través de la construcción de central geotérmica (Proyecto CG Humero III Fase B de 25 MW)  en coordinación con la CFE.',
                'parent_id'=> '462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.1.9 Realizar el proyecto de Conversión a combustión dual (Gas Natural y Combustóleo) para  Generadores de Vapor de las Unidades 1 y 2 de la C. T. Guadalupe Victoria, en coordinación con la CFE.',
                'parent_id'=> '462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.1.10 Impulsar la colaboración de las instituciones de educación superior hacia un proyecto de transición energética de alcance nacional, que incluya el desarrollo e instalación de paneles solares en todos los planteles, el reciclaje de la basura orgánica y la instalación de sistemas de ahorro y el aprovechamiento de agua de lluvia.',
                'parent_id'=> '462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.2.1 Elaborar y publicar la Estrategia Nacional de Movilidad Eléctrica para impulsar y posicionar a nivel nacional la movilidad eléctrica como una alternativa viable y sostenible, con el fin de promover la mitigación de GEI y carbono negro en el sector transporte.',
                'parent_id'=>'463',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.2.2 Promover la inclusión de normas lineamientos, criterios y/o guías con acciones dirigidas a la reducción de Gases de Efecto Invernadero (GEI) en los programas de ordenamiento territorial, urbano y metropolitano, para el fortalecimiento de la resiliencia en los asentamientos humanos y el territorio.',
                'parent_id'=>'463',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.2.3 Fomentar, en coordinación con los estados y municipios, la construcción de sistemas de transporte colectivo.',
                'parent_id'=>'463',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.2.4 Impulsar e implementar proyectos de infraestructura ferroviaria para el transporte de pasajeros.',
                'parent_id'=>'463',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.2.5 Modificar la norma sobre emisiones de bióxido de carbono aplicable a vehículos automotores nuevos de peso bruto vehicular de hasta 3 857 kilogramos (NOM-163)',
                'parent_id'=>'463',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.2.6 Promover proyectos de transporte público y de carga local de bajo carbono (incluyendo la movilidad eléctrica)',
                'parent_id'=>'463',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.2.7 Reducir las emisiones de CO2 y de contaminantes criterio mediante la operación del programa Transporte Limpio.',
                'parent_id'=>'463',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.2.8 Participar en grupos de trabajo para la instrumentación en zonas metropolitanas de proyectos de movilidad sostenible (incluyendo la eléctrica de conformidad con la Estrategia Nacional de Movilidad Eléctrica y planes para disminuir huella de carbono de viajes al trabajo).',
                'parent_id'=>'463',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.3.1 Promover el uso de ecotecnologías que ayuden al ahorro de energía en las viviendas intervenidas por la CONAVI, que a su vez permita la disminución de emisiones de Gases de Efecto Invernadero (GEI).',
                'parent_id'=>'464',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.3.2 Promover el uso de ecotecnologías que ayuden al ahorro de agua y energía en las viviendas intervenidas por la CONAVI, que a su vez permitan la disminución de emisiones de Gases de Efecto Invernadero (GEI).',
                'parent_id'=>'464',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.3.3 Fomentar acciones del sector turístico enfocadas a promover la eficiencia energética en establecimientos hoteleros',
                'parent_id'=>'464',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.4.1 Disminuir, de acuerdo con las capacidades y recursos, la emisión de Gases y Compuestos de Efecto Invernadero mediante proyectos previamente establecidos en el Plan de Negocios de Pemex, que cuenten con aprobación del Consejo de Administración y recursos presupuestales, con actualización anual.',
                'parent_id'=>'465',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.4.2 Reportar el cumplimiento de las acciones comprometidas por los Regulados en su Programa para la Prevención y Control Integral de las Emisiones de Metano (PPCIEM) y Reporte Anual de Cumplimiento (RAC) (DACG Metano).',
                'parent_id'=>'465',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.4.3 Establecer en la regulación aplicable al Sector Hidrocarburos los requisitos y especificaciones en materia de SISOPA a partir de la adopción de las mejores prácticas nacionales e internacionales que contribuyan a la mitigación y adaptación del cambio climático.',
                'parent_id'=>'465',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.5.1 Optimizar el uso de la infraestructura productiva de las Empresas Productivas del Estado, mediante acciones para aprovechar todos sus procesos energéticos, el uso de nuevos materiales y la automatización de procesos productivos; así como sus capacidades logísticas y comerciales.',
                'parent_id'=>'466',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'2.5.2 Implementar el Programa de Prueba y, a su término, la Fase Operativa del Sistema de Comercio de Emisiones, considerando los mecanismos de vigilancia para el cumplimiento normativo.',
                'parent_id'=>'466',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'2.5.3 Promover la mitigación de emisiones generadas por las instalaciones que pertenecen a los sectores económicos reguladas por el SCE, mediante actividades con el menor costo posible, incluyendo aquellas en los mecanismos flexibles de cumplimiento.',
                'parent_id'=>'466',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'2.5.4 Controlar el uso y las emisiones de Gases-F con alto potencial de calentamiento global, mediante acciones coordinadas entre el Gobierno de México, la Industria y los Organismos de financiamiento internacionales.',
                'parent_id'=>'466',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'2.5.5 Fortalecer los sistemas de Monitoreo, Reporte y Verificación de emisiones de GEI del Registro Nacional de Emisiones y del Sistema de Comercio de Emisiones.',
                'parent_id'=>'466',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'2.5.6 Desarrollar los estudios relativos a las tecnologías de captura, uso y almacenamiento geológico de CO2 en México que permitan evaluar el potencial de mitigación de emisiones de CO2, identificar sitios para la implementación de proyectos piloto e identificar los instrumentos normativos necesarios para su ejecución.',
                'parent_id'=>'466',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'2.6.1 Promover la mitigación de las emisiones de gas metano y CO2 asociadas al aprovechamiento energético de residuos no reciclables y/o reutilizables y con el valor calórico necesario en infraestructura existente que cuente con las condiciones de eficiencia para ello.',
                'parent_id'=>'467',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.6.2 Promover el desarrollo de infraestructura para la captura y extracción de lixiviados y sistemas de control de biogás en rellenos sanitarios existentes.',
                'parent_id'=>'467',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.6.3 Promover Bancos de Alimentos dentro del contexto de la economía circular, como acción para la prevención de la fracción orgánica de los residuos y sus respectivas emisiones.',
                'parent_id'=>'467',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.6.4 Promover la rehabilitación de plantas de tratamiento de aguas residuales municipales sin operar.',
                'parent_id'=>'467',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.6.5 Diseñar y publicar la Estrategia Nacional de Economía Circular para promover la implementación de patrones de producción y consumo sustentables, así como el uso eficiente de los subproductos con valor comercial en diferentes sectores productivos y económicos del país, con el objetivo de reducir emisiones de GEI en el sector.',
                'parent_id'=>'467',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.7.1 Reducir las quemas agropecuarias a través de la adopción prácticas sustentables.',
                'parent_id'=>'468',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.7.2 Promover prácticas agronómicas sustentables orientadas a la captura de Carbono en suelos.',
                'parent_id'=>'468',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.7.3 Contribuir a la recuperación de ecosistemas a través de la promoción de sistemas silvopastoriles.',
                'parent_id'=>'468',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.7.4 Incorporar criterios de cambio climático en la implementación del programa "Sembrando vida".',
                'parent_id'=>'468',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.7.5 Fomentar el establecimiento y desarrollo de Plantaciones Forestales Comerciales competitivas de especies estratégicas en regiones prioritarias, que contribuyan al crecimiento del empleo en el medio rural.',
                'parent_id'=>'468',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'2.7.6 Impulsar el manejo forestal comunitario como medida de mitigación al cambio climático al tiempo que se incrementan las capacidades de las comunidades forestales.',
                'parent_id'=>'468',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name' =>'3.1.1 Promover el desarrollo de una estrategia que fortalezca la restauración, manejo y conservación de los ecosistemas que albergan el carbono azul.',
                'parent_id'=>'469',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name' =>'3.1.2 Mantener e incrementar la superficie decretada como ANP a nivel federal.',
                'parent_id'=>'469',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name' =>'3.1.3 Reducir la tasa de deforestación en un 30% al 2024 respecto al valor promedio anual en concordancia con el Programa Nacional Forestal.',
                'parent_id'=>'469',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name' =>'3.1.4 Contribuir a evitar el incremento de la superficie agrícola y a promover la conservación y restauración de agroecosistemas, suelos y cuencas.',
                'parent_id'=>'469',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name' =>'3.1.5 Incrementar la superficie protegida a través de Áreas Destinadas Voluntariamente a la Conservación.',
                'parent_id'=>'469',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name' =>'3.1.6 Promover la restauración de ecosistemas terrestres, insulares, marinos y de agua dulce, considerando el contexto del cambio climático.',
                'parent_id'=>'469',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name' =>'3.1.7 Promover la conservación y restauración de los ecosistemas que contribuya a la permanencia y aumento de los sumideros terrestres de carbono.',
                'parent_id'=>'469',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name' =>'3.1.8 Implementar la Estrategia Nacional de Reducción de Emisiones por Deforestación y Degradación mediante la gestión territorial bajo el enfoque de desarrollo rural bajo en carbono y en coordinación con los integrantes del Grupo de Trabajo REDD+',
                'parent_id'=>'469',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name' =>'3.1.9 Promover y ejecutar acciones para consolidar una estrategia integral de prevención y atención a los arribazones de sargazo en costas mexicanas desde un enfoque multifactorial e interdisciplinario, que integre el componente de cambio climático.',
                'parent_id'=>'469',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'3.2.1 Promover el acceso a esquemas de compensación por emisiones evitadas en sistemas agroforestales de comunidades, ejidos y organizaciones económicas de productores del sector.',
                'parent_id'=>'470',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'3.2.2 Promover la innovación, investigación e intercambio de conocimientos en prácticas de producción agropecuaria, acuícola y pesquera con soluciones basadas en la naturaleza.',
                'parent_id'=>'470',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'3.2.3 Impulsar la diversificación del aprovechamiento de los servicios ecosistémicos con base en la aptitud de territorio y la vocación del suelo a través de su inclusión en los programas de ordenamiento ecológico, territorial y de desarrollo urbano, así como el turístico y agrario.',
                'parent_id'=>'470',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'3.2.4 Promover de forma coordinada instrumentos para el uso y aprovechamiento de los recursos genéticos para la alimentación y la agricultura, privilegiando especies prioritarias para la seguridad alimentaria en un contexto de cambio climático.',
                'parent_id'=>'470',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'3.3.1 Promover y apoyar técnicamente a los gobiernos locales en la elaboración y aplicación de los ProAire y cuantificar su contribución a la mitigación del cambio climático, correspondiente a la reducción de CCVC: PM 2.5, Óxidos de nitrógeno y Compuestos orgánicos volátiles.',
                'parent_id'=>'471',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'3.3.2 Diseñar mecanismos y herramientas de planeación y gestión en ciudades y zonas metropolitanas con enfoque de cambio climático y cobeneficios para hacerlas resilientes.',
                'parent_id'=>'471',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'3.3.3 Promover con las entidades estatales y municipales la integración o armonización de los Programas de Ordenamiento Territorial y Ecológico y los Programas de Acción de Desarrollo Urbano.',
                'parent_id'=>'471',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'3.3.4 Generar información técnica para apoyar el diseño y actualización de las Normas Oficiales Mexicanas (NOM) y estándares en materia de contaminación ambiental y cambio climático.',
                'parent_id'=>'471',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'3.3.5 Desarrollar y promover el uso de herramientas y metodologías para la estimación integral de cobeneficios climáticos, ambientales, de salud y sociales en la evaluación acciones de mitigación de emisiones de contaminantes criterio, gases y compuestos de efecto invernadero.',
                'parent_id'=>'471',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'3.3.6 Verificar e impulsar el cumplimiento de la normativa en materia de estaciones de monitoreo de la calidad del aire.',
                'parent_id'=>'471',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3
            ],
            [
                'name'=>'4.1.1 Fortalecer la coordinación y vinculación entre los miembros del SINACC para que los instrumentos de política de cambio climático reflejen su aportación al cumplimiento de las metas nacionales, incorporando componentes de difusión.',
                'parent_id'=>'472',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.1.2 Promover la armonización de los instrumentos de planeación y políticas a escala nacional, estatal y municipal para el cumplimiento de la política nacional de cambio climático.',
                'parent_id'=>'472',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.1.3 Propiciar la inclusión de las acciones del sector privado en materia cambio climático para su cuantificación y aportación a las NDC.',
                'parent_id'=>'472',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.1.4 Realizar procesos de consulta vinculando a las áreas del sector ambiental responsables de ordenamiento territorial, gestión integral de riesgos y cambio climático, con organizaciones y grupos de mujeres que se encuentran trabajando en estos temas que permitan el diseño y fortalecimiento de políticas públicas.',
                'parent_id'=>'472',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.1.5 Fortalecer y actualizar el Sistema de Información sobre Cambio Climático.',
                'parent_id'=>'472',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.1.6 Potenciar los cobeneficios de la implementación conjunta de la Agenda de Desarrollo Sostenible y la política nacional de cambio climático.',
                'parent_id'=>'472',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.1.7 Formular recomendaciones que contribuyan a fomentar cobeneficios en materia de adaptación y mitigación del cambio climático para apoyar la toma de decisiones.',
                'parent_id'=>'472',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.1.8 Fortalecer y consolidar el trabajo conjunto entre la CIMARES y la CICC para el tema de cambio climático.',
                'parent_id'=>'472',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.2.1 Identificar, impulsar y orientar tanto el financiamiento como la cooperación internacional para el cambio climático en el sector ambiental federal, hacia el logro de los objetivos y metas nacionales e institucionales para la mitigación y adaptación',
                'parent_id'=>'473',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.2.2 Reforzar la estrategia ante riesgos públicos por fenómenos naturales perturbadores y cambio climático, al patrimonio y fuente de ingresos de las familias, como al patrimonio y finanzas públicos, con enfoque de gestión integral de riesgos y coordinación entre gobiernos estatales y municipales',
                'parent_id'=>'473',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.2.3 Medir el gasto operativo derivado de efectos adversos del cambio climático desglosado por sargazo, sequía, inundación, huracán, incendio, del sector bancario.',
                'parent_id'=>'473',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.2.4 Medir e incentivar el monto de financiamiento del sector bancario a inversión en generación de energía limpia',
                'parent_id'=>'473',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.2.5 Impulsar el financiamiento a empresas con proyectos sostenibles sobre energía renovable, edificación, vivienda, transporte, sectores agropecuario, forestal y pesquero, así como proyectos de infraestructura a fin de generar beneficios al medio ambiente',
                'parent_id'=>'473',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.2.6 Fortalecer los esquemas de pago por servicios ambientales y favorecer la participación de la iniciativa privada, los gobiernos locales y sociedad civil en el ámbito rural y urbano.',
                'parent_id'=>'473',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.2.7 Impulsar la adopción de salvaguardas ambientales, sociales y de gobernanza en el FONADIN con el objetivo de que incentiven la participación del sector privado en la inversión de proyectos de infraestructura sostenible',
                'parent_id'=>'473',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.2.8 Incrementar la calidad de evaluación en los estudios de los programas y proyectos de inversión a través de apoyo técnico de la banca de desarrollo con énfasis en proyectos que contengan un enfoque de mitigación y adaptación al cambio climático',
                'parent_id'=>'473',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.2.9 Impulsar el financiamiento de acciones climáticas a través de proyectos transformacionales desarrollados por actores sociales, que son necesarios en el territorio nacional, para reducir la vulnerabilidad climática y las emisiones de gases de efecto invernadero.',
                'parent_id'=>'473',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.3.1 Incluir en las actividades de capacitación el programa "Sembrando vida" aspectos relacionados con el cambio climático.',
                'parent_id'=>'474',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.3.2 Promover investigaciones sobre el impacto de las condiciones ambientales y climáticas en la salud de la población, para reducir la exposición a factores de riesgo, promover medidas que favorezcan bienestar y optimizar recursos en la atención médica.',
                'parent_id'=>'474',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.3.3 Actualizar e implementar el programa de capacitación al personal de instituciones del sector salud ante las amenazas derivadas del cambio climático.',
                'parent_id'=>'474',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.3.4 Incentivar la creación de nuevos productos y vehículos de aseguramiento para llegar a diferentes sectores de la población, mediante canales de distribución alternativos y productos innovadores, así como el uso de herramientas tecnológicas a través de empresas de tecnología financiera.',
                'parent_id'=>'474',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.3.5 Desarrollar proyectos de investigación aplicada en mitigación y adaptación en infraestructura de transporte y comunicaciones.',
                'parent_id'=>'474',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.3.6 Desarrollar de manera periódica actividades de sensibilización del Sector Hidrocarburos en México a los efectos del cambio climático, así como a las acciones de mitigación y adaptación vigentes.',
                'parent_id'=>'474',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.3.7 Fomentar el fortalecimiento de capacidades subnacionales y asegurar la participación efectiva de todos los actores que forman parte del SINACC.',
                'parent_id'=>'474',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.3.8 Fortalecer el desarrollo de capacidades de los propietarios y poseedores de los recursos forestales, así como prestadores y asesores de servicios técnicos para la incorporación de medidas al cambio climático basadas en comunidades y ecosistemas.',
                'parent_id'=>'474',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.4.1 Elaborar y publicar el informe anual de la situación general del país en materia de cambio climático.',
                'parent_id'=>'475',
                'politica_publica_id'=>6,
                'politicas_publicas_niveles_id'=>3,
            ],
            [
                'name'=>'4.4.2 Integrar y difundir en la página país (Artículo 107 LGCC), reportes nacionales derivados de los compromisos de México ante la Convención Marco de las Naciones Unidas sobre el Cambio Climático.',
                'parent_id'=>'475',
                'politica_publica_id'=>6,
                'politicas_publicas_niveles_id'=>3,
            ],
            [
                'name'=>'4.4.3 Generar mecanismos que aseguren la transparencia del quehacer climático en los tres órdenes de gobierno.',
                'parent_id'=>'475',
                'politica_publica_id'=>6,
                'politicas_publicas_niveles_id'=>3,
            ],
            [
                'name'=>'4.4.4 Fortalecer la política nacional de cambio climático mediante la emisión de recomendaciones, así como las evaluaciones que en dicha manera realizan las dependencias y entidades de la Administración Pública Federal, de las entidades federativas y municipios.',
                'parent_id'=>'475',
                'politica_publica_id'=>6,
                'politicas_publicas_niveles_id'=>3,
            ],
            [
                'name'=>'4.4.5 Apoyar el cumplimiento de los compromisos internacionales de México mediante la integración de los Informes Bienales de Actualización y los de Transparencia para su presentación y evaluación ante la Convención Marco de Naciones Unidas sobre el Cambio Climático.',
                'parent_id'=>'475',
                'politica_publica_id'=>6,
                'politicas_publicas_niveles_id'=>3,
            ],
            [
                'name'=>'4.4.6 Gestionar y administrar la página de país en materia de cambio climático, así como el desarrollo de su información, promoviendo la socialización, difusión y fortalecimiento de capacidades en el marco del SINACC y con los diferentes sectores de la sociedad.',
                'parent_id'=>'475',
                'politica_publica_id'=>6,
                'politicas_publicas_niveles_id'=>3,
            ],
            [
                'name'=>'4.4.7 Generar un Sistema de información Agroclimático y de Acuacultura.',
                'parent_id'=>'475',
                'politica_publica_id'=>6,
                'politicas_publicas_niveles_id'=>3,
            ],
            [
                'name'=>'4.4.8 Diseñar, elaborar e integrar indicadores relacionados con el cambio climático que apoyen al monitoreo y evaluación de resultados en materia de cambio climático a nivel nacional.',
                'parent_id'=>'475',
                'politica_publica_id'=>6,
                'politicas_publicas_niveles_id'=>3,
            ],
            [
                'name'=>'4.5.1 Promover el desarrollo de ciencia, tecnología e ingeniería necesarios para la transición energética.',
                'parent_id'=>'476',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.5.2 Mejorar el conocimiento de manera continua sobre las emisiones y tendencias de los GYCEI en México para la toma de decisiones de actores públicos, privados y sociales mediante la actualización del Inventario Nacional de Emisiones de Gases y Compuestos de Efecto Invernadero.',
                'parent_id'=>'476',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.5.3 Brindar apoyo técnico a los integrantes de la Comisión Intersecretarial de Cambio Climático para la cuantificación de la mitigación asociada al PECC y de sus indicadores, así como de la NDC.',
                'parent_id'=>'476',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.5.4 Orientar a los regulados para que consideren acciones de mitigación y adaptación al cambio climático, para el desarrollo de proyectos del sector hidrocarburos, mediante criterios establecidos en guías para la elaboración de Manifestaciones de Impacto Ambiental.',
                'parent_id'=>'476',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.5.5 Implementar una estrategia de capacitación para la gestión ambiental escolar y de comunidades educativas en temas de energía, residuos y agua desde un enfoque de combate al cambio climático.',
                'parent_id'=>'476',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.5.6 Compilar, sistematizar y presentar la información técnica del sector hidrocarburos en materia de seguridad industrial, seguridad operativa y protección al medio ambiente.',
                'parent_id'=>'476',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.5.7 Determinar de manera articulada necesidades y problemáticas prioritarias para impulsar proyectos que consideren conocimiento científico, saberes y experiencias de las comunidades y los sectores de la sociedad, y que propongan soluciones que incidan en la adaptación y mitigación del cambio climático en las distintas regiones del país.',
                'parent_id'=>'476',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.6.1 Generar y fortalecer capacidades técnicas y científicas para la adaptación y mitigación en los tres órdenes de gobierno.',
                'parent_id'=>'477',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.6.2 Generar criterios que ayuden a la planificación de proyectos de inversión inmobiliaria turística adaptados al cambio climático.',
                'parent_id'=>'477',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.6.3 Promover la inclusión de un enfoque integral sobre cambio climático en la educación ambiental para los diferentes niveles educativos del Sistema Educativo Nacional.',
                'parent_id'=>'477',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.6.4 Desarrollar campañas de difusión y sensibilización con contenidos generales y específicos sobre cambio climático, con énfasis en los conceptos de resiliencia, mitigación y adaptación con el fin de contribuir y fortalecer la conciencia social y brindar herramientas para enfrentar estos retos.',
                'parent_id'=>'477',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.6.5 Fortalecer y promover los espacios de comunicación y participación con los regulados o sociedad civil, referentes a los aspectos incluidos en los instrumentos regulatorios y que se relacionen con temas de mitigación y adaptación al cambio climático.',
                'parent_id'=>'477',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.6.6 Difundir y comunicar el conocimiento y contribuir a la educación y concientización de la población de forma incluyente en materia de cambio climático, para fortalecer la conciencia social, el desarrollo de una cultura climática.',
                'parent_id'=>'477',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.6.7 Incluir criterios de atención diferenciada y género en la política de cambio climático para que pueblos y comunidades indígenas, mujeres y jóvenes participen, contribuyan y accedan a los procesos de adaptación y mitigación en igualdad de condiciones y derechos.',
                'parent_id'=>'477',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.6.8 Fortalecer el sistema y las acciones de información de salvaguardas sociales y ambientales en la implementación de las acciones en el sector forestal.',
                'parent_id'=>'477',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.6.9 Promover en las instituciones de todos los subsistemas de educación superior el impulso de una oferta académica centrada en la formación de profesionistas en carreras clave para frenar el cambio climático.',
                'parent_id'=>'477',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.7.1 Mantener y fortalecer el liderazgo global de México en la promoción de una política climática multilateral que contribuya a la acción climática ambiciosa con enfoque social, así como al fortalecimiento del régimen climático internacional.',
                'parent_id'=>'478',
                'poliiticas_publicas_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.7.2  Implementar iniciativas de cooperación regional, bilateral, triangular y multilateral de intercambio de experiencias y mejores prácticas a través proyectos de oferta y recepción de cooperación. Propuesta 2 de marzo 2021.',
                'parent_id'=>'478',
                'poliiticas_publicas_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.7.3 Fortalecer el régimen climático en materia de adaptación por medio de la propuesta o adhesión a declaratorias, resoluciones o iniciativas multilaterales en materia de adaptación, resiliencia y soluciones basadas en la naturaleza.',
                'parent_id'=>'478',
                'poliiticas_publicas_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.7.4 Fomentar la participación de organizaciones de la sociedad civil en foros sobre cambio climático en el ámbito multilateral.',
                'parent_id'=>'478',
                'poliiticas_publicas_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.7.5 Desarrollar actividades de cooperación nacional e internacional para actualizar las mejores prácticas en materia de mitigación y adaptación al cambio climático en el Sector Hidrocarburos.',
                'parent_id'=>'478',
                'poliiticas_publicas_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.7.6 Generar mecanismos y metodologías para transversalizar el enfoque de género en los instrumentos de política pública nacionales y estatales sobre cambio climático, a fin de coadyuvar en el cumplimiento de compromisos nacionales e internacionales en la materia.',
                'parent_id'=>'478',
                'poliiticas_publicas_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.7.7 Impulsar el desarrollo de lineamientos para implementar acciones de cambio climático, para fortalecer los Programas Municipales de Desarrollo Urbano, Programas de Ordenamiento Ecológico Local, Programas de Ordenamiento Territorial y demás instrumentos de planeación territorial y construcción.',
                'parent_id'=>'478',
                'poliiticas_publicas_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.7.8 Incorporar criterios ecológicos para la adaptación y mitigación del cambio climático en los programas de ordenamiento ecológico, considerando enfoque de género.',
                'parent_id'=>'478',
                'poliiticas_publicas_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.7.9 Impulsar la incorporación de criterios de adaptación y mitigación al cambio climático en planes, programas y políticas turísticas con la participación de los tres órdenes de gobierno y organismos nacionales e internacionales.',
                'parent_id'=>'478',
                'poliiticas_publicas_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
            [
                'name'=>'4.7.10 Impulsar actividades de cooperación internacional y nacional para actualizar mejores prácticas de mitigación y adaptación al cambio climático en el sector industrial y de servicios.',
                'parent_id'=>'478',
                'poliiticas_publicas_id'=>6,
                'politica_publica_nivel_id'=>3,
            ],
        ]);
        DB::table('politicas_publicas_elementos')->insert([
            [
                'name'=>'Especifica',
                'parent_id'=>'455',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'456',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'457',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'458',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'460',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'461',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            //Tipo de accion Objetivo 2
            [
                'name'=>'Especifica',
                'parent_id'=>'462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'De Cordinación',
                'parent_id'=>'463',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'De coordinación',
                'parent_id'=>'464',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'465',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'466',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'De Coordinación',
                'parent_id'=>'467',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'De Coordinación',
                'parent_id'=>'468',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            //Acciones del tercer Objetivo
            [
                'name'=>'De Coordinación',
                'parent_id'=>'469',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'470',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'471',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            //Actividdes del cuarto Objetivo
            [
                'name'=>'De Coordinación',
                'parent_id'=>'472',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'473',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'De Coordinación',
                'parent_id'=>'474',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'De Coordinación',
                'parent_id'=>'475',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'De Coordinación',
                'parent_id'=>'476',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'477',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
            [
                'name'=>'Especifica',
                'parent_id'=>'478',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>4
            ],
        ]);

        DB::table('politicas_publicas_elementos')->insert([
            [
                'name'=>'SSPC, CNPC',
                'parent_id'=>'455',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'CONAGUA',
                'parent_id'=>'456',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'SADER, INAPESCA',
                'parent_id'=>'457',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'CONAP',
                'parent_id'=>'458',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'SEDATU',
                'parent_id'=>'459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'SADER',
                'parent_id'=>'460',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'SCT',
                'parent_id'=>'461',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            //Tipo de accion Objetivo 2
            [
                'name'=>'SEP',
                'parent_id'=>'462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'SEMARNAT, SE, CONACYT, SCT',
                'parent_id'=>'463',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'SECTUR, SEMARNAT',
                'parent_id'=>'464',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'ASEA',
                'parent_id'=>'465',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'SEMARNAT',
                'parent_id'=>'466',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'SEMARNAT, INECC',
                'parent_id'=>'467',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'SEMARNAT, CONAFOR, INPI',
                'parent_id'=>'468',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            //Acciones del tercer Objetivo
            [
                'name'=>'SEMARNAT, INECC, CONACYT',
                'parent_id'=>'469',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'SADER',
                'parent_id'=>'470',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'PROFEPA',
                'parent_id'=>'471',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            //Actividdes del cuarto Objetivo
            [
                'name'=>'SEMARNAT',
                'parent_id'=>'472',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'SEMARNAT',
                'parent_id'=>'473',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'CONAFOR, CONANP',
                'parent_id'=>'474',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'INEGI, SEMARNAT, INECC',
                'parent_id'=>'475',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'INECC, CONACYT',
                'parent_id'=>'476',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'SEP',
                'parent_id'=>'477',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
            [
                'name'=>'PROFEPA',
                'parent_id'=>'478',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>5
            ],
        ]);
        //Encargado del seguimiento
        DB::table('politicas_publicas_elementos')->insert([
            [
                'name'=>'SSPC, CNPC',
                'parent_id'=>'455',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'CONAGUA',
                'parent_id'=>'456',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'SADER',
                'parent_id'=>'457',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'CONANP',
                'parent_id'=>'458',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'SEDATU',
                'parent_id'=>'459',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'SADER',
                'parent_id'=>'460',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'SCT',
                'parent_id'=>'461',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            //Tipo de accion Objetivo 2
            [
                'name'=>'SEP',
                'parent_id'=>'462',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'SEMARNAT',
                'parent_id'=>'463',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'SECTUR',
                'parent_id'=>'464',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'ASEA',
                'parent_id'=>'465',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'SEMARNAT',
                'parent_id'=>'466',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'SEMARNAT',
                'parent_id'=>'467',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'CONAFOR',
                'parent_id'=>'468',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            //Acciones del tercer Objetivo
            [
                'name'=>'SEMARNAT',
                'parent_id'=>'469',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'SADER',
                'parent_id'=>'470',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'PROFEPA',
                'parent_id'=>'471',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            //Actividdes del cuarto Objetivo
            [
                'name'=>'SEMARNAT',
                'parent_id'=>'472',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'SEMARNAT',
                'parent_id'=>'473',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'CONAFOR',
                'parent_id'=>'474',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'INEGI',
                'parent_id'=>'475',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'INECC',
                'parent_id'=>'476',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'SEP',
                'parent_id'=>'477',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
            [
                'name'=>'PROFEPA',
                'parent_id'=>'478',
                'politica_publica_id'=>6,
                'politica_publica_nivel_id'=>6
            ],
        ]);
    }
}
