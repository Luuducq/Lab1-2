@extends('layouts')

@section('title', 'Books in Category: ' . $category->name)

@section('content')
    <h1>Books in Category: {{ $category->name }}</h1>
    
    <!-- Nút Quay lại -->
    <a href="javascript:history.back()" class="btn btn-secondary mb-3">Quay lại</a>

    <ul class="list-group">
        @foreach ($books as $book)
            <li class="list-group-item">
                <a href="{{ url('/book/' . $book->id) }}">{{ $book->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection