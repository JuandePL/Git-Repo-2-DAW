<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Curriculum</title>
    <link rel="stylesheet" href="/view/css/userForm.css">
    <style>
        #pages > div {
            height: 500px;
            /* max-height: 600px; */
            overflow: auto;
        }
    </style>
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
            ?>

            <!-- Error Box -->
            <div id="errorBox" class="alert alert-danger text-center" role="alert" style="display: <?php echo $error ? 'block' : 'none' ?>">
                <span id="error"><?php echo $error ?? ''; ?></span>
            </div>

            <!-- Formulario -->
            <form action="/controller/CVController.php?isNew=true" method="post">
                <div id="pages">
                    <div id="page-1">
                        <h1 class="h3 mb-3 fw-normal text-center">Datos personales</h1>

                        <div class="form-floating">
                            <input type="text" class="form-control" name="worker-name" id="worker-name" max="100" required>
                            <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="worker-surname" id="worker-surname" max="100" required>
                            <label for="floatingInput">Apellidos</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="cv-description" id="cv-description" max="1000" required>
                            <label for="floatingInput">Descripción del CV (rol en tu trabajo)</label>
                        </div>
                        <div class="form-check mt-3 mb-3">
                            <input class="form-check-input" type="checkbox" id="useWorkerNames">
                            <label class="form-check-label" for="flexCheckDefault">Usar nombre actual</label>
                        </div>
                    </div>

                    <div id="page-2">
                        siu
                    </div>
                    <div id="page-3">
                        siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>siuu <br>
                    </div>
                    <div id="page-4">
                        siuuu
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a id="previousPage" class="btn btn-lg link-secondary p-0 m-0" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                        <span style="text-decoration: underline;">Atrás</span>
                    </a>
                    <a id="nextPage" class="btn btn-lg link-primary p-0 m-0" role="button">
                        <span style="text-decoration: underline;">Siguiente</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </a>
                    <button id="sendForm" class="btn btn-lg btn-primary" style="display: none;">Crear CV</button>
                </div>
            </form>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
    <script src="/view/js/newCurriculum.js"></script>

</body>

</html>