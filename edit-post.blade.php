<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  @if(Session::has('post_update'))
  <span>{{Session::get('post_update')}}</span>
  @endif
  <form method="post" action="{{route('update.post')}}">
    @csrf
    <input type="hidden" name="id" value="{{$post->id}}">
    Post: <br><input type="text" name="name" value="{{$post->name}}"><br>
    Description: <br><textarea name="description">{{$post->description}}</textarea><br>
    <input type="submit" value="Submit">
  </form>
<a href="/post-list">back</a>
</body>
</html>
