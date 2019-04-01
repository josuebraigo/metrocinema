<!DOCTYPE html>
<html>
  <head></head>
  <body id="actores">
    <header></header>
    @foreach($actors as $actor)
    <p>{{ $actor->first_name }} {{ $actor->last_name }}</p>
    @endforeach
    <footer></footer>
  </body>
</html>