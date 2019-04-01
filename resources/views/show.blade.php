<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <header></header>
    @if($movie == NULL)
    <p>No existe la pelicula! :(</p>
    @else
    <p>Nombre: {{ $movie->name }}</p>
    <p>Duración: {{ $movie->duration }}</p>
    <p>Año: {{ $movie->year }}</p>
    <p>País: {{ $movie->country }}</p>
    <p>Sinopsis: {{ $movie->sinopsys }}</p>
    <p>Trailer: {{ $movie->trailer }}</p>
    <p>Poster: {{ $movie->poster }}</p>
    <p>Actores: {{ $movie->actor_id }}</p>
    <p>Director: {{ $movie->director_id }}</p><a href="/movies/{{ $movie->id }}/edit">Editar</a><a href="#">Eliminar</a>
    @endif
    <header></header>
  </body>
</html>