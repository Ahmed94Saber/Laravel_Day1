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
                <th scope="col">#</th>
                <th scope="col">Book title</th>
            <th scope="col">Price</th>
            </tr>
    </thead>
    <tbody>
        @foreach($books as $index => $book)
            <tr>
            <th scope="row">{{$index}}</th>
            <td>{{$book['title']}}</td>
            <td>{{$book['price']}}</td>
            </tr>
        @endforeach
    @else
        NOT found
    @endisset
    @endsection
</body>

</html>