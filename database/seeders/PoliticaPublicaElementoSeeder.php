<?php

namespace Database\Seeders;

use FontLib\Table\Type\name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliticaPublicaElementoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('politicas_publicas_elementos')->insert([
            [
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 1,
                'name' => 'Promover la conservación, protección, restauración y aprovechamiento sustentable de los ecosistemas y su biodiversidad con enfoque territorial y de derechos humanos, considerando las regiones bioculturales, a fin de mantener ecosistemas funcionales que son la base del bienestar de la población'
            ],
            [
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 1,
                'name' => 'Fortalecer la acción climática a fin de transitar hacia una economía baja en carbono y una población, ecosistemas, sistemas productivos e infraestructura estratégica resilientes, con el apoyo de los conocimientos científicos, tradicionales y tecnológicos disponibles.'
            ],
            [
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 1,
                'name' => 'Promover al agua como pilar de bienestar, manejada por instituciones transparentes, confiables, eficientes y eficaces que velen por un medio ambiente sano y donde una sociedad participativa se involucre en su gestión.'
            ],
            [
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 1,
                'name' => 'Promover un entorno libre de contaminación del agua, el aire y el suelo que contribuya al ejercicio pleno del derecho a un medio ambiente sano.'
            ],
            [
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 1,
                'name' => 'Fortalecer la gobernanza ambiental a través de la participación ciudadana libre, efectiva, significativa y corresponsable en las decisiones de política pública, asegurando el acceso a la justicia ambiental con enfoque territorial y de derechos humanos y promoviendo la educación y cultura ambiental'
            ]
        ]);


        DB::table('politicas_publicas_elementos')->insert(
            [
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Fomentar la conservación, protección y monitoreo de ecosistemas, agroecosistemas y su biodiversidad para garantizar la provisión y calidad de sus servicios ambientales, considerando instrumentos normativos, usos, costumbres, tradiciones y cosmovisiones de pueblos indígenas, afromexicanos y comunidades locales.",
                    'parent_id' => 1
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Promover el aprovechamiento sustentable de los recursos naturales y la biodiversidad, basado en la planeación participativa con respeto a la autonomía y libre determinación, con enfoque territorial, de cuencas y regiones bioculturales, impulsando el desarrollo regional y local.",
                    'parent_id' => 1
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Restaurar los ecosistemas, con énfasis en zonas críticas, y recuperar las especies prioritarias para la conservación con base en el mejor conocimiento científico y tradicional disponibles.",
                    'parent_id' => 1
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Promover, a través de los instrumentos de planeación territorial, un desarrollo integral, equilibrado y sustentable de los territorios que preserve los ecosistemas y sus servicios ambientales, con un enfoque biocultural y de derechos humanos.",
                    'parent_id' => 1
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Reducir la vulnerabilidad ante el cambio climático mediante el diseño, integración e implementación de criterios de adaptación en instrumentos y herramientas para la toma de decisiones con un enfoque preventivo y de largo plazo que permita la mejora en el bienestar y calidad de vida de la población.",
                    'parent_id' => 2
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Diseñar, establecer y coordinar políticas e instrumentos para reducir emisiones de gases y compuestos de efecto invernadero, así como promover y conservar sumideros de carbono, en concordancia con los compromisos nacionales e internacionales.",
                    'parent_id' => 2
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Fortalecer y alinear instrumentos de política y medios de implementación para la mitigación y adaptación al cambio climático, asegurando la acción coordinada de los tres órdenes de gobierno y la participación social.",
                    'parent_id' => 2
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Promover el desarrollo y fortalecimiento coordinado de capacidades institucionales de los diferentes órdenes de gobierno para su participación en la planeación, diseño, ejecución, seguimiento y evaluación, así como reporte de medidas de mitigación y adaptación, con respeto a los derechos colectivos.",
                    'parent_id' => 2
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Fomentar la educación, capacitación, investigación y comunicación en materia de cambio climático para motivar la corresponsabilidad de los distintos agentes en los esfuerzos de mitigación y adaptación, con enfoque biocultural.",
                    'parent_id' => 2
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Garantizar progresivamente los derechos humanos al agua y al saneamiento, especialmente en la población más vulnerable.",
                    'parent_id' => 3
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Aprovechar eficientemente el agua para contribuir al desarrollo sustentable de los sectores productivos.",
                    'parent_id' => 3
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Preservar la integralidad del ciclo del agua a fin de garantizar los servicios hidrológicos que brindan cuencas y acuíferos.",
                    'parent_id' => 3
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Gestionar de manera eficaz, eficiente, transparente y participativa medidas de prevención, inspección, remediación y reparación del daño para prevenir y controlar la contaminación y la degradación.",
                    'parent_id' => 4
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Fomentar el cambio y la innovación en los métodos de producción y consumo de bienes y servicios, a fin de reducir la extracción de recursos naturales, el uso de energía y minimizar los efectos de las actividades humanas sobre el medio ambiente.",
                    'parent_id' => 4
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Articular de manera efectiva la acción gubernamental con la participación equilibrada de los diferentes actores y grupos sociales para contribuir a una gestión pública, efectiva y eficiente, con enfoque territorial, de igualdad de género y de sustentabilidad.",
                    'parent_id' => 5
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Impulsar procesos de relación y espacios de diálogo con respeto a las formas de organización de colectivos, grupos, comunidades y otras organizaciones para atender las problemáticas socioambientales específicas que afectan su bienestar y medios de vida.",
                    'parent_id' => 5
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Impulsar la participación ciudadana abierta, inclusiva y culturalmente pertinente, en la toma de decisiones ambientales, garantizando el derecho de acceso a la información, transparencia proactiva y el pleno respeto de los derechos humanos, con perspectiva de género y etnia.",
                    'parent_id' => 5
                ],
                [
                    'politica_publica_id' => 1,
                    'politica_publica_nivel_id' => 2,
                    'name' => "Fortalecer la cultura y educación ambiental, que considere un enfoque de derechos humanos, de igualdad de género e interculturalidad, para la formación de una ciudadanía crítica que participe de forma corresponsable en la transformación hacia la sustentabilidad.",
                    'parent_id' => 5
                ],
            ]
        );


        DB::table('politicas_publicas_elementos')->insert([
            [
                'name' => '1.1.1.- Consolidar y promover las áreas naturales protegidas, reservas comunitarias, privadas y otros esquemas de conservación, privilegiando la representatividad y la conectividad de los ecosistemas, la conservación de especies prioritarias y el patrimonio biocultural de las comunidades que las habitan.',
                'parent_id' => 1,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.1.2.- Impulsar mediante la participación equitativa de mujeres, jóvenes y pueblos y comunidades indígenas y afromexicanas, el manejo efectivo de las áreas naturales protegidas federales y otros esquemas de conservación con la participación de los sectores involucrados y las comunidades locales a fin de garantizar la provisión y calidad de sus servicios ambientales.',
                'parent_id' => 1,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.1.3.- Promover la incorporación de superficies a esquemas de pago por servicios ambientales y otros esquemas bajo un enfoque de conservación activa, así como la protección de ecosistemas relacionados con el agua con enfoque de microcuencas, con distribución equitativa de beneficios y respetando derechos colectivos.',
                'parent_id' => 1,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.1.4.- Regular las actividades productivas y fortalecer la coordinación del manejo del fuego, de la detección y control de plagas y especies exóticas invasoras, a fin de mantener la integridad de los ecosistemas y los servicios ambientales.',
                'parent_id' => 1,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.1.5.- Combatir, con la participación de distintos sectores y comunidades locales, la tala ilegal y el tráfico de vida silvestre para evitar el deterioro de los ecosistemas.',
                'parent_id' => 1,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.1.6.- Promover una política integral de bioseguridad que salvaguarde la biodiversidad, las personas y la inocuidad de los alimentos de los posibles efectos de los organismos genéticamente modificados y de los desarrollos biotecnológicos, así como de especies invasoras y compuestos tóxicos.',
                'parent_id' => 1,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.2.1.- Impulsar, con la participación de las comunidades, actividades productivas y reproductivas sustentables en áreas naturales protegidas y zonas de influencia, considerando el enfoque agroecológico y contribuyendo a generar redes locales de valor reduciendo las condiciones de marginación y las desigualdades de género.',
                'parent_id' => 2,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.2.2.- Orientar el manejo forestal sustentable, en particular el comunitario, y las actividades del sector forestal hacia regiones prioritarias, considerando su situación de vulnerabilidad y marginación social y con pertinencia biocultural.',
                'parent_id' => 2,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.2.3.- Diseñar y coordinar la implementación de instrumentos para apoyar y gestionar sistemas agroecológicos, agroforestales y agrosilvopastoriles promoviendo la participación efectiva de mujeres y jóvenes.',
                'parent_id' => 2,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.2.4.- Impulsar el desarrollo forestal sustentable y la competitividad del sector forestal a través de la efectiva aplicación del marco normativo y regulatorio y con técnicas apropiadas.',
                'parent_id' => 2,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.2.5.- Fortalecer esquemas de aprovechamiento sustentable extractivos y no extractivos de la biodiversidad, considerando prácticas tradicionales y promoviendo la participación en términos de género, curso de vida, comunidades y pueblos indígenas y afromexicanos.',
                'parent_id' => 2,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.3.1.- Promover la restauración productiva mediante la reconversión de tierras degradadas a sistemas agroforestales y agroecológicos, preferentemente en áreas alteradas por fenómenos naturales, especies exóticas invasoras y causas antropogénicas.',
                'parent_id' => 3,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.3.2.- Fomentar y difundir la investigación científica y articularla con los conocimientos tradicionales y saberes locales para fortalecer la toma de decisiones sobre restauración productiva, rehabilitación de ecosistemas y la recuperación de especies prioritarias.',
                'parent_id' => 3,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.3.3.- Restaurar los ecosistemas naturales terrestres, dulceacuícolas y marinos, con énfasis en zonas críticas, para recuperar los servicios ambientales que proveen mediante un enfoque interdisciplinario, integral, intersectorial, participativo y territorial de largo plazo.',
                'parent_id' => 3,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.3.4.- Mejorar la calidad del agua en cauces, vasos, acuíferos y zonas costeras, con enfoque de manejo integral de cuencas, para la preservación de los ecosistemas y el bienestar de las comunidades locales.',
                'parent_id' => 3,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.3.5.-Favorecer la recuperación de especies prioritarias a través de la protección de sus poblaciones y hábitat, su reintroducción y manejo, disminución de los factores de presión y tráfico ilegal, con vigilancia y monitoreo efectivos, distribución equitativa de beneficios y corresponsabilidad social.',
                'parent_id' => 3,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.4.1.- Armonizar, junto con otras dependencias de la administración pública federal y otros órdenes de gobierno, incluyendo a las autoridades comunitarias, los instrumentos de ordenamiento territorial para promover un desarrollo integral, equilibrado y sustentable del territorio.',
                'parent_id' => 4,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.4.2.- Formular y aplicar instrumentos de planeación territorial participativa, considerando las cosmovisiones culturales, étnicas, etarias y de género, que promuevan la autogestión de los recursos naturales por parte de las comunidades, respetando la autonomía y libre determinación de pueblos indígenas y afromexicanos.',
                'parent_id' => 4,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.4.3.- Desarrollar acciones de ordenamiento territorial y ecológico para preservar las cuencas y evitar afectaciones a los acuíferos, contribuyendo a preservar los recursos hídricos del país, promoviendo los esquemas de gobernanza con participación social.',
                'parent_id' => 4,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.1.1.- Coordinar e instrumentar procesos de adaptación mediante la integración y articulación de acciones intersectoriales en el territorio, priorizando la atención en municipios y, en su caso, alcaldías, de alta vulnerabilidad ante los impactos del cambio climático.',
                'parent_id' => 5,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.1.2.- Integrar criterios de adaptación al cambio climático en el diseño, actualización, implementación y evaluación de instrumentos de planeación, gestión, manejo y ordenamiento ecológico del territorio en los tres órdenes de gobierno, considerando los escenarios de cambio climático y el enfoque de cuenca.',
                'parent_id' => 5,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.1.3.- Coordinar y fortalecer la actualización y el acceso oportuno a la información para la consolidación y mejora de los protocolos y sistemas de alerta temprana ante fenómenos hidrometeorológicos, considerando las capacidades locales y la identidad cultural de la población.',
                'parent_id' => 5,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.1.4.- Diseñar e implementar estrategias de restauración y conservación de ecosistemas marino-costeros que potencien la captura de carbono azul y contribuyan a proteger a la población, la infraestructura y las actividades productivas en las zonas marinas y costeras.',
                'parent_id' => 5,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.1.5.- Coordinar e implementar, en el marco del Sistema Nacional de Cambio Climático, la Política Nacional de Adaptación al Cambio Climático tomando en cuenta las Contribuciones Determinadas a nivel Nacional, con enfoque de género y derechos humanos.',
                'parent_id' => 5,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.2.1.- Concertar acciones en el sector y con otras dependencias que promuevan la transición energética con fuentes limpias, preferentemente renovables, garantizando la protección ambiental y procurando el bienestar de la población, particularmente de las comunidades más vulnerables, con enfoque de inclusión y movilidad social y económica.',
                'parent_id' => 6,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.2.2.- Reducir emisiones por deforestación y degradación del suelo, impulsando el modelo de manejo integrado del territorio, instrumentos de fomento al desarrollo rural bajo en carbono y resiliente, la conservación e incremento de acervos de carbono forestal y la distribución equitativa de beneficios.',
                'parent_id' => 6,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.2.3.- Impulsar sistemas de movilidad sustentable, públicos y privados, de bajas emisiones, eficientes, seguros, inclusivos, asequibles y accesibles, con los últimos avances tecnológicos, reconociendo patrones diferenciados de movilidad entre hombres y mujeres de distintos grupos sociales, en comunidades, ciudades y zonas metropolitanas.',
                'parent_id' => 6,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.2.4.- Promover un desarrollo urbano sustentable, incluyente y compacto, de movilidad y vivienda sustentables, con manejo de residuos sólidos y aguas residuales que reduzca las emisiones de efecto invernadero y que incremente la resiliencia y la capacidad adaptativa de las ciudades y zonas metropolitanas.',
                'parent_id' => 6,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.2.5.- Establecer, fortalecer y fomentar, en coordinación con dependencias de la APF, instrumentos de política y normativos para la reducción de emisiones de GyCEI en sectores estratégicos con enfoque de economía circular para cumplir las metas nacionales e internacionales de cambio climático.',
                'parent_id' => 6,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.3.1.- Actualizar y fortalecer los instrumentos de la política nacional de cambio climático, así como promover su armonización a nivel estatal y municipal a fin de que den cumplimiento y aumenten la ambición de las Contribuciones Determinadas a nivel nacional.',
                'parent_id' => 7,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => "2.3.2.- Movilizar y aprovechar fuentes de financiamiento público, privado, nacional e internacional que permitan implementar acciones de mitigación y adaptación para el cumplimiento de las Contribuciones Determinadas a nivel Nacional.",
                'parent_id' => 7,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "2.3.3.- Consolidar sistemas de información sobre cambio climático que apoyen el monitoreo, evaluación y reporte de las metas nacionales de mitigación y adaptación, e identifiquen necesidades y oportunidades de financiamiento, capacitación, transferencia de tecnología y reducción de vulnerabilidad.",
                'parent_id' => 7,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "2.3.4.- Fortalecer la evaluación de la política nacional climática a fin de conocer y mejorar su eficiencia y eficacia y los avances en el combate al cambio climático.",
                'parent_id' => 7,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "2.4.1.- Promover el fortalecimiento del marco legal y la arquitectura institucional en las entidades federativas, municipios y, en su caso, alcaldías, para diseñar, implementar y evaluar acciones y medidas en materia de cambio climático.",
                'parent_id' => 8,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "2.4.2.- Orientar y acompañar a los diferentes órdenes de gobierno en el diseño y desarrollo de instrumentos de política para la mitigación y adaptación con enfoque territorial basado en ecosistemas, visión comunitaria, bioculturalidad y sustentabilidad.",
                'parent_id' => 8,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "2.4.3.- Fortalecer la co-creación de capacidades locales y la transparencia de la implementación de medidas para el combate al cambio climático en el marco del Sistema Nacional de Cambio Climático.",
                'parent_id' => 8,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "2.5.1.- Incentivar, integrar y difundir la investigación en materia de cambio climático que permita contar con la mejor información y conocimiento científico disponible para la toma de decisiones.",
                'parent_id' => 9,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "2.5.2.- Impulsar una educación y cultura ambiental para coadyuvar a la mitigación y adaptación del cambio climático y promover modificaciones en los patrones de producción, consumo y ocupación del territorio.",
                'parent_id' => 9,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "2.5.3.- Promover la generación, integración, acceso, uso e intercambio de información en materia de cambio climático, considerando el diálogo de saberes, así como los avances científicos y tecnológicos para la toma de decisiones.",
                'parent_id' => 9,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "2.5.4.- Fomentar la participación social informada, organizada y culturalmente pertinente en el ciclo de la política pública en materia de cambio climático y ordenamiento territorial, promoviendo la intervención de mujeres, jóvenes y pueblos y comunidades indígenas y afromexicanas.",
                'parent_id' => 9,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "2.5.5.- Mejorar la comunicación y la difusión de información sobre vulnerabilidad al cambio climático, así como las oportunidades sociales, ambientales y económicas de un desarrollo bajo en carbono y resiliente al cambio del clima.",
                'parent_id' => 9,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "3.1.1.- Proteger la disponibilidad de agua en cuencas y acuíferos para la implementación del derecho humano al agua.",
                'parent_id' => 10,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "3.1.2.- Abatir el rezago en el acceso al agua potable y al saneamiento para elevar el bienestar en los medios rural y periurbano.",
                'parent_id' => 10,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "3.1.3.- Fortalecer a los organismos operadores de agua y saneamiento, a fin de asegurar servicios de calidad a la población",
                'parent_id' => 10,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "3.1.4.- Atender los requerimientos de infraestructura hidráulica para hacer frente a las necesidades presentes y futuras.",
                'parent_id' => 10,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "3.2.1.- Aprovechar eficientemente el agua en el sector agrícola para contribuir a la seguridad alimentaria y el bienestar.",
                'parent_id' => 11,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "3.2.2.- Fortalecer a las asociaciones de usuarios agrícolas a fin de mejorar su desempeño.",
                'parent_id' => 11,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "3.2.3.- Apoyar y promover proyectos productivos en zonas marginadas, en particular pueblos indígenas y afromexicanos, para impulsar su desarrollo",
                'parent_id' => 11,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "3.2.4.- Orientar el desarrollo de los sectores industrial y de servicios a fin de mitigar su impacto en los recursos hídricos.",
                'parent_id' => 11,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "3.3.1.- Conservar cuencas y acuíferos para mejorar la capacidad de provisión de servicios hidrológicos.",
                'parent_id' => 12,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "3.3.2.- Reglamentar cuencas y acuíferos con el fin de asegurar agua en cantidad y calidad para la población y reducir la sobreexplotación",
                'parent_id' => 12,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "3.3.3.- Atender las emergencias hidroecológicas para proteger la salud de la población y el ambiente.",
                'parent_id' => 12,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "4.1.1.- Impulsar una gestión integral del desempeño ambiental y de monitoreo y evaluación con información de calidad, suficiente, constante y transparente para prevenir la contaminación y evitar la degradación ambiental.",
                'parent_id' => 13,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "4.1.2.- Actualizar y fortalecer el marco normativo y regulatorio ambiental en materia de emisiones, descargas, residuos peligrosos y transferencia de contaminantes para prevenir, controlar, mitigar, remediar y reparar los daños ocasionados por la contaminación del aire, suelo y agua.",
                'parent_id' => 13,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "4.1.3.- Promover, vigilar y verificar el cumplimiento del marco regulatorio y normativo en materia de recursos naturales, obras y actividades, incluyendo las empresariales, que puedan generar un impacto ambiental, para mantener la integridad del medio ambiente.",
                'parent_id' => 13,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'parent_id' => 13,
                'name' => '4.1.4.- Fortalecer la planeación, gestión, inspección y vigilancia con enfoque de manejo del riesgo, que conserve el ambiente, mejore el desempeño de procesos, la integridad de instalaciones y salvaguarde las personas.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 13,
                'name' => '4.1.5.- Reducir y controlar la contaminación para evitar el deterioro de cuerpos de agua y sus impactos en la salud, mediante el reforzamiento de la normatividad y acciones coordinadas en áreas prioritarias.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 14,
                'name' => '4.2.1.- Promover el cambio y la innovación en los métodos de producción y consumo mediante la adopción de tecnologías que permitan el uso sustentable de los recursos considerando buenas prácticas y estándares internacionales y revalorizando los sistemas de producción y consumo tradicionales.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 14,
                'name' => '4.2.2.- Impulsar el uso y manejo de energías bajas en carbono y sustentables en procesos industriales, productivos, servicios públicos y residenciales.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 14,
                'name' => '4.2.3.- Fomentar modalidades de producción y consumo sustentables con el fin de reducir la extracción de recursos naturales, el uso de energía, y para minimizar los efectos de las actividades humanas sobre el ambiente.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 14,
                'name' => '4.2.4.- Promover la economía circular con el fin de fomentar el uso eficiente de los recursos y evitar la contaminación y degradación a través de un enfoque en el ciclo de vida de bienes y servicios en las cadenas productivas.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 14,
                'name' => '4.2.5.- Disminuir las externalidades negativas al medio ambiente y las afectaciones sociales mediante el fortalecimiento de la colaboración entre el sector privado y público en el desarrollo de instrumentos económicos y financieros que generen incentivos, en un marco de respeto a los derechos humanos.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 15,
                'name' => '5.1.1.- Impulsar una planeación y gestión gubernamental que incluya la participación ciudadana y favorezca la alineación de políticas, programas públicos e incentivos de los tres órdenes de gobierno, bajo un enfoque de manejo integrado del territorio.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 15,
                'name' => '5.1.2.- Impulsar una gestión pública integral, efectiva y democrática en materia ambiental mediante el desarrollo y fortalecimiento de capacidades institucionales que favorezcan la articulación entre sectores y órdenes de gobierno.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 15,
                'name' => '5.1.3.- Incorporar en el diseño, implementación y evaluación de la política pública ambiental criterios y procesos que reconozcan y favorezcan la participación plena, efectiva y equitativa de la sociedad, incluyendo grupos en situación de mayor vulnerabilidad, de colectivos y movimientos socioambientales.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 15,
                'name' => '5.1.4.- Fomentar y fortalecer la investigación científica y los sistemas de información ambiental para la toma de decisiones, diseño, implementación, evaluación y rendición de cuentas de la política ambiental, facilitando a la ciudadanía su accesibilidad de manera sistemática, proactiva, oportuna, regular y culturalmente pertinente para las mujeres, jóvenes y población indígena y afromexicana.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 15,
                'name' => '5.1.5.- Impulsar el cumplimiento de los compromisos ambientales internacionales y fortalecer el quehacer ambiental a través de la cooperación internacional, asegurando la participación activa de la ciudadanía.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 15,
                'name' => '5.1.6.- Establecer y concretar acuerdos institucionales para una efectiva presencia del sector ambiental con otros sectores de gobierno y su articulación desde la escala local a la nacional, asegurando la participación ciudadana.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 15,
                'name' => '5.1.7.- Promover la participación e involucramiento del sector privado en la innovación, movilización de recursos y transformación de procesos productivos, con respeto a los derechos humanos.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'parent_id' => 16,
                'name' => '5.2.1.- Fortalecer y construir mecanismos, instrumentos y herramientas específicas para impulsar procesos de diálogo y construcción de acuerdos dirigidos a procurar la resolución de problemas colectivos en territorios que afecten ecosistemas, formas de vida y/o tradiciones culturales, en el marco jurídico e institucional existente.',
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => "5.2.2.- Generar las capacidades institucionales para la prevención, atención, resolución y transformación positiva de conflictos socioambientales, mediante la creación y fortalecimiento de los mecanismos y protocolos existentes.",
                'parent_id' => 16,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "5.2.3.- Promover el acceso a la justicia ambiental y la protección de defensoras y defensores ambientales y del territorio mediante marcos normativos y procedimientos administrativos efectivos, oportunos y transparentes, con enfoque de derechos humanos, igualdad de género y con pertinencia cultural.",
                'parent_id' => 16,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "5.3.1.- Promover la participación libre, previa, informada y activa en la toma de decisiones de la política ambiental, para que ésta responda a necesidades sociales e impulse la corresponsabilidad de los actores involucrados.",
                'parent_id' => 17,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "5.3.2.- Promover la participación equitativa de las mujeres, jóvenes y pueblos indígenas y afromexicanos en mecanismos de diálogo, consulta y toma de decisiones ambientales a nivel nacional, regional y local, cumpliendo los instrumentos nacionales e internacionales de derechos humanos, incluyendo el Convenio 169 de la OIT.",
                'parent_id' => 17,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "5.3.3.- Realizar acciones de educación, difusión, capacitación e investigación en temas de género y ambiente, las cuales incidan en el diseño, implementación y evaluación de políticas públicas, así como el acceso, uso y disfrute de beneficios del aprovechamiento y la conservación de los recursos naturales.",
                'parent_id' => 17,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "5.3.4.- Promover la participación de mujeres y hombres, organizaciones sociales, de la sociedad civil y académicas en la administración, preservación y cultura del agua a fin de fomentar su uso sustentable.",
                'parent_id' => 17,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "5.3.5.- Asegurar el acceso a la información ambiental pública, oportuna, verificable, inteligible, relevante y culturalmente pertinente, con apego a los esquemas de transparencia proactiva.",
                'parent_id' => 17,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "5.4.1.- Establecer una nueva relación armónica y de convivencia respetuosa con la naturaleza mediante el impulso de una ética ambiental que considere la experiencia y los saberes de las mujeres y hombres de las comunidades indígenas y rurales del país y con perspectiva hacia las generaciones presentes y futuras.",
                'parent_id' => 18,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "5.4.2.- Coordinar procesos formativos y de comunicación con los tres órdenes de gobierno y diferentes sectores sociales, que favorezcan modos de vida sustentables, considerando los saberes tradicionales, con base en los enfoques de igualdad de género, cultura para la paz e interculturalidad.",
                'parent_id' => 18,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "5.4.3.- Contribuir a la formación de una ciudadanía ambiental crítica, informada y propositiva que participe en el ciclo de la política pública que incide en la sustentabilidad y en la reducción de desigualdades a través de la promoción de la cultura y educación ambiental con un enfoque de derechos.",
                'parent_id' => 18,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => "5.4.4.- Impulsar la transversalidad de la educación ambiental en los diferentes organismos del sector medio ambiente mediante la coordinación intra e interinstitucional, considerando un enfoque territorial, biocultural, de género y agroecológico.",
                'parent_id' => 18,
                'politica_publica_id' => 1,
                'politica_publica_nivel_id' => 3,
            ],
        ]);

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


            //3

            [
                "name" => "1. Gestión integral de la calidad del aire",
                "parent_id" => null,
                "politica_publica_id" => 3,
                "politica_publica_nivel_id" => 1
            ],
            [
                "name" => "2. Instituciones eficientes y orientadas a resultados",
                "parent_id" => null,
                "politica_publica_id" => 3,
                "politica_publica_nivel_id" => 1
            ],
            [
                "name" => "3. Empresas comprometidas con la camidad del aire",
                "parent_id" => null,
                "politica_publica_id" => 3,
                "politica_publica_nivel_id" => 1
            ],
            [
                "name" => "4. Políticas para mejorar la calidad del aire con base científica",
                "parent_id" => null,
                "politica_publica_id" => 3,
                "politica_publica_nivel_id" => 1
            ],
            [
                "name" => "5. Sociedad responsable y participativa:",
                "parent_id" => null,
                "politica_publica_id" => 3,
                "politica_publica_nivel_id" => 1
            ],

            [
                'name' => 'Coordinar la gestión de la calidad del aire de manera compartida entre los tres órdenes de gobierno para reducir las concentraciones de contaminantes atmosféricos en el territorio nacional.',
                'parent_id' => '135',
                'politica_publica_id' => '3',
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Promover el fortalecimiento de los ordenamientos jurídicos para articular las competencias y responsabilidades de las instituciones que participan en la gestión de la calidad del aire y desarrollar sus capacidades en materia de capital humano calificado, presupuesto e indicadores de  desempeño. ',
                'parent_id' => '136',
                'politica_publica_id' => '3',
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Fortalecer el sistema regulatorio de incentivos y obligaciones que oriente la transformación de los procesos de las empresas para que reduzcan la  emisión de contaminantes. ',
                'parent_id' => '137',
                'politica_publica_id' => '3',
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Consolidar los instrumentos y la investigación científica y técnica que generan información sobre la calidad del aire para articularlos con las políticas y programas que la gestionan.',
                'parent_id' => '138',
                'politica_publica_id' => '3',
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Establecer mecanismos para que la población conozca el impacto de la contaminación atmosférica en sus vidas y participe activamente para mejorar la calidad del aire',
                'parent_id' => '139',
                'politica_publica_id' => '3',
                'politica_publica_nivel_id' => 2,
            ],

            //objetivos


            [
                'name' => '1.1 Alinear a las instituciones que correspondan del orden federal para que incorporen en sus agendas acciones que contribuyan a mejorar la calidad del aire.',
                'parent_id' => '140',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.2 Impulsar una planeación integral del territorio con un enfoque de sustentabilidad.',
                'parent_id' => '140',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.3 Promover acciones coordinadas para reducir emisiones de fuentes contaminantes. ',
                'parent_id' => '140',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.4 Fortalecer la coordinación entre los tres órdenes de gobierno en materia de calidad del aire.',
                'parent_id' => '140',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.1 Promover la definición de las atribuciones, responsabilidades y acciones que correspondan a las distintas instancias gubernamentales en la implementación de la ENCA.',
                'parent_id' => '141',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.2 Contar con una política normativa congruente y renovada, que establezca metas progresivas, con base en los mejores estándares internacionales en materia de calidad del aire.',
                'parent_id' => '141',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.3 Promover el fortalecimiento de las instituciones encargadas de gestionar la calidad del aire en los tres órdenes de gobierno.',
                'parent_id' => '141',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.4 Impulsar la asignación de recursos para implementar acciones relacionadas con la gestión de la calidad del aire.',
                'parent_id' => '141',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.5 Fortalecer las instituciones encargadas de la inspección y vigilancia en materia de calidad del aire.',
                'parent_id' => '141',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.1 Actualizar el marco regulatorio en materia de prevención y control de la contaminación de la atmósferica.',
                'parent_id' => '142',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.2 Fortalecer los instrumentos económicos y de fomento para incentivar la transformación voluntaria de los procesos de las empresas para reducir sus emisiones contaminantes.',
                'parent_id' => '142',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.3 Fomentar y desarrollar un mercado de bienes y servicios verdes.',
                'parent_id' => '142',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.4 Clarificar y agilizar los procedimientos y trámites entre empresas y autoridades ambientales.',
                'parent_id' => '142',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.1 Fortalecer las herramientas que generan información para sustentar la gestión de la calidad del aire.',
                'parent_id' => '143',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.2 Impulsar la investigación científica y la innovación tecnológica como base de las políticas para mejorar la calidad del aire.',
                'parent_id' => '143',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.3 Fortalecer la investigación relacionada con los riesgos y costos en la salud de las personas y afectaciones a los ecosistemas, provocados por la exposición a la contaminación atmosférica.',
                'parent_id' => '143',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.4 Proyectar el impacto de las acciones previstas para mejorar la calidad del aire.',
                'parent_id' => '143',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.1 Difundir información sobre la calidad del aire, sus efectos en la salud y en los ecosistemas, así como los riesgos por exposición. ',
                'parent_id' => '144',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.2 Promover actitudes y conductas ciudadanas que contribuyan a mejorar la calidad del aire.',
                'parent_id' => '144',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.3 Crear conciencia sobre el uso de productos y prácticas que afectan la calidad del aire en exteriores e intramuros.',
                'parent_id' => '144',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.4 Impulsar la participación ciudadana, la rendición de cuentas y la transparencia en torno a la gestión de la calidad del aire.',
                'parent_id' => '144',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 3
            ],


            //lineas de accion


            [
                'name' => '1.1.1 Construir un mecanismo permanente de coordinación entre las Secretarías de Estado relacionadas con la gestión de la calidad del aire.',
                'parent_id' => '145',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.1.2 Establecer instrumentos de gestión compartida para que se consideren en la implementación de políticas y programas de ordenamiento territorial y ecológico, desarrollo urbano y rural, movilidad sustentable, mejoramiento ambiental, cambio climático y  transición energética, así como en las acciones que se derivan de acuerdos y convenios internacionales, para que se alineen con los objetivos de la ENCA.',
                'parent_id' => '145',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.1.3 Generar mecanismos de coordinación entre la ENCC/PECC y ENCA, para identificar acciones que tengan co-beneficios entre ambas agendas.',
                'parent_id' => '145',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.1.4 Crear un mecanismo coordinado de seguimiento, evaluación y rendición de cuentas permanente sobre los avances de la ENCA.',
                'parent_id' => '145',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.2.1 Promover la incorporación de lineamientos de sustentabilidad urbana en las políticas de ordenamiento territorial, ordenamiento ecológico, desarrollo urbano, transporte y movilidad.',
                'parent_id' => '146',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.2.2 Promover el desarrollo de Planes Integrales de Movilidad Sustentable en los que se prioricen los sistemas integrados y multi-modales de transporte público, la movilidad no motorizada y el ordenamiento de la logística urbana.',
                'parent_id' => '146',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.2.3 Incentivar el desarrollo de ciudades conectadas, coordinadas y compactas, que prioricen la conservación de áreas verdes y Áreas Naturales Protegidas, urbanas y periurbanas, el desarrollo  orientado al transporte y la creación de ecozonas.',
                'parent_id' => '146',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.2.4 Definir zonas críticas en materia de calidad del aire para que se incluyan en los ordenamientos ecológicos, territoriales y planes de desarrollo urbano.',
                'parent_id' => '146',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.3.1 Establecer los criterios para definir la saturación de las cuencas atmosféricas para su observancia en las Evaluaciones de Impacto Ambiental. ',
                'parent_id' => '147',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.3.2 Generar políticas que permitan tener un parque vehicular más limpio y que promuevan el uso de modos de transporte más eficientes.',
                'parent_id' => '147',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.3.3 Promover prácticas agrícolas y forestales que reduzcan la emisión de contaminantes a la atmósfera.',
                'parent_id' => '147',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.3.4 Fomentar el uso de tecnologías y combustibles limpios en todos los sectores, incluso en la generación de energía eléctrica, como lo marca la Ley de Transición Energética.',
                'parent_id' => '147',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.4.1 Crear un repositorio público y permanente de políticas y programas concurrentes, nacionales, regionales y locales relacionados con la calidad del aire.',
                'parent_id' => '148',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.4.2 Implementar programas para mejorar la calidad del aire (ProAire) en todas las entidades federativas, con atención preferente en cuencas, localidades prioritarias y zonas metropolitanas.',
                'parent_id' => '148',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.4.3 Establecer una metodología para el diseño, implementación y evaluación de los ProAire, que fomente la coordinación entre sectores y órdenes de gobierno.',
                'parent_id' => '148',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '1.4.4 Promover un mecanismo entre órdenes de gobierno para dar seguimiento a las acciones gubernamentales relacionadas con los objetivos de la ENCA.',
                'parent_id' => '148',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '2.1.1 Identificar necesidades de mejora al ordenamiento jurídico en materia de gestión de la calidad del aire.',
                'parent_id' => '149',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '2.1.2 Elaborar un Programa Especial de Calidad del Aire.',
                'parent_id' => '149',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '2.2.1 Desarrollar y actualizar las Normas Oficiales Mexicanas en materia de calidad del aire para la protección de la salud, que incluyan estándares para contaminantes prioritarios que se definan (metales pesados, COP y otros).',
                'parent_id' => '149',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '2.2.2 Establecer instrumentos normativos para proteger a los ecosistemas de los efectos de la contaminación atmosférica.',
                'parent_id' => '149',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '2.3.1 Fortalecer la estructura institucional para desarrollar de manera permanente las capacidades técnico-administrativas de los gobiernos.',
                'parent_id' => '150',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '2.3.2 Promover la definición de indicadores de desempeño para todas las instituciones involucradas en la ENCA.',
                'parent_id' => '150',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '2.4.1 Promover la ampliación y fortalecimiento de los mecanismos de financiamiento para implementar las acciones relativas a la calidad del aire.',
                'parent_id' => '151',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '2.4.2 Compartir esfuerzos y fortalecer capacidades para obtener fondos que permitan implementar acciones en materia de calidad del aire.',
                'parent_id' => '151',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '2.4.3 Alinear y gestionar con eficiencia los recursos en la implementación de acciones relacionadas con la calidad del aire.',
                'parent_id' => '151',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '2.5.1 Fortalecer las capacidades humanas, técnicas, financieras y operacionales de las instituciones encargadas de la observancia de la normatividad relativa a la calidad del aire.',
                'parent_id' => '152',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '2.5.2 Fortalecer los mecanismos jurídicos y/o administrativos para que los particulares denuncien a generadores de contaminantes y autoridades que no cumplan con sus responsabilidades.',
                'parent_id' => '152',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.1.1 Revisar, actualizar y desarrollar las NOM y NMX, relacionadas con las fuentes fijas y móviles.',
                'parent_id' => '153',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.1.2 Promover la actualización de la normatividad para que la calidad ambiental de los combustibles y las tecnologías consideren como referencia los estándares internacionales.',
                'parent_id' => '153',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.1.3 Promover la regulación de quemas agrícolas en empresas rurales.',
                'parent_id' => '153',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.1.4 Promover la regulación de emisiones por el uso de hornos tradicionales para actividades productivas, en particular de hornos ladrilleros y de alfarería.',
                'parent_id' => '153',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.2.1 Establecer convenios y desarrollar programas con el sector privado para la reducción voluntaria de emisiones, tanto directas como indirectas.',
                'parent_id' => '154',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.2.2 Promover los incentivos fiscales e instrumentos de fomento para que las industrias transformen sus procesos productivos mediante la innovación tecnológica y la eficiencia energética.',
                'parent_id' => '154',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.2.3 Impulsar dentro de las cadenas productivas que las PyME apliquen medidas de reducción de emisiones y mejoramiento de eficiencia energética.',
                'parent_id' => '154',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.3.1 Fortalecer y fomentar esquemas de reforestación y conservación de la cubierta forestal mediante programas voluntarios y de pago por servicios ambientales.',
                'parent_id' => '155',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.3.2 Fomentar instrumentos fiscales y de fomento para productores de insumos domésticos verdes, a nivel nacional. ',
                'parent_id' => '155',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.3.3 Impulsar las compras verdes por parte del sector privado.',
                'parent_id' => '155',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.4.1 Simplificar los procedimientos para agilizar los trámites entre empresas y autoridades ambientales.',
                'parent_id' => '156',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.4.2 Consolidar la ventanilla ambiental única para agilizar las interacciones entre las empresas y las instituciones ambientales.',
                'parent_id' => '156',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.4.3 Homologar las Cédulas de Operación Anual (COA) a nivel nacional con base en metodologías estandarizadas, así como fortalecer su verificación y explotación.',
                'parent_id' => '156',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '3.4.4 Crear un Padrón Único Nacional de Establecimientos Industriales que emiten contaminantes, con una metodología estandarizada, comparable y auditable. ',
                'parent_id' => '156',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.1.1 Desarrollar lineamientos para fortalecer el monitoreo de la calidad del aire, la infraestructura y el personal capacitado que se requiere a nivel local; así como para establecer  estaciones centinela que consideren contaminantes criterio y prioritarios.',
                'parent_id' => '157',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.1.2 Impulsar el desarrollo de programas de monitoreo atmosférico, que aseguren procesos de medición estandarizada, en regiones y localidades prioritarias, cuencas atmosféricas  identificadas como “saturadas”, así como en ecosistemas vulnerables, Regiones Prioritarias para la Conservación o Áreas Naturales Protegidas, adyacentes a zonas agrícolas o expuestas a la dispersión de contaminantes criterio.',
                'parent_id' => '157',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.1.3 Fortalecer el Sistema Nacional de Información de Calidad del Aire (SINAICA) y promover que las Redes de Monitoreo Atmosférico informen en tiempo real el estado de la calidad del aire.',
                'parent_id' => '157',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.1.4 Crear una Norma Mexicana de Inventarios de Emisiones que estandarice las metodologías e incorpore contaminantes criterio y prioritarios.',
                'parent_id' => '157',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.1.5 Fortalecer el desarrollo de Inventarios de Emisiones en regiones y localidades prioritarias, así como en ecosistemas vulnerables.',
                'parent_id' => '157',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.1.6 Impulsar el uso de herramientas de modelación para la evaluación y prospectiva de la calidad del aire.',
                'parent_id' => '157',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.2.1 Definir e impulsar líneas de investigación estratégicas que den sustento científico a acciones para mejorar la calidad del aire. ',
                'parent_id' => '158',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.2.2 Desarrollar un banco público de información relacionada con la calidad del aire, que incluya instituciones de investigación, investigadores y resultados de investigaciones relevantes.',
                'parent_id' => '158',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.2.3 Promover el desarrollo de innovación tecnológica que conlleve a la reducción de emisiones de contaminantes a la atmósfera.',
                'parent_id' => '158',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.3.1 Fortalecer las líneas de investigación sobre los impactos socio - económicos y los costos asociados a los efectos de la contaminación atmosférica en la salud de la población y en la conservación de los ecosistemas.',
                'parent_id' => '159',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.3.2 Promover el desarrollo de un programa de evaluación integral de riesgos a la salud y al ambiente. ',
                'parent_id' => '159',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.3.3 Fortalecer y difundir las bases de datos que reportan la incidencia de enfermedades relacionadas con la presencia de altos niveles de contaminación atmosférica. ',
                'parent_id' => '159',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.4.1 Aplicar herramientas de análisis económico de las acciones a implementar para reducir las concentraciones de contaminantes atmosféricos.',
                'parent_id' => '160',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.4.2 Evaluar la efectividad de las acciones a implementar para determinar su incidencia en el mejoramiento de la calidad del aire.',
                'parent_id' => '160',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '4.4.3 Establecer criterios para priorizar las acciones a implementar para mejorar la calidad del aire.',
                'parent_id' => '160',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.1.1 Desarrollar una estrategia de difusión oportuna con mensajes claros sobre las fuentes y los efectos de la contaminación atmosférica en la salud de la población, la conservación de losecosistemas y la economía.',
                'parent_id' => '161',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.1.2 Divulgar las obligaciones y los derechos exigibles por la población en materia de salud y medioambiente, así como las responsabilidades de las instituciones públicas encargadas de la gestión de la calidad del aire.',
                'parent_id' => '161',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.1.3 Desarrollar el Índice Nacional de Calidad del Aire y establecer mecanismos de divulgación accesibles para la población',
                'parent_id' => '161',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.2.1 Actualizar y enriquecer los contenidos educativos relacionados con la agenda ambiental, integrando el tema de la calidad del aire.',
                'parent_id' => '162',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.2.2 Incluir y adecuar acciones específicas en materia de educación ambiental en los ProAire.',
                'parent_id' => '162',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.2.3 Promover acciones de educación ambiental no formal que destaquen el tema de calidad del aire.',
                'parent_id' => '162',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.3.1 Impulsar acciones para incidir en un mejor uso de estufas de leña, que incluyan un plan de monitoreo y evaluación, un esquema de certificación a difundirse, así como estrategias de sensibilización y participación de los usuarios.',
                'parent_id' => '163',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.3.2 Promover mejoras en el proceso de fabricación de ladrillos. ',
                'parent_id' => '163',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.3.3 Impulsar prácticas agrícolas sustentables en el uso de plaguicidas y prácticas pecuarias que prevengan la emisión de gases provenientes de desechos orgánicos',
                'parent_id' => '163',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.3.4 Impulsar la compra de productos y tecnologías amigables con el medio ambiente que sustituyan los COP y las Sustancias Agotadoras de Ozono (SAO).',
                'parent_id' => '163',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.4.1 Crear mecanismos de comunicación de información accesibles y con datos abiertos, que promuevan una participación ciudadana co-responsable y permitan conocer su impacto.',
                'parent_id' => '164',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.4.2 Robustecer el sistema de denuncias mediante el conocimiento ciudadano sobre el acceso y la efectividad de los mecanismos de denuncia formal, en materia de derechos humanos en torno al tema de calidad del aire.',
                'parent_id' => '164',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],
            [
                'name' => '5.4.3 Crear mecanismos que fomenten una participación ciudadana para dar seguimiento y evaluar los avances de la ENCA',
                'parent_id' => '164',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 4
            ],



            //PNH
            //ObjetivosPrioritarios

            [
                'name' => 'Garantizar progresivamente los derechos humanos al agua y al saneamiento,  especialmente en la población más vulnerable',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 1,
                'parent_id' => null
            ],
            [
                'name' => 'Aprovechar eficientemente el agua para contribuir al desarrollo sostenible de  los sectores productivos.',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 1,
                'parent_id' => null
            ],
            [
                'name' => 'Reducir la vulnerabilidad de la población ante inundaciones y sequías, con énfasis en pueblos indígenas y afromexicanos ',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 1,
                'parent_id' => null
            ],
            [
                'name' => 'Preservar la integralidad del ciclo del agua a fin de garantizar los servicios  hidrológicos que brindan cuencas y acuíferos.',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 1,
                'parent_id' => null
            ],
            [
                'name' => 'Mejorar las condiciones para la gobernanza del agua a fin de fortalecer la  toma de decisiones y combatir la corrupción.',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 1,
                'parent_id' => null
            ],

            //Estrategia Prioritaria

            [
                'name' => 'Proteger la disponibilidad de agua en cuencas y acuíferos para la implementación del derecho humano al agua.',
                'parent_id' => '235',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Abatir el rezago en el acceso al agua potable y al saneamiento para elevar el bienestar en los medios rural y periurbano.',
                'parent_id' => '235',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Fortalecer a los organismos operadores de agua y saneamiento, a fin de asegurar servicios de calidad a la población',
                'parent_id' => '235',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Atender los requerimientos de infraestructura hidráulica para hacer frente a las necesidades presentes y futuras',
                'parent_id' => '235',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Aprovechar eficientemente el agua en el sector agrícola para contribuir a la seguridad alimentaria y el bienestar',
                'parent_id' => '236',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Fortalecer a las asociaciones de usuarios agrícolas a fin de mejorar su desempeño.',
                'parent_id' => '236',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Apoyar y promover proyectos productivos en zonas marginadas, en particular pueblos indígenas y afromexicanos, para impulsar su desarrollo',
                'parent_id' => '236',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Orientar el desarrollo de los sectores industrial y de servicios a fin de mitigar su impacto en los recursos hídricos.',
                'parent_id' => '236',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Fortalecer los sistemas de observación e información hidrológica y meteorológica a fin de mejorar la gestión integral de riesgos',
                'parent_id' => '237',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Fortalecer medidas de prevención de daños frente a fenómenos hidrometeorológicos y de adaptación al cambio climático, para reducir vulnerabilidad',
                'parent_id' => '237',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Desarrollar infraestructura considerando soluciones basadas en la naturaleza para la protección de centros de población y zonas productivas',
                'parent_id' => '237',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Fortalecer la atención de emergencias relacionadas con el agua para proteger a la población',
                'parent_id' => '237',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Conservar cuencas y acuíferos para mejorar la capacidad de provisión de servicios hidrológicos.',
                'parent_id' => '238',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Reducir y controlar la contaminación para evitar el deterioro de cuerpos de agua y sus impactos en la salud.',
                'parent_id' => '238',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => ' Reglamentar cuencas y acuíferos con el fin de asegurar agua en cantidad y calidad para la población y reducir la sobreexplotación',
                'parent_id' => '238',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Atender las emergencias hidroecológicas para proteger la salud de la población y el ambiente.',
                'parent_id' => '238',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Garantizar el acceso a la información para fortalecer el proceso de planeación y rendición de cuentas',
                'parent_id' => '239',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Promover la participación ciudadana a fin de garantizar su inclusión en la gestión del agua.',
                'parent_id' => '239',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Fortalecer el sistema financiero del agua para focalizar inversiones a zonas y grupos de atención prioritaria, en particular pueblos indígenas y afromexicanos',
                'parent_id' => '239',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],
            [
                'name' => 'Fortalecer las capacidades institucionales para la transformación del sector',
                'parent_id' => '239',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 2
            ],


            //Acciones puntuales

            [
                'name' => '1.1.1 Recuperar volúmenes de agua de las concesiones y asignaciones que perdieron su vigencia para destinarlos a usos público urbano y doméstico',
                'parent_id' => '240',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.1.2 Regularizar concesiones y asignaciones otorgadas a comunidades marginadas, en particular pueblos indígenas y afromexicanos, para proteger sus derechos',
                'parent_id' => '240',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.1.3 Otorgar concesiones y asignaciones colectivas de agua a pueblos indígenas y  afromexicanos',
                'parent_id' => '240',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.2.1 Reconocer y fortalecer a las organizaciones comunitarias de agua y saneamiento, en particular  pueblos indígenas y afromexicanos, buscando la participación activa y paritaria de las mujeres.',
                'parent_id' => '241',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.2.2 Promover la utilización de metodologías y tecnologías no convencionales.',
                'parent_id' => '241',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.2.2 Promover la utilización de metodologías y tecnologías no convencionales.',
                'parent_id' => '241',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.3.1 Verificar el cumplimiento de las concesiones y asignaciones de agua y permisos de descarga.',
                'parent_id' => '242',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.3.2 Proponer lineamientos para fortalecer las finanzas, que incluyan revisión de tarifas, eficiencia en la recaudación, mecanismos de transparencia y rendición de cuentas, entre otros',
                'parent_id' => '242',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.3.3 Fomentar la profesionalización y permanencia del personal de los organismos operadores de agua y  saneamiento, incluyendo cuadros directivos.',
                'parent_id' => '242',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.3.4 Promover la ciudadanización, mediante la participación de la sociedad en los órganos de gobierno de los organismos operadores de agua y saneamiento.',
                'parent_id' => '242',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.4.1 Identificar los requerimientos de infraestructura de agua potable, drenaje y tratamiento de aguas  residuales en los centros de población.',
                'parent_id' => '243',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.4.2 Programar la concesión y la asignación de agua para los proyectos regionales estratégicos',
                'parent_id' => '243',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.4.3 Revisar, y en su caso concluir, los proyectos de agua potable y saneamiento en curso',
                'parent_id' => '243',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.4.4 Impulsar el desarrollo de esquemas de coinversión entre programas presupuestarios de agua potable y saneamiento y las diversas fuentes de financiamiento',
                'parent_id' => '243',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '1.4.5 Promover la rehabilitación de plantas de tratamiento de aguas residuales municipales sin operar.',
                'parent_id' => '243',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.1.1 Conservar, rehabilitar y modernizar la infraestructura hidroagrícola (D.R., U.R. y D.T.T.)',
                'parent_id' => '244',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.1.2 Incentivar acciones de control y medición de la extracción, suministro y consumo del agua',
                'parent_id' => '244',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.1.3 Identificar la infraestructura y superficies hidroagrícolas potencialmente rescatables para la producción de alimentos',
                'parent_id' => '244',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.1.4 Fomentar el intercambio de agua en función de su calidad a fin de liberar volúmenes de agua de  calidad para consumo humano u otros usos.',
                'parent_id' => '244',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.1.5 Incentivar el uso de energías renovables y alternativas en el manejo del agua.',
                'parent_id' => '244',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.2.1 Determinar y actualizar regionalmente los volúmenes de agua requeridos en el sector agrícola',
                'parent_id' => '245',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.2.2 Promover mecanismos de coordinación, transparencia y rendición de cuentas en las asociaciones de usuarios agrícolas',
                'parent_id' => '245',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.2.3 Fomentar la capacitación de los usuarios agrícolas para el uso de mejores prácticas y nuevas  tecnologías',
                'parent_id' => '245',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.3.1 Otorgar concesiones de agua para pequeños productores agrícolas.',
                'parent_id' => '246',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.3.2 Fomentar el uso de tecnologías apropiadas para el desarrollo hidroagrícola de pequeños productores en zonas vulnerables.',
                'parent_id' => '246',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.3.3 Impulsar proyectos hidroagrícolas, programas e incentivos en zonas marginadas con visión de género',
                'parent_id' => '246',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.3.4 Promover la acuacultura en cuerpos de agua propiedad de la nación para fortalecer la autosuficiencia alimentaria y bajo criterios de protección de la biodiversidad',
                'parent_id' => '246',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.4.1 Establecer programas de colaboración para el rescate de cuencas y acuíferos sobreexplotados.',
                'parent_id' => '247',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.4.2 Diseñar y aplicar normas de uso y consumo de agua, producción limpia, economía circular por tipo de actividad económica',
                'parent_id' => '247',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.4.3 Promover que la industria de alta demanda de agua se localice en zonas con disponibilidad',
                'parent_id' => '247',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.4.4 Proveer condiciones para el aprovechamiento de la infraestructura hidráulica en la generación de energía',
                'parent_id' => '247',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '2.4.5 Promover que los proyectos de turismo contribuyan a mejorar los servicios de agua y saneamiento de comunidades aledañas',
                'parent_id' => '247',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.1.1 Impulsar la modernización de la infraestructura de medición y observación hidrológica, meteorológica y climatológica',
                'parent_id' => '248',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.1.2 Implementar nuevas metodologías y plataformas tecnológicas para mejorar los pronósticos meteorológicos e hidrológicos',
                'parent_id' => '248',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.1.3 Fomentar el intercambio de información relativa al agua con las diferentes dependencias de la administración pública y con la sociedad.',
                'parent_id' => '248',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.2.1 Delimitar cauces y cuerpos de agua de propiedad nacional y sus zonas federales',
                'parent_id' => '249',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.2.2 Mejorar los sistemas de alerta temprana y las acciones de prevención y mitigación ante fenómenos hidrometeorológicos',
                'parent_id' => '249',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.2.3 Elaborar y actualizar los atlas de riesgos hidrometeorológicos, a nivel municipal y estatal para centros de población, pueblos indígenas y afromexicanos, áreas productivas y zonas turísticas',
                'parent_id' => '249',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.2.4 Fortalecer programas y acciones contra la sequía.',
                'parent_id' => '249',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.2.5 Minimizar el impacto de inundaciones mediante protocolos que aseguren la correcta operación  de la infraestructura',
                'parent_id' => '249',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.2.6 Impulsar la adecuación de las reglas de operación de los fondos de desastre para agilizar su aplicación e incentivar la prevención',
                'parent_id' => '249',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.3.1 Desarrollar y adaptar proyectos para la construcción, operación y mantenimiento de infraestructura en cauces, en particular en zonas de alta vulnerabilidad.',
                'parent_id' => '250',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.3.2 Identificar zonas naturales para regular escurrimientos y mitigar los impactos de inundaciones en centros de población.',
                'parent_id' => '250',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.4.1 Fortalecer la coordinación entre órdenes de gobierno y sectores para atender emergencias, considerando las necesidades diferenciadas de la población a través del Plan Nacional de Operación',
                'parent_id' => '251',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.4.2 Conservar y rehabilitar el equipamiento especializado para la atención de emergencias y ampliar la capacidad de los Centros Regionales de Atención de Emergencias',
                'parent_id' => '251',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.4.3 Reconstruir la infraestructura hidráulica afectada por fenómenos hidrometeorológicos extremos',
                'parent_id' => '251',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.4.4 Brindar servicios de agua potable, alcantarillado y saneamiento, de manera emergente y temporal, en  localidades afectadas y reestablecer la provisión de agua en zonas productivas',
                'parent_id' => '251',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '3.4.5 Capacitar a servidores públicos y representantes de la sociedad para atender a la población en caso de emergencias hidrometeorológicas',
                'parent_id' => '251',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.1.1 Promover la conservación, la restauración y el ordenamiento de las cuencas, en particular de las partes altas',
                'parent_id' => '252',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.1.2 Regular los sistemas de captación de agua de lluvia para evitar la afectación a terceros',
                'parent_id' => '252',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.1.3 Desarrollar estrategias para contar con caudal ecológico en ríos y humedales para fortalecer el ciclo  hidrológico',
                'parent_id' => '252',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.1.4 Regular la extracción de materiales pétreos y construcción de obras en bienes de propiedad nacional',
                'parent_id' => '252',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.1.5 Impulsar la protección de las zonas de recarga de acuíferos e incentivar la recarga inducida.',
                'parent_id' => '252',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.2.1 Identificar áreas prioritarias de atención en función de la calidad de los cuerpos de agua.',
                'parent_id' => '253',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.2.2 Vigilar el cumplimiento de los límites máximos permisibles de contaminantes en las descargas',
                'parent_id' => '253',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.2.3 Establecer o adecuar condiciones particulares de descarga de los principales cuerpos de agua.',
                'parent_id' => '253',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.2.4 Promover la reducción de la contaminación difusa asociada con agroquímicos',
                'parent_id' => '253',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.2.5 Reforzar mecanismos para controlar la contaminación derivada de actividades extractivas y de la  disposición final de residuos sólidos',
                'parent_id' => '253',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.3.1 Reglamentar cuencas bajo decreto de reservas y acuíferos en suspensión de libre alumbramiento',
                'parent_id' => '254',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.3.2 Actualizar o establecer decretos de veda, reservas y zonas reglamentadas para la protección y  recuperación de agua',
                'parent_id' => '254',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.3.3 Establecer vedas por situaciones de emergencia asociadas a contaminación que pongan en riesgo la salud de la población',
                'parent_id' => '254',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.3.4 Establecer acciones de vigilancia y control en acuíferos y cuencas sobreexplotadas o de atención prioritaria por contaminación',
                'parent_id' => '254',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.4.1 Fortalecer la coordinación entre dependencias y órdenes de gobierno durante desastres hidroecológicos.',
                'parent_id' => '255',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.4.2 Actualizar instrumentos para la prevención y atención de contingencias hidroecológicas',
                'parent_id' => '255',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.4.3 Vigilar el cumplimiento irrestricto a la normatividad en materia de transporte terrestre o marítimo y disposición final de sustancias tóxicas (en cuerpos de aguas nacionales).',
                'parent_id' => '255',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '4.4.4 Implementar mecanismos de resolución de conflictos socioambientales derivados de las  contingencias hidroecológicas.',
                'parent_id' => '255',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.1.1 Mejorar el funcionamiento del Sistema Nacional de Información del Agua en términos de interoperabilidad, calidad, oportunidad y que de manera prioritaria la información esté orientada a atender a la población más vulnerable',
                'parent_id' => '256',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.1.2 Transparentar el proceso de otorgamiento de concesiones y asignaciones de aguas nacionales  y bienes inherentes.',
                'parent_id' => '256',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.1.3 Garantizar el acceso a información clara y oportuna para la ciudadanía relacionada con la  materia objeto del presente Programa, en particular para los pueblos indígenas y afromexicanos.',
                'parent_id' => '256',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.1.4 Mejorar la vinculación intersectorial y la implementación conjunta de acciones',
                'parent_id' => '256',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.1.5 Fortalecer y socializar el sistema de gestión de proyectos del sector hídrico orientado a que  la población que será beneficiaria de un proyecto pueda tener un rol vigilante.',
                'parent_id' => '256',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.1.6 Fortalecer la cooperación internacional y la participación del sector en iniciativas regionales y  globales',
                'parent_id' => '256',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.2.1 Fortalecer la democratización y pluralidad en la integración y el funcionamiento de los consejos de cuenca y sus órganos auxiliares para garantizar que los participantes defiendan los intereses del pueblo y no de grupos de interés particulares.',
                'parent_id' => '257',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.2.2 Promover la participación social en planeación, vigilancia y monitoreo de la política hídrica y la gestión de proyectos',
                'parent_id' => '257',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.2.3 Incorporar la igualdad sustantiva de mujeres y hombres, así como la representación de grupos vulnerables en los Consejos de Cuenca',
                'parent_id' => '257',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.2.4 Fortalecer el ejercicio de los derechos a la información, la participación y a la consulta previa, libre e informada de pueblos indígenas, pueblos originarios y afromexicanos en los temas relativos al agua',
                'parent_id' => '257',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.2.5 Fomentar la participación de la sociedad en materia de agua, mediante estrategias de comunicación y educación',
                'parent_id' => '257',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.3.1 Proponer la diversificación de fuentes de financiamiento y modernización de los sistemas tarifarios para garantizar los derechos humanos al agua y al saneamiento',
                'parent_id' => '258',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.3.2 Impulsar, ante las instancias que resulten procedentes, los esquemas de coinversión entre los  sectores público, privado y social en proyectos del sector agua.',
                'parent_id' => '258',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.3.3 Proponer mecanismos de transparencia, seguimiento y evaluación de las inversiones del sector hídrico',
                'parent_id' => '258',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.3.4 Redirigir subsidios e incentivos a regiones de atención prioritaria, en particular pueblos indígenas y afromexicanos',
                'parent_id' => '258',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.4.1 Fortalecer los criterios de transparencia y rendición de cuentas en el sector agua.',
                'parent_id' => '259',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.4.2 Establecer estrategias de combate a la corrupción en el sector agua',
                'parent_id' => '259',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.4.3 Fomentar una actitud de servicio a la ciudadanía en el sector agua.',
                'parent_id' => '259',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.4.4 Elaborar y proponer reformas o un nuevo marco jurídico en materia de agua',
                'parent_id' => '259',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.4.5 Capacitar a los servidores públicos para asumir una agenda de género y derechos humanos en el sector agua',
                'parent_id' => '259',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],
            [
                'name' => '5.4.6 Fortalecer las capacidades de funcionarios para la atención de pueblos indígenas y afromexicanos en el sector agua',
                'parent_id' => '259',
                'politica_publica_id' => 4,
                'politica_publica_nivel_id' => 3
            ],

        ]);
        //Sedeer de PROMARNAT Nivel 1 Estrategia Prioritaria
        DB::table('politicas_publicas_elementos')->insert([
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 1,
                'name' => 'Promover la conservación, protección, restauración y aprovechamiento sustentable de los ecosistemas y su biodiversidad con enfoque territorial y de derechos humanos, considerando las regiones bioculturales, a fin de mantener ecosistemas funcionales que son la base del bienestar de la población.'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 1,
                'name' => 'Fortalecer la acción climática a fin de transitar hacia una economía baja en carbono y una población, ecosistemas, sistemas productivos e infraestructura estratégica resilientes, con el apoyo de los conocimientos científicos, tradicionales y tecnológicos disponibles.'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 1,
                'name' => 'Promover al agua como pilar de bienestar, manejada por instituciones transparentes, confiables, eficientes y eficaces que velen por un medio ambiente sano y donde una sociedad participativa se involucre en su gestión.'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 1,
                'name' => 'Promover un entorno libre de contaminación del agua, el aire y el suelo que contribuya al ejercicio pleno del derecho a un medio ambiente sano.'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 1,
                'name' => 'Fortalecer la gobernanza ambiental a través de la participación ciudadana libre, efectiva, significativa y corresponsable en las decisiones de política pública, asegurando el acceso a la justicia ambiental con enfoque territorial y de derechos humanos y promoviendo la educación y cultura ambiental.'
            ],
        ]);
        DB::table('politicas_publicas_elementos')->insert([
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Fomentar la conservación, protección y monitoreo de ecosistemas, agroecosistemas y su biodiversidad para garantizar la provisión y calidad de sus servicios ambientales, considerando instrumentos normativos, usos, costumbres, tradiciones y cosmovisiones de pueblos indígenas, afromexicanos y comunidades locales.',
                'parent_id' => '347'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Promover el aprovechamiento sustentable de los recursos naturales y la biodiversidad, basado en la planeación participativa con respeto a la autonomía y libre determinación, con enfoque territorial, de cuencas y regiones bioculturales, impulsando el desarrollo regional.',
                'parent_id' => '347'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Restaurar los ecosistemas, con énfasis en zonas críticas, y recuperar las especies prioritarias para la conservación con base en el mejor conocimiento científico y tradicional disponibles.',
                'parent_id' => '347'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Promover, a través de los instrumentos de planeación territorial, un desarrollo integral, equilibrado y sustentable de los territorios que preserve los ecosistemas y sus servicios ambientales, con un enfoque biocultural y de derechos humanos.',
                'parent_id' => '347'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Reducir la vulnerabilidad ante el cambio climático mediante el diseño, integración e implementación de criterios de adaptación en instrumentos y herramientas para la toma de decisiones con un enfoque preventivo y de largo plazo que permita la mejora en el bienestar.',
                'parent_id' => '348'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Diseñar, establecer y coordinar políticas e instrumentos para reducir emisiones de gases y compuestos de efecto invernadero, así como promover y conservar sumideros de carbono, en concordancia con los compromisos nacionales e internacionales.',
                'parent_id' => '348'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Fortalecer y alinear instrumentos de política y medios de implementación para la mitigación y adaptación al cambio climático, asegurando la acción coordinada de los tres órdenes de gobierno y la participación social.',
                'parent_id' => '348'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Promover el desarrollo y fortalecimiento coordinado de capacidades institucionales de los diferentes órdenes de gobierno para su participación en la planeación, diseño, ejecución, seguimiento y evaluación, así como reporte de medidas de mitigación y adaptación, con respeto a los derechos colectivos.',
                'parent_id' => '348'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Fomentar la educación, capacitación, investigación y comunicación en materia de cambio climático para motivar la corresponsabilidad de los distintos agentes en los esfuerzos de mitigación y adaptación, con enfoque biocultural.',
                'parent_id' => '348'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Garantizar progresivamente los derechos humanos al agua y al saneamiento, especialmente en la población más vulnerable.',
                'parent_id' => '349'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Aprovechar eficientemente el agua para contribuir al desarrollo sustentable de los sectores productivos.',
                'parent_id' => '349'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Preservar la integralidad del ciclo del agua a fin de garantizar los servicios hidrológicos que brindan cuencas y acuíferos.',
                'parent_id' => '349'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Gestionar de manera eficaz, eficiente, transparente y participativa medidas de prevención, inspección, remediación y reparación del daño para prevenir y controlar la contaminación y la degradación.',
                'parent_id' => '350'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Fomentar el cambio y la innovación en los métodos de producción y consumo de bienes y servicios, a fin de reducir la extracción de recursos naturales, el uso de energía y minimizar los efectos de las actividades humanas sobre el medio ambiente.',
                'parent_id' => '350'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Articular de manera efectiva la acción gubernamental con la participación equilibrada de los diferentes actores y grupos sociales para contribuir a una gestión pública, efectiva y eficiente, con enfoque territorial, de igualdad de género y de sustentabilidad.',
                'parent_id' => '351'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Impulsar procesos de relación y espacios de diálogo con respeto a las formas de organización de colectivos, grupos, comunidades y otras organizaciones para atender las problemáticas socioambientales específicas que afectan su bienestar y medios de vida.',
                'parent_id' => '351'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Impulsar la participación ciudadana abierta, inclusiva y culturalmente pertinente, en la toma de decisiones ambientales, garantizando el derecho de acceso a la información, transparencia proactiva y el pleno respeto de los derechos humanos, con perspectiva de género y etnia.',
                'parent_id' => '351'
            ],
            [
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 2,
                'name' => 'Fortalecer la cultura y educación ambiental, que considere un enfoque de derechos humanos, de igualdad de género e interculturalidad, para la formación de una ciudadanía crítica que participe de forma corresponsable en la transformación hacia la sustentabilidad.',
                'parent_id' => '351'
            ]
        ]);

        DB::table('politicas_publicas_elementos')->insert([
            [
                'name' => '1.1.1.- Consolidar y promover las áreas naturales protegidas, reservas comunitarias, privadas y otros esquemas de conservación, privilegiando la representatividad y la conectividad de los ecosistemas, la conservación de especies prioritarias y el patrimonio biocultural de las comunidades que las habitan.',
                'parent_id' => '352',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.1.2.- Impulsar mediante la participación equitativa de mujeres, jóvenes y pueblos y comunidades indígenas y afromexicanas, el manejo efectivo de las áreas naturales protegidas federales y otros esquemas de conservación con la participación de los sectores involucrados y las comunidades locales a fin de garantizar la provisión y calidad de sus servicios ambientales.',
                'parent_id' => '352',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.1.3.- Promover la incorporación de superficies a esquemas de pago por servicios ambientales y otros esquemas bajo un enfoque de conservación activa, así como la protección de ecosistemas relacionados con el agua con enfoque de microcuencas, con distribución equitativa de beneficios y respetando derechos colectivos.',
                'parent_id' => '352',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.1.4.- Regular las actividades productivas y fortalecer la coordinación del manejo del fuego, de la detección y control de plagas y especies exóticas invasoras, a fin de mantener la integridad de los ecosistemas y los servicios ambientales.',
                'parent_id' => '352',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.1.5.- Combatir, con la participación de distintos sectores y comunidades locales, la tala ilegal y el tráfico de vida silvestre para evitar el deterioro de los ecosistemas.',
                'parent_id' => '352',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.1.6.- Promover una política integral de bioseguridad que salvaguarde la biodiversidad, las personas y la inocuidad de los alimentos de los posibles efectos de los organismos genéticamente modificados y de los desarrollos biotecnológicos, así como de especies invasoras y compuestos tóxicos.',
                'parent_id' => '352',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.2.1.- Impulsar, con la participación de las comunidades, actividades productivas y reproductivas sustentables en áreas naturales protegidas y zonas de influencia, considerando el enfoque agroecológico y contribuyendo a generar redes locales de valor reduciendo las condiciones de marginación y las desigualdades de género.',
                'parent_id' => '353',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.2.2.- Orientar el manejo forestal sustentable, en particular el comunitario, y las actividades del sector forestal hacia regiones prioritarias, considerando su situación de vulnerabilidad y marginación social y con pertinencia biocultural.',
                'parent_id' => '353',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.2.3.- Diseñar y coordinar la implementación de instrumentos para apoyar y gestionar sistemas agroecológicos, agroforestales y agrosilvopastoriles promoviendo la participación efectiva de mujeres y jóvenes.',
                'parent_id' => '353',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.2.4.- Impulsar el desarrollo forestal sustentable y la competitividad del sector forestal a través de la efectiva aplicación del marco normativo y regulatorio y con técnicas apropiadas.',
                'parent_id' => '353',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.2.5.- Fortalecer esquemas de aprovechamiento sustentable extractivos y no extractivos de la biodiversidad, considerando prácticas tradicionales y promoviendo la participación en términos de género, curso de vida, comunidades y pueblos indígenas y afromexicanos.',
                'parent_id' => '353',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.3.1.- Promover la restauración productiva mediante la reconversión de tierras degradadas a sistemas agroforestales y agroecológicos, preferentemente en áreas alteradas por fenómenos naturales, especies exóticas invasoras y causas antropogénicas.',
                'parent_id' => '354',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.3.2.- Fomentar y difundir la investigación científica y articularla con los conocimientos tradicionales y saberes locales para fortalecer la toma de decisiones sobre restauración productiva, rehabilitación de ecosistemas y la recuperación de especies prioritarias.',
                'parent_id' => '354',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.3.3.- Restaurar los ecosistemas naturales terrestres, dulceacuícolas y marinos, con énfasis en zonas críticas, para recuperar los servicios ambientales que proveen mediante un enfoque interdisciplinario, integral, intersectorial, participativo y territorial de largo plazo.',
                'parent_id' => '354',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.3.4.- Mejorar la calidad del agua en cauces, vasos, acuíferos y zonas costeras, con enfoque de manejo integral de cuencas, para la preservación de los ecosistemas y el bienestar de las comunidades locales.',
                'parent_id' => '354',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.3.5.-Favorecer la recuperación de especies prioritarias a través de la protección de sus poblaciones y hábitat, su reintroducción y manejo, disminución de los factores de presión y tráfico ilegal, con vigilancia y monitoreo efectivos, distribución equitativa de beneficios y corresponsabilidad social.',
                'parent_id' => '354',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.4.1.- Armonizar, junto con otras dependencias de la administración pública federal y otros órdenes de gobierno, incluyendo a las autoridades comunitarias, los instrumentos de ordenamiento territorial para promover un desarrollo integral, equilibrado y sustentable del territorio.',
                'parent_id' => '355',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.4.2.- Formular y aplicar instrumentos de planeación territorial participativa, considerando las cosmovisiones culturales, étnicas, etarias y de género, que promuevan la autogestión de los recursos naturales por parte de las comunidades, respetando la autonomía y libre determinación de pueblos indígenas y afromexicanos.',
                'parent_id' => '355',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '1.4.3.- Desarrollar acciones de ordenamiento territorial y ecológico para preservar las cuencas y evitar afectaciones a los acuíferos, contribuyendo a preservar los recursos hídricos del país, promoviendo los esquemas de gobernanza con participación social.',
                'parent_id' => '355',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.1.1.- Coordinar e instrumentar procesos de adaptación mediante la integración y articulación de acciones intersectoriales en el territorio, priorizando la atención en municipios y, en su caso, alcaldías, de alta vulnerabilidad ante los impactos del cambio climático.',
                'parent_id' => '356',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.1.2.- Integrar criterios de adaptación al cambio climático en el diseño, actualización, implementación y evaluación de instrumentos de planeación, gestión, manejo y ordenamiento ecológico del territorio en los tres órdenes de gobierno, considerando los escenarios de cambio climático y el enfoque de cuenca.',
                'parent_id' => '356',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.1.3.- Coordinar y fortalecer la actualización y el acceso oportuno a la información para la consolidación y mejora de los protocolos y sistemas de alerta temprana ante fenómenos hidrometeorológicos, considerando las capacidades locales y la identidad cultural de la población.',
                'parent_id' => '356',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.1.4.- Diseñar e implementar estrategias de restauración y conservación de ecosistemas marino-costeros que potencien la captura de carbono azul y contribuyan a proteger a la población, la infraestructura y las actividades productivas en las zonas marinas y costeras.',
                'parent_id' => '356',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.1.5.- Coordinar e implementar, en el marco del Sistema Nacional de Cambio Climático, la Política Nacional de Adaptación al Cambio Climático tomando en cuenta las Contribuciones Determinadas a nivel Nacional, con enfoque de género y derechos humanos.',
                'parent_id' => '356',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.2.1.- Concertar acciones en el sector y con otras dependencias que promuevan la transición energética con fuentes limpias, preferentemente renovables, garantizando la protección ambiental y procurando el bienestar de la población, particularmente de las comunidades más vulnerables, con enfoque de inclusión y movilidad social y económica.',
                'parent_id' => '357',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.2.2.- Reducir emisiones por deforestación y degradación del suelo, impulsando el modelo de manejo integrado del territorio, instrumentos de fomento al desarrollo rural bajo en carbono y resiliente, la conservación e incremento de acervos de carbono forestal y la distribución equitativa de beneficios.',
                'parent_id' => '357',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.2.3.- Impulsar sistemas de movilidad sustentable, públicos y privados, de bajas emisiones, eficientes, seguros, inclusivos, asequibles y accesibles, con los últimos avances tecnológicos, reconociendo patrones diferenciados de movilidad entre hombres y mujeres de distintos grupos sociales, en comunidades, ciudades y zonas metropolitanas.',
                'parent_id' => '357',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.2.4.- Promover un desarrollo urbano sustentable, incluyente y compacto, de movilidad y vivienda sustentables, con manejo de residuos sólidos y aguas residuales que reduzca las emisiones de efecto invernadero y que incremente la resiliencia y la capacidad adaptativa de las ciudades y zonas metropolitanas.',
                'parent_id' => '357',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.2.5.- Establecer, fortalecer y fomentar, en coordinación con dependencias de la APF, instrumentos de política y normativos para la reducción de emisiones de GyCEI en sectores estratégicos con enfoque de economía circular para cumplir las metas nacionales e internacionales de cambio climático.',
                'parent_id' => '357',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.3.1.- Actualizar y fortalecer los instrumentos de la política nacional de cambio climático, así como promover su armonización a nivel estatal y municipal a fin de que den cumplimiento y aumenten la ambición de las Contribuciones Determinadas a nivel nacional.',
                'parent_id' => '358',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.3.2.- Movilizar y aprovechar fuentes de financiamiento público, privado, nacional e internacional que permitan implementar acciones de mitigación y adaptación para el cumplimiento de las Contribuciones Determinadas a nivel Nacional.',
                'parent_id' => '358',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.3.3.- Consolidar sistemas de información sobre cambio climático que apoyen el monitoreo, evaluación y reporte de las metas nacionales de mitigación y adaptación, e identifiquen necesidades y oportunidades de financiamiento, capacitación, transferencia de tecnología y reducción de vulnerabilidad.',
                'parent_id' => '358',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.3.4.- Fortalecer la evaluación de la política nacional climática a fin de conocer y mejorar su eficiencia y eficacia y los avances en el combate al cambio climático.',
                'parent_id' => '358',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.4.1.- Promover el fortalecimiento del marco legal y la arquitectura institucional en las entidades federativas, municipios y, en su caso, alcaldías, para diseñar, implementar y evaluar acciones y medidas en materia de cambio climático.',
                'parent_id' => '359',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.4.2.- Orientar y acompañar a los diferentes órdenes de gobierno en el diseño y desarrollo de instrumentos de política para la mitigación y adaptación con enfoque territorial basado en ecosistemas, visión comunitaria, bioculturalidad y sustentabilidad.',
                'parent_id' => '359',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.4.3.- Fortalecer la co-creación de capacidades locales y la transparencia de la implementación de medidas para el combate al cambio climático en el marco del Sistema Nacional de Cambio Climático.',
                'parent_id' => '359',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.5.1.- Incentivar, integrar y difundir la investigación en materia de cambio climático que permita contar con la mejor información y conocimiento científico disponible para la toma de decisiones.',
                'parent_id' => '360',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.5.2.- Impulsar una educación y cultura ambiental para coadyuvar a la mitigación y adaptación del cambio climático y promover modificaciones en los patrones de producción, consumo y ocupación del territorio.',
                'parent_id' => '360',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.5.3.- Promover la generación, integración, acceso, uso e intercambio de información en materia de cambio climático, considerando el diálogo de saberes, así como los avances científicos y tecnológicos para la toma de decisiones.',
                'parent_id' => '360',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.5.4.- Fomentar la participación social informada, organizada y culturalmente pertinente en el ciclo de la política pública en materia de cambio climático y ordenamiento territorial, promoviendo la intervención de mujeres, jóvenes y pueblos y comunidades indígenas y afromexicanas.',
                'parent_id' => '360',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '2.5.5.- Mejorar la comunicación y la difusión de información sobre vulnerabilidad al cambio climático, así como las oportunidades sociales, ambientales y económicas de un desarrollo bajo en carbono y resiliente al cambio del clima.',
                'parent_id' => '360',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '3.1.1.- Proteger la disponibilidad de agua en cuencas y acuíferos para la implementación del derecho humano al agua.',
                'parent_id' => '361',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '3.1.2.- Abatir el rezago en el acceso al agua potable y al saneamiento para elevar el bienestar en los medios rural y periurbano.',
                'parent_id' => '361',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '3.1.3.- Fortalecer a los organismos operadores de agua y saneamiento, a fin de asegurar servicios de calidad a la población',
                'parent_id' => '361',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '3.1.4.- Atender los requerimientos de infraestructura hidráulica para hacer frente a las necesidades presentes y futuras.',
                'parent_id' => '361',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '3.2.1.- Aprovechar eficientemente el agua en el sector agrícola para contribuir a la seguridad alimentaria y el bienestar.',
                'parent_id' => '362',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '3.2.2.- Fortalecer a las asociaciones de usuarios agrícolas a fin de mejorar su desempeño.',
                'parent_id' => '362',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '3.2.3.- Apoyar y promover proyectos productivos en zonas marginadas, en particular pueblos indígenas y afromexicanos, para impulsar su desarrollo',
                'parent_id' => '362',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '3.2.4.- Orientar el desarrollo de los sectores industrial y de servicios a fin de mitigar su impacto en los recursos hídricos.',
                'parent_id' => '362',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '3.3.1.- Conservar cuencas y acuíferos para mejorar la capacidad de provisión de servicios hidrológicos.',
                'parent_id' => '363',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '3.3.2.- Reglamentar cuencas y acuíferos con el fin de asegurar agua en cantidad y calidad para la población y reducir la sobreexplotación',
                'parent_id' => '363',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '3.3.3.- Atender las emergencias hidroecológicas para proteger la salud de la población y el ambiente.',
                'parent_id' => '363',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '4.1.1.- Impulsar una gestión integral del desempeño ambiental y de monitoreo y evaluación con información de calidad, suficiente, constante y transparente para prevenir la contaminación y evitar la degradación ambiental.',
                'parent_id' => '364',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '4.1.2.- Actualizar y fortalecer el marco normativo y regulatorio ambiental en materia de emisiones, descargas, residuos peligrosos y transferencia de contaminantes para prevenir, controlar, mitigar, remediar y reparar los daños ocasionados por la contaminación del aire, suelo y agua.',
                'parent_id' => '364',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '4.1.3.- Promover, vigilar y verificar el cumplimiento del marco regulatorio y normativo en materia de recursos naturales, obras y actividades, incluyendo las empresariales, que puedan generar un impacto ambiental, para mantener la integridad del medio ambiente.',
                'parent_id' => '364',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '4.1.4.- Fortalecer la planeación, gestión, inspección y vigilancia con enfoque de manejo del riesgo, que conserve el ambiente, mejore el desempeño de procesos, la integridad de instalaciones y salvaguarde las personas.',
                'parent_id' => '364',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '4.1.5.- Reducir y controlar la contaminación para evitar el deterioro de cuerpos de agua y sus impactos en la salud, mediante el reforzamiento de la normatividad y acciones coordinadas en áreas prioritarias.',
                'parent_id' => '364',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '4.2.1.- Promover el cambio y la innovación en los métodos de producción y consumo mediante la adopción de tecnologías que permitan el uso sustentable de los recursos considerando buenas prácticas y estándares internacionales y revalorizando los sistemas de producción y consumo tradicionales.',
                'parent_id' => '365',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '4.2.2.- Impulsar el uso y manejo de energías bajas en carbono y sustentables en procesos industriales, productivos, servicios públicos y residenciales.',
                'parent_id' => '365',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '4.2.3.- Fomentar modalidades de producción y consumo sustentables con el fin de reducir la extracción de recursos naturales, el uso de energía, y para minimizar los efectos de las actividades humanas sobre el ambiente.',
                'parent_id' => '365',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '4.2.4.- Promover la economía circular con el fin de fomentar el uso eficiente de los recursos y evitar la contaminación y degradación a través de un enfoque en el ciclo de vida de bienes y servicios en las cadenas productivas.',
                'parent_id' => '365',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '4.2.5.- Disminuir las externalidades negativas al medio ambiente y las afectaciones sociales mediante el fortalecimiento de la colaboración entre el sector privado y público en el desarrollo de instrumentos económicos y financieros que generen incentivos, en un marco de respeto a los derechos humanos.',
                'parent_id' => '365',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.1.1.-Impulsar una planeación y gestión gubernamental que incluya la participación ciudadana y favorezca la alineación de políticas, programas públicos e incentivos de los tres órdenes de gobierno, bajo un enfoque de manejo integrado del territorio.',
                'parent_id' => '366',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.1.2.- Impulsar una gestión pública integral, efectiva y democrática en materia ambiental mediante el desarrollo y fortalecimiento de capacidades institucionales que favorezcan la articulación entre sectores y órdenes de gobierno.',
                'parent_id' => '366',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.1.3.- Incorporar en el diseño, implementación y evaluación de la política pública ambiental criterios y procesos que reconozcan y favorezcan la participación plena, efectiva y equitativa de la sociedad, incluyendo grupos en situación de mayor vulnerabilidad, de colectivos y movimientos socioambientales.',
                'parent_id' => '366',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.1.4.- Fomentar y fortalecer la investigación científica y los sistemas de información ambiental para la toma de decisiones, diseño, implementación, evaluación y rendición de cuentas de la política ambiental, facilitando a la ciudadanía su accesibilidad de manera sistemática, proactiva, oportuna, regular y culturalmente pertinente para las mujeres, jóvenes y población indígena y afromexicana.',
                'parent_id' => '366',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.1.5.- Impulsar el cumplimiento de los compromisos ambientales internacionales y fortalecer el quehacer ambiental a través de la cooperación internacional, asegurando la participación activa de la ciudadanía.',
                'parent_id' => '366',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.1.6.- Establecer y concretar acuerdos institucionales para una efectiva presencia del sector ambiental con otros sectores de gobierno y su articulación desde la escala local a la nacional, asegurando la participación ciudadana.',
                'parent_id' => '366',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.1.7.- Promover la participación e involucramiento del sector privado en la innovación, movilización de recursos y transformación de procesos productivos, con respeto a los derechos humanos.',
                'parent_id' => '366',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.2.1.- Fortalecer y construir mecanismos, instrumentos y herramientas específicas para impulsar procesos de diálogo y construcción de acuerdos dirigidos a procurar la resolución de problemas colectivos en territorios que afecten ecosistemas, formas de vida y/o tradiciones culturales, en el marco jurídico e institucional existente.',
                'parent_id' => '367',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.2.2.- Generar las capacidades institucionales para la prevención, atención, resolución y transformación positiva de conflictos socioambientales, mediante la creación y fortalecimiento de los mecanismos y protocolos existentes.',
                'parent_id' => '367',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.2.3.- Promover el acceso a la justicia ambiental y la protección de defensoras y defensores ambientales y del territorio mediante marcos normativos y procedimientos administrativos efectivos, oportunos y transparentes, con enfoque de derechos humanos, igualdad de género y con pertinencia cultural.',
                'parent_id' => '367',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.3.1.- Promover la participación libre, previa, informada y activa en la toma de decisiones de la política ambiental, para que ésta responda a necesidades sociales e impulse la corresponsabilidad de los actores involucrados.',
                'parent_id' => '368',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.3.2.- Promover la participación equitativa de las mujeres, jóvenes y pueblos indígenas y afromexicanos en mecanismos de diálogo, consulta y toma de decisiones ambientales a nivel nacional, regional y local, cumpliendo los instrumentos nacionales e internacionales de derechos humanos, incluyendo el Convenio 169 de la OIT.',
                'parent_id' => '368',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.3.3.- Realizar acciones de educación, difusión, capacitación e investigación en temas de género y ambiente, las cuales incidan en el diseño, implementación y evaluación de políticas públicas, así como el acceso, uso y disfrute de beneficios del aprovechamiento y la conservación de los recursos naturales.',
                'parent_id' => '368',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.3.4.- Promover la participación de mujeres y hombres, organizaciones sociales, de la sociedad civil y académicas en la administración, preservación y cultura del agua a fin de fomentar su uso sustentable.',
                'parent_id' => '368',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.3.5.- Asegurar el acceso a la información ambiental pública, oportuna, verificable, inteligible, relevante y culturalmente pertinente, con apego a los esquemas de transparencia proactiva.',
                'parent_id' => '368',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.4.1.- Establecer una nueva relación armónica y de convivencia respetuosa con la naturaleza mediante el impulso de una ética ambiental que considere la experiencia y los saberes de las mujeres y hombres de las comunidades indígenas y rurales del país y con perspectiva hacia las generaciones presentes y futuras.',
                'parent_id' => '369',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.4.2.- Coordinar procesos formativos y de comunicación con los tres órdenes de gobierno y diferentes sectores sociales, que favorezcan modos de vida sustentables, considerando los saberes tradicionales, con base en los enfoques de igualdad de género, cultura para la paz e interculturalidad.',
                'parent_id' => '369',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.4.3.- Contribuir a la formación de una ciudadanía ambiental crítica, informada y propositiva que participe en el ciclo de la política pública que incide en la sustentabilidad y en la reducción de desigualdades a través de la promoción de la cultura y educación ambiental con un enfoque de derechos.',
                'parent_id' => '369',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
            [
                'name' => '5.4.4.- Impulsar la transversalidad de la educación ambiental en los diferentes organismos del sector medio ambiente mediante la coordinación intra e interinstitucional, considerando un enfoque territorial, biocultural, de género y agroecológico.',
                'parent_id' => '369',
                'politica_publica_id' => 5,
                'politica_publica_nivel_id' => 3,
            ],
        ]);
        // Politicas del PECC nivel 1
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
    }
}
