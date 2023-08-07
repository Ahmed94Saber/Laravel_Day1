@extends('dashboard')
@section('content')
<h1>{{$page}}</h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="number" class="form-control" id="exampleInputPassword1" >
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection