<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PoliticaPublicaElemento;

class EncaSeeder extends Seeder
{
    /**
     * Seeder de Calidad de Aire ENCA
     */
    public function run(): void
    {
        DB::table('politicas_publicas_elementos')->insert([
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
                "name" => "3. Empresas comprometidas con la calidad del aire",
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
        ]);
        DB::table('politicas_publicas_elementos')->insert([


            [
                'name' => 'Coordinar la gestión de la calidad del aire de manera compartida entre los tres órdenes de gobierno para reducir las concentraciones de contaminantes atmosféricos en el territorio nacional.',
                'parent_id' => '135',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Promover el fortalecimiento de los ordenamientos jurídicos para articular las competencias y responsabilidades de las instituciones que participan en la gestión de la calidad del aire y desarrollar sus capacidades en materia de capital humano calificado, presupuesto e indicadores de  desempeño. ',
                'parent_id' => '136',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Fortalecer el sistema regulatorio de incentivos y obligaciones que oriente la transformación de los procesos de las empresas para que reduzcan la  emisión de contaminantes. ',
                'parent_id' => '137',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Consolidar los instrumentos y la investigación científica y técnica que generan información sobre la calidad del aire para articularlos con las políticas y programas que la gestionan.',
                'parent_id' => '138',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 2,
            ],
            [
                'name' => 'Establecer mecanismos para que la población conozca el impacto de la contaminación atmosférica en sus vidas y participe activamente para mejorar la calidad del aire',
                'parent_id' => '139',
                'politica_publica_id' => 3,
                'politica_publica_nivel_id' => 2,
            ],
        ]);
        DB::table('politicas_publicas_elementos')->insert([
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
        ]);
        DB::table('politicas_publicas_elementos')->insert([
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
        ]);
    }
}
