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

    if (!$userObject) {
        header("Location:../");
    }
    ?>

    <main class="container">
        <!-- Formulario -->
        <div style="max-width: 800px; margin: auto;">
            <?php
            // Comprobar si hay algun error en el formulario
            $error = isset($_GET["error"]) ? $_GET["error"] : false;

            if ($error) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php } ?>

            <form action="/controller/CVController.php?isNew=true" method="post" enctype="multipart/form-data">
                <h1 class="h3 mb-3 fw-normal text-center">Crear nuevo currículum</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" name="worker-name" id="worker-name" max="100" required>
                    <label for="floatingInput">Nombre</label>
                </div>
                <div class="form-floating">
                    <input type="text" style="border-bottom-left-radius: 0; border-bottom-right-radius: 0;"
                        class="form-control" name="worker-surname" id="worker-surname" max="100" required>
                    <label for="floatingInput">Apellidos</label>
                </div>
                <div class="form-check mt-3 mb-3">
                    <input class="form-check-input" type="checkbox" id="selectWorkerNames">
                    <label class="form-check-label" for="flexCheckDefault">Usar nombre actual</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" style="margin-bottom: 1rem;" type="submit">Registrarse</button>
                <a href="/view/login.php">¿Ya tienes una cuenta? Iniciar sesión</a>
            </form>
        </div>
    </main>

</body>

</html>