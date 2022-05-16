
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
    <h1 class="text-2xl font-bold underline">agregar equipo</h1>
    <br>
    <h2>Nuevo equipo</h2>
    <form action="{{route('nuevoequipo')}}" method="POST">
        @csrf
        <label>Nombre equipo<input type="text" name="name"></label>
        <br>
        <label>Club <input type="text" name="club"></label>
        <br>
        <label>entrenador <input type="text" name="entrenador"></label>
        <br>
        <label>Categoria <input type="text" name="cat"></label>
        <br>
        <br>
        <button type="submit"> Enviar</button>
    </form>

</body>
</html>