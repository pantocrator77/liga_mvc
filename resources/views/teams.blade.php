<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <title>Teams homepage</title>
</head>
<body>
<div class="container">
    <h1>Esta es la homepage de {{ $TeamName ?? '' }}</h1>
    <br>
    <h4>Entrenador: {{ $coach ?? '' }}</h4>
    <br>
    <h2>Resultados</h2>
    <br>
    <p>{{$games}}</p>
    <a href="/nuevopartido">Añadir resultado</a>

    <p> 
        
    </p>
</div>
</body>
</html>