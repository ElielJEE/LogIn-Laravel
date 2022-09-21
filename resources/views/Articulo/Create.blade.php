<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Articulo</title>
</head>
<body>
  <div class="container">
    <h1>Crear nuevo articulo</h1>
    <form class="arti-form" method="POST" action="/articulo">
      @csrf
      <label for="name" class="label label-name">Articulo: </label>
      <input type="text" name="name" id="name" class="input input-name">

      <label for="cant" class="label label-cant">Cantidad: </label>
      <input type="number" name="cant" id="cant" class="input input-cant">

      <label for="price" class="label label-price">Precio: </label>
      <input type="number" name="price" id="price" class="input input-price">
      
      <button class="btn save-btn">Guardar</button>
    </form>
  </div>
</body>
</html>