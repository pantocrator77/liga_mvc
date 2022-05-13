<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <title>Teams homepage</title>
</head>
<body>
<div class="container">
<div class="flex flex-row  justify-center bg-gray-light">
    <div class="basis-1/4"><img src="{{ URL::to('/') }}/images/club_logo.png" ></div>
    <div class="basis-3/4 flex items-center b"><h1 class="text-3xl font-bold underline">Esta es la homepage de {{ $ClubName ?? '' }}</h1></div>
</div>
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