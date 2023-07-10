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
            height: 400px;
            width: 100%;
            margin: 5px;
            transition: .5s;
            padding: 20px;
            text-decoration: none;
            color: #0C231E;

        }

        .home-buttons:hover {
            transform: scale(1.03);
            cursor: pointer;
            color: #0C231E;
            text-decoration: none;
        }

        .button-container {
            display: flex;
            flex-wrap: nowrap;
        }

    </style>
    <main class="page">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        Mensaje de bienvenida
                    </p>
                </div>
            </div>
            <div class="row button-container mb-5">
                <a class="home-buttons" href="app/objetivo-ambientals" >
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
                <a class="home-buttons"   >
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
                <a class="home-buttons">
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
    </main>
    <script src="https://framework-gb.cdn.gob.mx/gm/v4/js/gobmx.js"></script>
    </body>
</html>
