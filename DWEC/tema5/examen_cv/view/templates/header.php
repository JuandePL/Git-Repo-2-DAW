<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>

<?php require_once __DIR__ . '/../../controller/SessionController.php' ?>

<header class="container d-flex flex-wrap align-items-center justify-content-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="/favicon.ico" alt="CV Logo">
    </a>

    <div class="col-md-3 text-end w-auto">
        <?php
        if (!$userObject) { ?>
            <a href="<?php echo '/view/login.php' ?>"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
            <a href="<?php echo '/view/register.php' ?>"><button type="button" class="btn btn-primary">Sign-up</button></a>
        <?php } else { ?>
            <div class="dropdown">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $userObject->avatar_url ?>" alt="<?php echo $userObject->username ?>" class="rounded-circle" width="32" height="32">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="/view/newCurriculum.php">Nuevo curriculum...</a></li>
                    <li><a class="dropdown-item" href="/view/myCurriculums.php">Mis curriculums</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Profile</a></li> -->
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/controller/SessionController.php?isLogout=true">Cerrar sesión</a></li>
                </ul>
            </div>
        <?php } ?>
    </div>


</header>

<script>
    /**
     * Funcion para definir el link activo del header
     */
    const setActiveNav = () => {
        // Obtener todos los enlaces del header
        const links = document.querySelectorAll('a')

        // Iterar sobre los links
        for (const link of links) {
            // Si el link esta activo, definir nueva regla CSS y cambiar href para no redirigir de nuevo
            if (window.location.toString() === link.href) {
                link.classList.remove("link-dark");
                link.classList.add("link-primary");
                link.href = "#";
            }
        }
    }

    setActiveNav()
</script>