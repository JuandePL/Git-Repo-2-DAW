<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Curriculum</title>
    <link rel="stylesheet" href="/view/css/userForm.css">
</head>

<body>
    <?php
    include "templates/header.php";

    if ($userObject) {
        header("Location:../");
    }
    ?>

    <main class="container">
        <!-- Formulario login -->
        <div class="form-signin">
            <?php
            // Comprobar si hay algun error en el formulario
            $error = isset($_GET["error"]) ? $_GET["error"] : false;

            if ($error) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php } ?>

            <form action="/controller/SessionController.php?isRegister=true" method="post" enctype="multipart/form-data">
                <h1 class="h3 mb-3 fw-normal">Registro de usuario</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" autofocus required>
                    <label for="floatingInput">Correo electrónico</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="username" id="username" placeholder="name" max="25" required>
                    <label for="floatingInput">Nombre de usuario</label>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Nombre y apellidos</span>
                    <input type="text" name="name" id="name" class="form-control" required>
                    <input type="text" name="surname" id="surname" class="form-control" required>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <label for="floatingPassword">Contraseña</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Password" required>
                    <label for="floatingPassword">Confirmar contraseña</label>
                </div>
                <span class="input-group mb-3">
                    <label class="input-group-text" for="image">Foto de perfil (Opcional)</label>
                    <input type="file" class="form-control" name="image" id="image" accept=".png, .jpg, .jpeg">
                </span>

                <button class="w-100 btn btn-lg btn-primary" style="margin-bottom: 1rem;" type="submit">Registrarse</button>
                <a href="/view/login.php">¿Ya tienes una cuenta? Iniciar sesión</a>
            </form>
        </div>
    </main>

</body>

</html>