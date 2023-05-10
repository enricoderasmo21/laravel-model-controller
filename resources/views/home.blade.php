<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

<div id="card-container">
    @foreach ($movies as $movie)
    <div class="card">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> {{$movie['title']}} </li>
          <li class="list-group-item">Titolo originale: {{$movie['original_title']}}</li>
          <li class="list-group-item">Nazionalità: {{$movie['nationality']}}</li>
          <li class="list-group-item">Data di uscita: {{$movie['date']}}</li>
          <li class="list-group-item">Voto: {{$movie['vote']}}/10</li>
        </ul>
      </div>
    @endforeach
</div>

</body>

</html>