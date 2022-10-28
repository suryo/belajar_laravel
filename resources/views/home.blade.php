<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <h1>Selamat Datang (Home)</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <a href="{{route('home')}}" class="btn btn-md btn-success">home</a>
    <a href="{{route('coba')}}" class="btn btn-md btn-danger">test</a>
    
    <table class="table">
        <tr>
            <th>no.</th>
            <th>tanggal</th>
            <th>judul</th>
            <th></th>
        </tr>
        <tr>
            <tr>
                <td>1.</td>
                <td>25/10/2022</td><td>Surabaya Menjadi Kota terpadat</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>25/10/2021</td><td>Timnas Indonesia Juara Dunia Lomba menghujat netizen</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>25/10/2020</td><td>Persatuan Indonesia</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>25/10/2019</td><td>SSIAPPP BOSSs</td>
            </tr>
        </tr>

   

</body>
</html>