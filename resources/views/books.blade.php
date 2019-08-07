@extends('template.myTemplate')

@section('title', 'Books List')

@section('content')
    <h1>Books</h1>
    @foreach($books as $book)
        <h3>{{ $book->author }}</h3>
        <p>{{ $book->title }}</p>


        <hr>
    @endforeach
@endsection
