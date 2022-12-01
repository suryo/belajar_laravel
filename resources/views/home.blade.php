@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Berita') }}</div>

                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Berita</th>
                        <th scope="col">Tanggal Berita</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                @foreach ($berita as $isi)
                    <tbody>
                    <tr>
                        <th scope="row">{{$isi->id}}</th>
                        <td>{{$isi->judul}}</td>
                        <td>{{$isi->berita}}</td>
                        <td>{{$isi->tanggal}}</td>
                        <td>{{$isi->status}}</td>
                    </tr>
                    </tbody>
                @endforeach
                <style>
                th{
                text-align: center;
                font-size: 20px;
                vertical-align: middle;
                }
                </style>
                </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
