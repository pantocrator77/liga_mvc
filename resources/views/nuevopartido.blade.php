
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Homepage club {{ $ClubName ?? '' ?? '' }}</title>
    
</head>
<body class="bg-slate-100">
<div class="flex flex-row justify-center bg-slate-400 border-solid border-2 border-slate-600 p-6">
<div class="basis-1/4"><a href="/home"><img src="{{ URL::to('/') }}/images/club_logo.png" ></a></div>
    <div class="basis-3/4 flex items-center b"><h1 class="text-3xl font-bold underline">Nuevo resultado</h1></div>
</div>
    <h1 class="text-2xl font-bold underline">Nuevo resultado de {{ $TeamName ?? '' }}</h1>
    <br>
    <h4>Entrenador: {{ $coach ?? '' }}</h4>
    <br>

    <form action="{{route('storegames')}}" method="POST">
        @csrf

      
    <option>Select Team A</option>
    <select name="EquipoA" id="teams" class="category">
        @foreach($teams as $team)
        <option value="{{ $team->id }}">{{ $team->name}}</option>
    @endforeach
    </select> 
    <label>goles: <input type="text" name="golA"></label>
        <br>
        <option>Select Team B</option>
    <select name="EquipoB" id="teams" class="category">
        @foreach($teams as $team)
        <option value="{{ $team->id }}">{{ $team->name}}</option>
    @endforeach
    </select> 
    <label>goles: <input type="text" name="golB"></label>
        <br>
        <br>
        <br>


        <button type="submit"> Enviar</button>
    </form>
  
</body>
</html>