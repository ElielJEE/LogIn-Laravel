<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/global-styles.css')}}">
  <title>Register</title>
</head>

<body>
  <div class="form-container">
    <div class="form-container__center">
      <h1 class="form-title">Registrarse</h1>
      <form action="/register" method="POST" class="form-content resgister-form">
        @csrf
        <label class="input-label">
          <input class="input register-input" type="text" name="user_name" placeholder=" " autocomplete="off">
          <span class="placeholder-span">Ingresar usuario</span>          
        </label>
        <label class="input-label">
          <input class="input register-input" type="password" name="password" placeholder=" " autocomplete="off">
          <span class="placeholder-span">Contrseña</span>
        </label>
        <button class="btn-submit">
          <span class="btn-title">
            Registrarse
          </span>
        </button>
        <a href="/login" class="btn-second">
          <span class="second-btn__title">
            Iniciar sesion
          </span>
        </a>
      </form>
    </div>
  </div>
</body>

</html>