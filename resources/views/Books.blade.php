<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
@extends('dashboard')
@section('content')
    <h1>{{$page}}</h1>
        @isset($books)
        <table class="table">
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">#</th>
                <th scope="col">Book title</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Tags</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
            </tr>
    </thead>
    <tbody>
        @foreach($books as $index => $book)
                <tr>
                <th><a href = "{{route('books.show',$book)}}"><button type="button" class="btn btn-primary">View</button></a></th>
                <th scope="row">{{$book['id']}}</th>
                <td>{{$book['title']}}</td>
                <td><img width="60px" height="60px" src="{{ asset('storage/books/') ."/". $book->pic}}" alt=""></td>
                <td>{{$book['price']}}</td>
                <td>{{$book->category->name??'-'}}</td>
                <td>
                @foreach ($book->tags as $tag)
                    {{$tag->name??'-'}}
                    /
                @endforeach
                </td>
                <td>
                    <form action="{{ route('books.destroy', $book['id']) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete {{$book['title']}}?')">Delete</button>
                    </form>
                </td>
                <td>
                <form action="{{ route('books.edit', $book) }}"  class="d-inline">
                    <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </td>
                </tr>
        @endforeach
    @else
        NOT found
    @endisset
    @endsection
    {{$books->links()}}

</body>
</html>
