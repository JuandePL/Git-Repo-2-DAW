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

            <form id="form" method="post">
                <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="emailOrUser" placeholder="name@example.com" autofocus required>
                    <label for="floatingInput">Usuario o correo electrónico</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="floatingPassword">Contraseña</label>
                </div>

                <!-- <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> -->
                <button class="w-100 btn btn-lg btn-primary" style="margin-bottom: 1rem;" type="submit">Iniciar sesión</button>
                <a href="/view/register.php">¿No tienes una cuenta? Regístrate</a>
            </form>
        </div>
    </main>

    <p id="result"></p>

    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
    <script>
        // Filtrar valores formulario (comprobar si es correo o usuario)
        // y pasar valores filtrados al SessionController
        document.getElementById('form').onsubmit = (evt) => {
            evt.preventDefault();

            // Recogemos valores
            const emailOrUserText = document.getElementById('emailOrUser').value;
            const password = document.getElementById('password').value;

            // Comprobar si se ha introducido un correo o un usuario
            const isEmail = (/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i).test(emailOrUserText);

            // Redirigir a SessionController para realizar el login
            $.ajax({
                type: "POST",
                url: `/controller/SessionController.php?isLogin=true&isEmail=${isEmail ? 1 : 0}`,
                data: `${isEmail ? 'email' : 'username'}=${emailOrUserText}&password=${password}`,
                cache: false,
                success: (html) => {
                    if (html.includes("Inicio de sesion correcto.")) location.href = "/";

                    // Si el inicio de sesion no es correcto, muestra el error
                    document.write(html);
                }
            });
        }
    </script>
</body>

</html>