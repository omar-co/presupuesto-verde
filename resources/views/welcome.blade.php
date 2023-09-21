<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://framework-gb.cdn.gob.mx/gm/v4/image/favicon.ico" rel="shortcut icon">
        <link href="https://framework-gb.cdn.gob.mx/gm/v4/css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>Herramienta de capacitación para la identificación y cuantificación de acciones con vinculación climática</title>

    </head>
    <body>
    <style>

        .home-buttons {
            border: 2px solid #B38E5D;
            border-radius: 10px;
            height: 100%;
            margin: 5px;
            transition: .5s;
            padding: 20px;

        }
        .home-buttons a {
            color: #0C231E;
            text-decoration: none;
        }

        .home-buttons:hover {
            transform: scale(1.03);
            cursor: pointer;
            color: #0C231E;
            text-decoration: none;
        }
        .indent{
            margin-left: 3rem;
        }
        .marco-dorado{
            border: 2px solid #b38e5d !important;
            border-radius: 1rem !important;
            padding: 3rem;
        }
        .letra{
            font-size: 2rem !important;
        }


    </style>
    <main class="page">
        <div class="container">
            <hr>
            <div class="row" >
                <div class="col-md-12 border marco-dorado ">
                    <p class="text-center font-bold pt-1">
                        <strong class="letra">Mensaje de bienvenida</strong>
                    </p>
                    <div>
                        <p>
                            Esta plataforma permitirá identificar las acciones relacionadas con ingresos y gastos del Gobierno
                            Federal que pueden ser designadas como presupuesto o ingreso verde de una manera automatizada.
                            En principio esta información contribuirá a alcanzar los objetivos ambientales internacionales y
                            nacionales presentes en la política pública y permitirá al país generar información valiosa sobre el
                            ingreso y gasto público en áreas de desarrollo sostenible.<br>
                            Es un método que utiliza las herramientas de la formulación de políticas presupuestarias generales
                            para ayudar a alcanzar los objetivos relacionados con el clima, la protección de la biodiversidad,
                            la calidad del aire y la gestión del agua de tal manera que los responsables de la toma de decisiones
                            puedan evaluar la situación del gasto público respecto a objetivos y metas ambientales.<br>
                            Entonces el presupuesto verde utiliza herramientas de la política presupuestaria (políticas de gasto
                            público y políticas tributarias o de ingreso) para ayudar a alcanzar los objetivos ambientales y
                            climáticos del país.<br>
                            Por otro lado, el Ingreso verde proviene de los impuestos y otras formas de ingresos corrientes que tienen el potencial de alterar la recaudación de los ingresos públicos de forma sustancial y de generar un impacto ambiental positivo o negativo.
                            La herramienta permitirá que entidades y dependencias puedan visualizar de manera gráfica la vinculación, y posterior cuantificación de sus Pp’s con los objetivos ambientales para la composición del Presupuesto Verde, así como los recursos vinculados el Ingreso Verde.
                            Existen tres secciones:<br><br>
                            <span class="indent">•	Presupuesto verde Objetivos ambientales</span><br>
                            <span class="indent">•	Presupuesto verde Cambio climático</span><br>
                            <span class="indent">•	Ingreso verde</span><br><br>
                            Esta herramienta cuenta con una guía metodológica, manual de usuario, así como un material de capacitación.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-sm-5 mb-5">
                <div class="col-md-4 my-2 col-sm-12" style="padding-left: 0px !important;">
                    <div class="home-buttons" >
                        <a href="app/objetivo-ambientals" >
                            <p class="text-center">
                                <b>Presupuesto Verde <br/> Objetivos Ambientales</b>
                            </p>
                            <p class="text-justify">
                                El objetivo es contribuir a la generación de capacidades para la identificación de
                                acciones que el gobierno lleva a cabo en materia de cambio climático y la cuantificación
                                de dichos recursos, a través de brindar criterios que permitan identificar las acciones
                                y los recursos relevantes en la consecución de los objetivos de adaptación y mitigación
                                del cambio climático.
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 my-2 col-sm-12">
                    <div class="home-buttons">
                        <a href="app/cambio-climaticos"  >
                            <p class="text-center">
                                <b>Presupuesto Verde <br/> Cambio Climático</b>
                            </p>
                            <p class="text-justify">
                                El objetivo es contribuir a la generación de capacidades para la identificación de
                                acciones llevadas a cabo por el gobierno federal que pueden ser consideradas como
                                presupuesto verde, así como la creación de capacidades para cuantificar los recursos que
                                se destinan al desarrollo de dichas acciones.
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 my-2 col-sm-12" style="padding-right: 0px !important;">
                    <div class="home-buttons">
                        <a href="app/ingreso-verdes">
                            <p class="text-center">
                                <b>Ingresos Verdes</b>
                            </p>
                            <p class="text-justify">
                                El objetivo es contribuir a la generación de capacidades para la identificación y
                                clasificación de ingresos que por sus características pueden ser catalogados como
                                verdes. Se trata de impuestos y otras formas de ingresos corrientes que tienen el
                                potencial de alterar la recaudación de los ingresos públicos de forma sustancial y de
                                generar un impacto ambiental positivo o negativo.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://framework-gb.cdn.gob.mx/gm/v4/js/gobmx.js"></script>
    </body>
</html>
