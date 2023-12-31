@extends('dashboard')
@section('content')
<h1>{{$page}}</h1>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
<form method = "POST" action = "{{route('books.store')}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control"  name = "title" placeholder = "Enter Title" value="{{ old('title') }}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="number" class="form-control" name = "price" placeholder = "Price" value="{{ old('price') }}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea class="form-control" name = "describtion" value="{{ old('description') }}" ></textarea>
  </div>
  <br>
  <label for="exampleInputSelect">Category</label>
  <select name="category" class="form-select" aria-label="Default select example" value="{{ old('category') }}">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
</select>
<br>
<div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" name="pic" type="file" id="formFile">
        </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection