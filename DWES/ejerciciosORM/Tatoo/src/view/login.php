<!DOCTYPE html>
<html lang="es">

<?php
$title = "Login";
require_once __DIR__ . '/modules/header.php';
?>

<body>
  <main>
    <form action="./app/loginHandler.php?isLogin=true" method="post" class="userForm">
      <h1>Login</h1>
      <label for="username" class="col-30">Nombre de usuario: </label>
      <input type="text" class="col-60" name="username">
      <br>
      <label for="password" class="col-30">Contraseña: </label>
      <input type="password" class="col-60" name="password">
      <br>
      <label for="phone" class="col-30">Número de teléfono: </label>
      <input type="number" class="col-60" name="phone">
      <br>
      <label for="address" class="col-30">Dirección: </label>
      <input type="text" class="col-60" name="address">
      <br>
      <label for="city" class="col-30">Ciudad: </label>
      <input type="text" class="col-60" name="city">
      <br>
      <label for="role" class="col-30" style="margin-top: 0.3em">Rol: </label>
      <span class="col-60">
        <label for="Client">Cliente</label>
        <input type="radio" name="role" value="Client" name="Client">
        <label for="Tatooer">Tatuador</label>
        <input type="radio" name="role" value="Client" name="Tatooer">
      </span>
      <div class="center" style="margin-top: 0.3em">
        <button type="submit" id="btnLogin">Inicia Sesion</button>
        <a href="register.php"><button id="btnRegister" type="button">Registrate</button></a>
      </div>
    </form>
  </main>
</body>

</html>