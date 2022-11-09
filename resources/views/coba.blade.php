<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1>ini ada di resources/views</h1>
    <a href="{{ route('home') }}" class="btn btn-md btn-secondary">home</a>
    <a href="{{ route('coba') }}" class="btn btn-md btn-secondary">coba</a>
    <br>
    isinya ini var adalah : {{$inivar}}
    <br>
    isinya iniarray adalah : <br>
    @foreach ($iniarray as $isinearray)
        {{$isinearray}}
        <br>
    @endforeach
</body>
</html>