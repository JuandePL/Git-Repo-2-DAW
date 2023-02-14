<!DOCTYPE html>
<html lang="es">

<?php
$title = "Login";
require_once __DIR__ . '/modules/header.php';

$error = isset($_GET['error']) ? $_GET['error'] : null;
if ($user) {
  header("Location:../../");
}
?>

<body>
  <main>
    <form action="../app/SessionController.php?isLogin=true" method="post" class="userForm">
      <?php if ($error) { ?>
        <div class="error"><?php echo $error ?></div>
      <?php } ?>

      <h1>Login</h1>
      <label for="email" class="col-30">Correo electrónico: </label>
      <input type="email" class="col-60" name="email" required>
      <br>
      <label for="password" class="col-30">Contraseña: </label>
      <input type="password" class="col-60" name="password" required>
      <br>
      <div class="center" style="margin-top: 0.3em">
        <button type="submit" id="btnLogin">Inicia Sesion</button>
        <a href="register.php"><button id="btnRegister" type="button">Registrate</button></a>
      </div>
    </form>
  </main>
</body>

</html>