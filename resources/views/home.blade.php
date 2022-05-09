<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage club {{ $ClubName ?? '' ?? '' }}</title>
    <img src="{{ URL::to('/') }}/images/club_logo.jpg" >
</head>
<body>
    <h1>Esta es la homepage de {{ $ClubName }}</h1>
    <p> <a href ="">{{ $teams }}</a></p>
    <br>
    <h2>Resultados</h2>
    <p> </p>
    
</body>
</html>