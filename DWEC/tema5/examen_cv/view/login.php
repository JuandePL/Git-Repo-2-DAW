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
    <?php include "templates/header.php" ?>

    <main class="container">

        <div class="form-signin">
            <form id="loginForm">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autofocus>
                    <label for="floatingInput">Usuario o correo electrónico</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Contraseña</label>
                </div>

                <!-- <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> -->
                <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
            </form>
        </div>
    </main>

    <?php include "templates/footer.php" ?>

    <script>
        // TODO: Filtrar valores formulario (comprobar si es correo o usuario)
        // Y pasar valores filtrados al SessionController
    </script>
</body>

</html>