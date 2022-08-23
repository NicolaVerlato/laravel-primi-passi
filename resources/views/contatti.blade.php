<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>
        Contatti
    </h2>
    
    <div>
        Email: {{ $mail }}
    </div>

    <div>
        <a href="{{ route('home') }}">Torna alla homepage</a>
    </div>
</body>
</html>