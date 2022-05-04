<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage club {{ $ClubName }}</title>
    <img src="/resources/views/img/club_logo.png">
</head>
<body>
    <h1>Esta es la homepage de {{ $ClubName }}</h1>
    
    <p> <a href ="">{{ $Team1  }}</a></p>
    <p><a href="{{url('teams')}}">{{ $Team1  }}</a> 
    <p> <a href ="">{{ $Team2  }}</a></p>
    <p> <a href ="">{{ $Team3  }}</a></p>
    <p> <a href ="">{{ $Team4  }}</a></p>
</body>
</html>