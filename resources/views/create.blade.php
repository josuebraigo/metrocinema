<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <header></header>
    <form method="POST" action="/movies">
      <label for="name">Nombre</label>
      <input id="name" type="text" name="name">
      <label for="duration">Duración</label>
      <input id="duration" type="text" name="duration">
      <label for="year">Año</label>
      <input id="year" type="text" name="year">
      <label for="country">País</label>
      <input id="country" type="text" name="country">
      <label for="sinopsys">Sinopsis</label>
      <textarea id="sinopsys" type="text" name="sinopsys"></textarea>
      <label for="trailer">Trailer</label>
      <input id="trailer" type="text" name="trailer" placeholder="URL de la película">
      <label for="poster">Poster</label>
      <input id="poster" type="text" name="poster" placeholder="URL del poster">
      <label for="actor">Actor</label>
      <select name="actor_id" id="actor">
        @foreach($actors as $actor)
        <option value="{{ $actor->id }}">{{ $actor->first_name }} {{ $actor->last_name }}</option>
        @endforeach
      </select>
      <label for="director">Director</label>
      <select name="director_id" id="director">
        @foreach($directors as $director)
        <option value="{{ $director->id }}">{{ $director->first_name }} {{ $director->last_name }}</option>
        @endforeach
      </select>
      @csrf
      <input type="submit" value="Guardar">
    </form>
    <footer></footer>
  </body>
</html>