<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <header></header>
    <form method="POST" action="/movies/{{$movie->id}}">
      <label for="name">Nombre</label>
      <input id="name" type="text" name="name" value="{{ $movie->name }}">
      <label for="duration">Duración</label>
      <input id="duration" type="text" name="duration" value="{{ $movie->duration }}">
      <label for="year">Año</label>
      <input id="year" type="text" name="year" value="{{ $movie->year }}">
      <label for="country">País</label>
      <input id="country" type="text" name="country" value="{{ $movie->country }}">
      <label for="sinopsys">Sinopsis</label>
      <textarea id="sinopsys" type="text" name="sinopsys" value="{{ $movie->sinopsys }}"></textarea>
      <label for="trailer">Trailer</label>
      <input id="trailer" type="text" name="trailer" placeholder="URL de la película" value="{{ $movie->trailer }}">
      <label for="poster">Poster</label>
      <input id="poster" type="text" name="poster" placeholder="URL del poster" value="{{ $movie->poster }}">
      <label for="actor">Actor</label>
      <select name="actor_id" id="actor">
        @foreach($actors as $actor)
        @if($movie->actor_id == $actor->id)
        <option value="{{ $actor->id }}" selected>{{ $actor->first_name }} {{ $actor->last_name }}</option>
        @else
        <option value="{{ $actor->id }}" selected>{{ $actor->first_name }} {{ $actor->last_name }}</option>
        @endif
        @endforeach
      </select>
      <label for="director">Director</label>
      <select name="director_id" id="director">
        @foreach($directors as $director)
        @if($movie->director_id == $director->id)
        <option value="{{ $director->id }}" selected>{{ $director->first_name }} {{ $director->last_name }}</option>
        @else
        <option value="{{ $director->id }}">{{ $director->first_name }} {{ $director->last_name }}</option>
        @endif
        @endforeach
      </select>
      <input type="hidden" name="_method" value="PUT">
      @csrf
      <input type="submit" value="Guardar">
    </form>
    <footer></footer>
  </body>
</html>