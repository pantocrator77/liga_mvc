
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
    <div class="basis-1/4"><a href="/home"><img src="{{ URL::to('/') }}/images/club_logo.png" ></a></div>
    <div class="basis-3/4 flex items-center b"><h1 class="text-3xl font-bold underline">Esta es la homepage de {{ $ClubName ?? '' }}</h1></div>
</div>
<br>
<br>
<div class="w-1/2 place-content-right ml-80">
    <br>
 
    <ul class="flex items-center flex-wrap grid grid-cols-4 gap-3 place-items-stretch">
       @foreach ($teams as $team)
       <li class="">
        <button class="bg-slate-200  hover:bg-slate-300 border-solid border-2 border-slate-400 p-4 m-2 block grid w-70 h-20"> <a href="{{  URL::to('teams/'. $team->id) }}">{{$team->name}} </a></button>
        </li>

       @endforeach
        
    </ul>

 <br>
 <br>
    <button class="text-2 font-bold underline">
    <a href="/nuevoequipo"><button class="bg-cyan-500 hover:bg-cyan-600 p-3 ml-2">Añadir un nuevo equipo</button></a> 
    <a href="/nuevopartido"><button class="bg-cyan-500 hover:bg-cyan-600 p-3 ml-2">Añadir resultado</button></a>
</button>
</div>
<br>
<br>
<br>
<div class="content-center">
<h2 class="text-3xl font-bold underline justify-center ml-10"> Ultimos partidos de liga</h2></div>
<br>
<br>
<br>
 <div class="bg-gray-light pt-5" >  
@foreach ($games as $game)
  
  <li class="bg-slate-100 pl-10">{{$game->team_A}}   vs   {{$game->team_B}} =      {{$game->score_A}} :  {{$game->score_B}}</li>
 <br>

@endforeach
{{$games->links()}}
 </div>
    
</body>
</html>