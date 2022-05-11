<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nuevo equipo</title>
</head>
<body>
    <h1>agregar equipo</h1>
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