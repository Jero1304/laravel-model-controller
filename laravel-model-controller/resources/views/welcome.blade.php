@extends('layouts.app')

@section('content')
    @foreach ($movies as $movie)
        <div class="card">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Titolo: {{ $movie['title'] }}</li>
                    <li class="list-group-item">ID: {{ $movie['original_title'] }}</li>
                    <li class="list-group-item">Vote: {{ $movie['vote'] }}</li>
                </ul>
            </div>
        </div>
    @endforeach
@endsection
