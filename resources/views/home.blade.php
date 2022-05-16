
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Homepage club {{ $ClubName ?? '' }}</title>
    
</head>
<body class="bg-slate-100">
<div class="flex flex-row justify-center bg-slate-400 border-solid border-2 border-slate-600 p-6">
    <div class="basis-1/4"><img src="{{ URL::to('/') }}/images/club_logo.png" ></div>
    <div class="basis-3/4 flex items-center b"><h1 class="text-3xl font-bold underline">Esta es la homepage de {{ $ClubName ?? '' }}</h1></div>
</div>
<br>
<br>
<div class="">
    <!-- <p> <a href ="flex flex-row jutify-right">{{ $teams ?? '' }}</a></p> -->
    <br>
 
    <ul class="inline-flex">
       @foreach ($teams as $team)
       <li class="">
        <span class="bg-slate-200 border-solid border-1 border-slate-600 p-4 ml-2 block grid gap-4 grid-cols-3 grid-rows-1"> <a href="{{  URL::to('teams/'. $team->id) }}">{{$team->name}} </a></span>
        </li>

       @endforeach
        
    </ul>

 <br>
 <br>
    <button class="text-2 font-bold underline">
    <a href="/nuevoequipo"><button class="bg-cyan-500 hover:bg-cyan-600 p-3">Añadir un nuevo equipo</button></a>
</button>
</div>
    
    <h2>Resultados</h2>

    <p> </p>
    
    
</body>
</html>