<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
</head>
<body>
  <h1>Home</h1>

  @auth
    <p>Has iniciado sesion como <strong>{{auth()->user()->user_name}}</strong></p>
    <a href="/logout">Cerrar Sesion</a>
  @endauth

  @guest
    <p>Debes <a href="/login">iniciar sesion</a></p>
  @endguest
</body>
</html>