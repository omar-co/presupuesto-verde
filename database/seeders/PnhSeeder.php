<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PoliticaPublicaElemento;

class PnhSeeder extends Seeder
{
    /**
     * Seeder de Politica Nacional Hidrica PNH
     */
    public function run(): void
    {
        DB::table('politicas_publicas_elementos')->insert([
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
        ]);
        DB::table('politicas_publicas_elementos')->insert([
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
        ]);
        DB::table('politicas_publicas_elementos')->insert([
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
    }
}
