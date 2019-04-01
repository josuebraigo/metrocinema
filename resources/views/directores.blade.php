<!DOCTYPE html>
<html>
  <head></head>
  <body id="actores">
    <header></header>
    @foreach($directors as $director)
    <p>{{ $director->first_name }} {{ $director->last_name }}</p>
    @endforeach
    <footer></footer>
  </body>
</html>