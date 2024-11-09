
@extends('layouts')

@section('title', 'All Books')

@section('content')
    <h1>All Books</h1>

    <h3>Categories</h3>
    <ul class="nav nav-pills mb-4">
        @foreach ($categories as $category)
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/category/' . $category->id) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>

    <h3>Books List</h3>
    <ul class="list-group">
        @foreach ($books as $book)
            <li class="list-group-item">
                <a href="{{ url('/book/' . $book->id) }}">{{ $book->title }}</a> - {{ $book->price }} VND
            </li>
        @endforeach
    </ul>
@endsection