<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
<script src="{{ asset('js/app.js') }}"></script>
    <title>Teams homepage</title>
</head>
<body class="bg-slate-100">
<div class="flex flex-row  justify-center bg-slate-400 border-solid border-2 border-slate-600 p-6">
<div class="basis-1/4"><a href="/home"><img src="{{ URL::to('/') }}/images/club_logo.png" ></a></div>
    <div class="basis-3/4 flex items-center"><h1 class="text-3xl font-bold underline">Esta es la homepage de {{ $TeamName  }}</h1></div>
</div>
    <br>
    <h4>Entrenador: {{ $coach  }}</h4>
    <br>
    <h2 class="text-2xl font-bold underline">Resultados</h2>
    <br>
    <div class="flex flex-row  justify-left bg-gray-light">
    <ul>
    @foreach ($games as $game)
  
        <li>{{$game->team_A}}   vs   {{$game->team_B}} =      {{$game->score_A}} :  {{$game->score_B}}</li>
        <br>
    @endforeach
    </ul>
    </div>
        
   
    <br>
   {{$games->links()}}
   
     <a href="/nuevopartido"><button class="bg-cyan-500 hover:bg-cyan-600 p-3 ml-10">Añadir resultado</button></a>
</body>
</html>