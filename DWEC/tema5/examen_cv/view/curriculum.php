<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Curriculum</title>
    <style>
        p.fs-5 {
            margin-bottom: 0.25rem;
        }
    </style>
</head>

<body>
    <?php include "templates/header.php" ?>

    <main class="container">
        <h1 id="cv-title" class="text-center"></h1>
        <h3 id="cv-subtitle" class="text-center fw-light text-disabled"></h3>
        <hr>

        <div class="row">
            <div class="col-md-auto mb-3">
                <div class="list-group">
                    <button id="menu-personal-data" type="button" class="list-group-item list-group-item-action active">Datos personales</button>
                    <button id="menu-formation" type="button" class="list-group-item list-group-item-action">Formación</button>
                    <button id="menu-experience" type="button" class="list-group-item list-group-item-action">Experiencia</button>
                </div>
            </div>
            <div id="cv-content" class="col">
                <div id="personal-data">
                    <p class="fs-5 fw-bold">Sobre mí</p>
                    <span id="about-me"></span>

                    <p class="fs-5 fw-bold mt-3">Información de contacto</p>
                    <div class="mb-2 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill me-2" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        <span id="location"></span>
                    </div>
                    <div class="mb-2 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill me-2" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg>
                        <span id="email"></span>
                    </div>
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill me-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <span id="phone"></span>
                    </div>

                    <p class="fs-5 fw-bold mt-3">Idiomas</p>
                    <div id="languages"></div>
                </div>
                <div id="formation" style="display: none;"></div>
                <div id="experience" style="display: none;"></div>
            </div>
        </div>
    </main>

    <?php include "templates/footer.php" ?>

    <script src="/view/js/curriculum.js"></script>
</body>

</html>