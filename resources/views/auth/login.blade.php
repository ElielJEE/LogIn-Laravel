<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/global-styles.css')}}">
  <title>Login</title>
</head>

<body>
  <div class="form-container">
    <div class="form-container__center">
      <h1 class="form-title">Iniciar Sesion</h1>
      <form action="/login" method="POST" class="form-content login-form">
        @csrf
        <label class="input-label">
          <input class="input login-input" type="text" name="user_name" placeholder=" " autocomplete="off">
          <span class="placeholder-span">Ingrese usuario</span>
        </label>
        <label class="input-label">
          <input class="input login-input" type="password" name="password" placeholder=" " autocomplete="off">
          <span class="placeholder-span">Contraseña</span>
        </label>
        <button class="btn-submit">
          <span class="btn-title">
            Iniciar
          </span>
        </button>
        <a href="/register" class="btn-second">
          <span class="second-btn__title">
            Registrarse
          </span>
        </a>
      </form>
    </div>
  </div>
</body>

</html>