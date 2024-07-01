<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/vendor.css') }}">
    <title>Quizz</title>
</head>
<body>
    <div class="container d-flex flex-column flex-row justify-content-center align-items-center h-100">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Reglas del examen en línea</h5>
                    </div>
                    <div class="card-body">
                        <p>1. Solo tendrás 15 segundos para responder cada pregunta.</p>
                        <p>2. Una vez que selecciones tu respuesta, no se puede deshacer.</p>
                        <p>3. No puedes seleccionar ninguna opción una vez que se acaba el tiempo.</p>
                        <p>4. No puedes salir del quiz mientras está corriendo el tiempo.</p>
                        <p>5. Obtendrás puntos con base en tus respuestas.</p>
                    </div>
                    <a class="card-footer-button btn btn-primary" href="{{route('answer')}}">
                        Iniciar examen
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>