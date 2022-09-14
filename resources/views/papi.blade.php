<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{--contoh memunculkan data from controler --}}
    {{-- id_pendaftaran :   {{$data[0]->no_pendaftaran}} --}}
    <table>
        <th>
            No Pendaftaran
        </th>

          <th>gresult</th>
             <th>lresult</th>
             <th>iresult</th>
             <th>tresult</th>
             <th>vresult</th>
             <th>sresult</th>
             <th>rresult</th>
             <th>dresult</th>
             <th>cresult</th>
             <th>eresult</th>
             <th>wresult</th>
             <th>fresult</th>
             <th>kresult</th>
             <th>zresult</th>
             <th>oresult</th>
             <th>bresult</th>
             <th>xresult</th>
             <th>presult</th>
             <th>aresult</th>
             <th>nresult</th>
         @forelse ($data as $papi)
                                <tr>
                                    <td>{{ $papi->no_pendaftaran }}</td>
                                  <td>{{$papi->gresult}}</td>
             <td>{{$papi->lresult}}</td>
             <td>{{$papi->iresult}}</td>
             <td>{{$papi->tresult}}</td>
             <td>{{$papi->vresult}}</td>
             <td>{{$papi->sresult}}</td>
             <td>{{$papi->rresult}}</td>
             <td>{{$papi->dresult}}</td>
             <td>{{$papi->cresult}}</td>
             <td>{{$papi->eresult}}</td>
             <td>{{$papi->wresult}}</td>
             <td>{{$papi->fresult}}</td>
             <td>{{$papi->kresult}}</td>
             <td>{{$papi->zresult}}</td>
             <td>{{$papi->oresult}}</td>
             <td>{{$papi->bresult}}</td>
             <td>{{$papi->xresult}}</td>
             <td>{{$papi->presult}}</td>
             <td>{{$papi->aresult}}</td>
             <td>{{$papi->nresult}}</td>
                                    <td class="text-center">
                                        {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('post.destroy', $papi->id) }}" method="POST">
                                            <a href="{{ route('post.edit', $papi->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form> --}}
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="4">Data tidak tersedia</td>
                                </tr>
                                @endforelse
    </table>
    {{-- nama <?= $name ?>
    nama {{$name}}
    html {!!$cobahtml!!} --}}
</body>
</html>