<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    
   

    <a href="{{ route('home') }}" class="btn btn-md btn-secondary">home</a>
    <a href="{{ route('coba') }}" class="btn btn-md btn-secondary">test</a>

    <table>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Judul</th>
            <th></th>
        </tr>
        <tr>
            <td>1.</td><td>25/10/2022</td><td>Indonesia</td>
        </tr>
            <td>2.</td><td>26/10/2022</td><td>Surabaya</td>
        </tr>
            <td>3.</td><td>27/10/2022</td><td>Jakarta</td>
        </tr>
            <td>4.</td><td>28/10/2022</td><td>Kalimantan</td>
        </tr>
            <td>5.</td><td>29/10/2022</td><td>Madura</td>
        </tr>
    </table>



</body>
</html>