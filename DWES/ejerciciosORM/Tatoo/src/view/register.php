<!DOCTYPE html>
<html lang="es">

<?php
$title = "Register";
require_once __DIR__ . '/modules/header.php';

$error = isset($_GET['error']) ? $_GET['error'] : null;
if ($user) {
  header("Location:../../");
}
?>

<body>
  <main>
    <form action="../app/SessionController.php?isRegister=true" method="post" class="userForm">
      <?php if ($error) { ?>
        <div class="error"><?php echo $error ?></div>
      <?php } ?>

      <h1>Registrar usuario</h1>
      <label for="email" class="col-30">Correo electrónico: </label>
      <input type="email" class="col-60" name="email" required>
      <br>
      <label for="name" class="col-30">Nombre: </label>
      <input type="text" class="col-60" name="name" required>
      <br>
      <label for="password" class="col-30">Contraseña: </label>
      <input type="password" class="col-60" name="password" required>
      <br>
      <label for="confirmPassword" class="col-30">Confirmar contraseña: </label>
      <input type="password" class="col-60" name="confirmPassword" required>
      <br>
      <label for="phone" class="col-30">Teléfono: </label>
      <input type="number" class="col-60" name="phone" required>
      <br>
      <label for="address" class="col-30">Dirección: </label>
      <input type="text" class="col-60" name="address" required>
      <br>
      <label for="city" class="col-30">Ciudad: </label>
      <input type="text" class="col-60" name="city" required>
      <br>
      <label for="role" class="col-30" style="margin-top: 0.3em">Rol: </label>
      <span class="col-60">
        <label for="Client">Cliente</label>
        <input type="radio" name="role" value="Client" id="Client" required>
        <label for="Tatooer">Tatuador</label>
        <input type="radio" name="role" value="Tatooer" id="Tatooer">
      </span>
      <div class="center" style="margin-top: 0.3em">
        <button id="btnRegister" type="submit">Registrate</button>
        <a href="login.php"><button type="button" id="btnLogin">Inicia Sesion</button></a>
      </div>
    </form>
  </main>
</body>

</html>