@extends('layouts')

@section('title', 'Books Store')

@section('content')
    <h1>Top 8 Highest Price Books</h1>
    <ul class="list-group mb-4">
        @foreach ($highestPriceBooks as $book)
            <li class="list-group-item">{{ $book->title }} - {{ $book->price }} VND</li>
        @endforeach
    </ul>

    <h1>Top 8 Lowest Price Books</h1>
    <ul class="list-group">
        @foreach ($lowestPriceBooks as $book)
            <li class="list-group-item">{{ $book->title }} - {{ $book->price }} VND</li>
        @endforeach
    </ul>
@endsection