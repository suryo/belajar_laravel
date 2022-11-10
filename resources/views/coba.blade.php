<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ini ada di resources/views</h1>
    isinya ini var adalah : {{$inivar}}
    <br>
    isinya iniarray adalah : <br>
    @foreach ($iniarray as $isinearray)
        {{$isinearray}}
        <br>
    @endforeach

    <a href="{{ route('home') }}" class="btn btn-md btn-secondary">home</a>
    <a href="{{ route('coba') }}" class="btn btn-md btn-secondary">test</a>
</body>
</html>