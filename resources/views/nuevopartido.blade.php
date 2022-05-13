<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Teams homepage</title>
</head>
<body>
    <h1>Nuevo resultado de {{ $TeamName ?? '' }}</h1>
    <br>
    <h4>Entrenador: {{ $coach ?? '' }}</h4>
    <br>
    <h2>Nuevo resultados</h2>
    <form action="{{route('storegames')}}" method="POST">
        @csrf
        <label>Equipo A: <input type="text" name="EquipoA"></label>
        <label>goles: <input type="text" name="golA"></label>
        <br>
        <label>Equipo B: <input type="text" name="EquipoB"></label>
        <label>goles: <input type="text" name="golB"></label>
        <br>
        <br>
        <button type="submit"> Enviar</button>
    </form>
    

    <p> 
        
    </p>
</body>
</html>