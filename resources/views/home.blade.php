<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>Homepage club {{ $ClubName ?? '' }}</title>
    
</head>
<body>
<div class="flex flex-row  justify-center m-10 bg-gray-light">
    <div class="basis-1/4"><img src="{{ URL::to('/') }}/images/club_logo.png" ></div>
    <div class="basis-3/4 flex items-center b"><h1 class="text-3xl font-bold underline">Esta es la homepage de {{ $ClubName ?? '' }}</h1></div>
</div>
<br>
<br>
<div class="bg-gray-300">
    <p> <a href ="">{{ $teams ?? '' }}</a></p>
    <br>
    <button class="text-2 font-bold underline">
    <a href="/nuevoequipo">Añadir un nuevo equipo</a>
</button>
</div>
    
    <h2>Resultados</h2>
    <p> </p>
    <button class="bg-cyan-500 hover:bg-cyan-600">Subscribe</button>
    
</body>
</html>