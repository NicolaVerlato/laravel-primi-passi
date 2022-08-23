<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="{{ route('contatti') }}">Vai ai contatti</a>
            </li>
            <li>
                <a href="{{ route('calendario') }}">Vai al calendario</a>
            </li>
            <li>
                <a href="{{ route('biglietti') }}">Vai al biglietti</a>
            </li>
        </ul>
    </header>
    <h1>{{ $name }}</h1>

    <div>
        Citta: {{ $city }} <br>
        Allenatore: {{ $coach }}
    </div>

    <h3>
        Quintetto Di Partenza
    </h3>
    <ul>
        @foreach ($players as $player)
            <li>
                {{ $player }}
            </li>
        @endforeach
    </ul>
    
</body>
</html>