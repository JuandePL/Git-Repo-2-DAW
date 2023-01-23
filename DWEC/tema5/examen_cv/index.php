<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Curriculum</title>
</head>

<body>
    <?php include "view/templates/header.php" ?>

    <main class="container">
        <!-- Heroe -->
        <div class="container col-xxl-16 px-4 py-5 bg-light rounded-3 border">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="https://getbootstrap.com/docs/5.0/examples/heroes/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="700" height="500">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Crea tu propio currículum</h1>
                    <p class="lead">En esta página web, puedes crear tu currículum vitae a tu gusto.
                        <br>Podrás editar y listarlos cuando quieras, además de poder crear tantos currículums como necesites.
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <?php if ($userObject) { ?>
                            <a href="#"><button type="button" class="btn btn-outline-primary btn-lg px-4">Mis CV</button></a>
                            <a href="/view/newCurriculum.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Nuevo CV</button></a>
                        <?php } else { ?>
                            <a href="view/login.php"><button type="button" class="btn btn-outline-primary btn-lg px-4">Iniciar sesión</button></a>
                            <a href="view/register.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Registrarse</button></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "view/templates/footer.php" ?>
</body>

</html>