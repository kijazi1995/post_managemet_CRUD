<!DOCTYPE html>
<html lang="en">
<head>
  <title>Post List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  table{
    border-collapse: collapse;
    width: 100%;
  }
  td,th{
    padding: 5px;
    border: 5px solid;
  }
</style>
<body>
  <div class="container">
    <h1 style="color: green;">POST CRUD OPERATION</h1>
  <a href="{{route('add.post')}}" style="float: left;">Add Post</a>
  <br><br>
  @if(Session::has('post_delete'))
  <span>{{Session::get('post_delete')}}</span>
  @endif
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
    @foreach($posts as $post)
    <tr>
      <td>{{$post->id}}</td>
      <td>{{$post->name}}</td>
      <td>{{$post->description}}</td>
      <td>
        <a href="/edit-post/{{$post->id}}"><button>Edit</button></a>
        <a href="/delete-post/{{$post->id}}"><button class="" onclick="return confirm('Are you sure?')">Delete</button></a>
      </td>
    </tr>
    @endforeach
  </table>
  </div>
</body>
</html>
