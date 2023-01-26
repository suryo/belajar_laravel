<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<h1>list berita</h1>
<table class="table table-bordered" border="1">
  <th>No</th>
  <th>Category</th>
  <th>Title</th>
  <th>Action</th>

@foreach ($resnews as $item)
    <tr>
      <td>{{$loop->index}}</td>
      <td>{{$item->idnews}}</td>
      <td>{{$item->tittle}}</td>
      <td>
        <a class="btn btn-primary" href="{{url('editnews/'.$item->idnews)}}">Edit</a>
        <a class="btn btn-danger" href="{{url('deletenews/'.$item->idnews)}}">DELETE</a>
      </td>
      
    </tr>
@endforeach


</table>
</body>
</html>