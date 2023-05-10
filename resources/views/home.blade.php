@extends('layouts/main')
    
@section('content')

<h1 id="title">MOVIES</h1>

<div id="card-container">
    @foreach ($movies as $movie)
    <div class="card">
        <ul class="list-group list-group-flush">
          <li class="list-group-item movie-title"> {{$movie['title']}} </li>
          <li class="list-group-item">Titolo originale: {{$movie['original_title']}}</li>
          <li class="list-group-item">Nazionalità: {{$movie['nationality']}}</li>
          <li class="list-group-item">Data di uscita: {{$movie['date']}}</li>
          <li class="list-group-item">Voto: {{$movie['vote']}}/10</li>
        </ul>
      </div>
    @endforeach
</div>

@endsection

