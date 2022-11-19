
@extends('layouts.app')

@section('content')
if

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Berita') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Berita</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($berita as $a)
                          <tr>
                            <th scope="row">{{$a -> id}}</th>
                            <td>{{$a->judul}}</td>
                            <td>{{$a->berita}}</td>
                            <td>{{$a->tanggal}}</td>
                            <td>{{$a->status}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div> <a href="{{ url('/home') }} ">back to Home</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
