<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1>Selamat Datang</h1>
    
    <a href="{{ route('home') }}" class="btn btn-primary">home</a>
    <a href="{{ route('coba') }}" class="btn btn-outline-info">test</a>

    
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>

    <table class="table">
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Judul</th>
        </tr>
        <tr>
            <td>1.</td><td>25/10/2022</td>
            <td>Surabaya Mejadi Kota Terpadat Ketiga Di indonesia</td>
        </tr>
        <tr>
            <td>2.</td><td>25/10/2022</td>
            <td>Timnas Indonesia Juara Dunia lomba menghujat Netizen</td>
        </tr>
        <tr>
            <td>3.</td><td>26/10/2022</td>
            <td>Persatuan Bulutangkis Denmark hancur diserang Netizen</td>
        </tr>
        <tr>
            <td>4.</td><td>27/10/2022</td>
            <td>Harga Bensin di Indonesia termurah: hasil survey ngawur</td>
        </tr>
    </table>

</body>
</html>
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
>>>>>>> 9b9214acb2b5299f7563961b97978d432bd0aefb
