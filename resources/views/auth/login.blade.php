<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
  <form action="/login" method="POST">
    @csrf
    username
    <input type="text" name="user_name">
    password
    <input type="password" name="password">
    <input type="submit" value="Iniciar">
  </form>
</body>
</html>