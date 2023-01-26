<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  Edit News
  <form action="{{url('updatenews')}}" method="POST">
    @csrf
    
    @php
        dump($findnews);
    @endphp

    <input name="id" class="form-control" type="hidden" value="{{$findnews->id}}"><br>
    <input name="tittle" class="form-control" type="text" value="{{$findnews->tittle}}"><br>
    <input name="content" class="form-control" type="text" value="{{$findnews->content}}"><br>
<button type="submit"> UPDATE</button>
    
  </form>
</body>
</html>