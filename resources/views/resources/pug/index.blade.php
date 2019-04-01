<!DOCTYPE html>
<html>
  <head> 
    <head></head>
  </head>
  <body id="home">
    <header></header>
    <div class="container">
      @foreach($movies as $movie)
      <p>Nombre: {{ $movie->name }}</p>
      <p>Duración: {{ $movie->duration }}</p>
      <p>Año: {{ $movie->year }}</p>
      <p>País: {{ $movie->country }}</p>
      <p>Sinopsis: {{ $movie->sinopsys }}</p>
      <p>Trailer: {{ $movie->trailer }}</p>
      <p>Poster: {{ $movie->poster }}</p>
      <p>Actores: {{ $movie->actor_id }}</p>
      <p>Director: {{ $movie->director_id }}	</p>
      @endforeach
    </div>
    <footer></footer>
  </body>
</html>