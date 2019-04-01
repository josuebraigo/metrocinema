<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <header></header>
    <form method="POST" action="/actores">
      <label for="name">Nombre</label>
      <input id="name" type="text" name="first_name">
      <label for="last">Apellido</label>
      <input id="last" type="text" name="last_name">
      @csrf
      <input type="submit" value="Guardar">
    </form>
    <footer></footer>
  </body>
</html>