<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}"></script>
    <title>Teams homepage</title>
</head>
<body>

<div class="flex flex-row  justify-center bg-gray-light m-40">
    <div class="basis-1/4"><img src="{{ URL::to('/') }}/images/club_logo.png" ></div>
    <div class="basis-3/4 flex items-center"><h1 class="text-3xl font-bold underline">Esta es la homepage de {{ $TeamName  }}</h1></div>
</div>
    <br>
    <h4>Entrenador: {{ $coach ?? '' }}</h4>
    <br>
    <h2>Resultados</h2>
    <br>
    <div class="flex flex-row  justify-left bg-gray-light">
    <ul>
    @foreach ($games as $game)
  
        <li>{{$game->team_A}}   vs   {{$game->team_B}} =      {{$game->score_A}} :  {{$game->score_B}}</li>
        <br>
    @endforeach
    </ul>
    </div>
        
   

    <a href="/nuevopartido">Añadir resultado</a>

    <p> 
        
    </p>

</body>
</html>