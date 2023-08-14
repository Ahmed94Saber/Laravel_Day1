<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<form method = "POST" action = "{{route('books.update', $book['id'])}}" >
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control"  name = "title" placeholder = "{{$book->title}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="number" class="form-control" name = "price"  placeholder = "{{$book->price}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea class="form-control" name = "describtion" placeholder = "{{$book->description}}"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
    












</body>
</html>