@extends('layouts')

@section('title', $book->title)

@section('content')
    <h1>{{ $book->title }}</h1>
    <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}" class="img-fluid">
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
    <p><strong>Publication Date:</strong> {{ $book->publication }}</p>
    <p><strong>Price:</strong> {{ $book->price }} VND</p>
    <p><strong>Quantity:</strong> {{ $book->quantity }}</p>
@endsection