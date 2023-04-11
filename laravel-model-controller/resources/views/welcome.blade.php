@extends('layouts.app')

@section('content')
    @foreach ($movies as $movie)
        <h1>Titolo: {{ $movie['title'] }}</h1>
        <h2>ID: {{ $movie['original_title']}}</h2>  
        <p>Vote: {{ $movie['vote'] }}</p>
    @endforeach
@endsection
