<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo CV - Curriculum</title>
    <link rel="stylesheet" href="/view/css/userForm.css">
    <style>
        #pages>div {
            height: 75vh;
            padding: 0 1em;
            max-height: 100vh;
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
            <div id="errorBox" class="alert alert-danger text-center alert-dismissible fade show" role="alert" style="display: <?php echo $error ? 'block' : 'none' ?>">
                <span id="error"><?php echo $error ?? ''; ?></span>
                <button id="close-box" type="button" class="btn-close"></button>
            </div>

            <!-- Formulario -->
            <form id="completeForm">
                <div id="pages">
                    <div id="page-1">
                        <h1 class="h3 mb-3 fw-normal text-center">Datos personales</h1>

                        <div class="form-floating">
                            <input type="text" class="form-control" name="worker-name" id="worker-name">
                            <label>Nombre</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="worker-surname" id="worker-surname">
                            <label>Apellidos</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control" name="worker-email" id="worker-email">
                            <label>Correo electrónico</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="worker-location" id="worker-location">
                            <label>Localidad</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="worker-phone" id="worker-phone">
                            <label>Teléfono</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="job-to-look-for" id="job-to-look-for">
                            <label>Puesto de trabajo que buscas</label>
                        </div>
                        <div class="form-check mt-3 mb-3">
                            <input class="form-check-input" type="checkbox" id="useWorkerNames">
                            <label class="form-check-label" for="useWorkerNames">Usar nombre actual</label>
                        </div>
                    </div>

                    <div id="page-2">
                        <h1 class="h3 mb-3 fw-normal text-center">Sobre tí</h1>
                        <textarea class="form-control" name="about-me" id="about-me" rows="5" placeholder="Destaca por qué eres la persona adecuada para el trabajo. Cuenta cómo eres, tus aficiones y hobbies, cómo trabajas..."></textarea>
                    </div>

                    <div id="page-3">
                        <h1 class="h3 fw-normal text-center">Formación académica</h1>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button id="close-formation-form" type="button" class="btn btn-danger w-100 d-flex align-items-center d-none text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle me-1" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                </svg>Cerrar formulario
                            </button>
                            <button id="open-formation-form" type="button" class="btn btn-primary w-100 d-flex align-items-center d-none text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle me-1" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg>Nueva formación
                            </button>
                        </div>
                        <div id="formation-form">
                            <div class="mb-3">
                                <label for="form-academic-center" class="form-label mt-3">Centro académico</label>
                                <input type="text" class="form-control" id="form-academic-center">
                            </div>
                            <div class="mb-3">
                                <label for="form-academic-title" class="form-label">Título de formación</label>
                                <input type="text" class="form-control" id="form-academic-title">
                            </div>
                            <div class="mb-3">
                                <label for="form-formation-date-start" class="form-label">Fecha de inicio (elige mes y año)</label>
                                <input id="form-formation-date-start" class="form-control" type="date" max="<?php echo date('Y-m-d') ?>" />
                            </div>

                            <label for="form-formation-date-finish" class="form-label">Fecha de finalización (elige mes y año)</label>
                            <input id="form-formation-date-finish" class="form-control" type="date" />
                            <div class="form-check mt-3 mb-3">
                                <input class="form-check-input" type="checkbox" id="form-formation-date-finish-present">
                                <label class="form-check-label" for="form-formation-date-finish-present">Formación sin finalizar</label>
                            </div>

                            <button type="button" id="create-new-formation" class="w-100 btn btn-lg btn-primary">Añadir formación</button>
                        </div>

                        <div id="formation-table-div" class="form-control mt-3 d-none">
                            <h5 class="text-center w-100 pt-3 mb-3">Lista de formaciones</h5>
                            <table id="formation-table" class="table table-stripped table-hover pb-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Centro académico</th>
                                        <th>Título de formación</th>
                                        <th>Fecha de inicio</th>
                                        <th>Fecha de finalización</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="formation-table-body" class="table-group-divider">
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div id="page-4">
                        <h1 class="h3 mb-3 fw-normal text-center">Experiencia</h1>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button id="close-experience-form" type="button" class="btn btn-danger w-100 d-flex align-items-center d-none text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle me-1" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                </svg>Cerrar formulario
                            </button>
                            <button id="open-experience-form" type="button" class="btn btn-primary w-100 d-flex align-items-center d-none text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle me-1" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg>Nueva experiencia
                            </button>
                        </div>
                        <div id="experience-form">
                            <div class="mb-3">
                                <label for="form-experience-company" class="form-label mt-3">Nombre de la empresa</label>
                                <input type="text" class="form-control" id="form-experience-company">
                            </div>
                            <div class="mb-3">
                                <label for="form-experience-role" class="form-label">Cargo ocupado</label>
                                <input type="text" class="form-control" id="form-experience-role">
                            </div>
                            <div class="mb-3">
                                <label for="form-experience-tasks" class="form-label">Algunas tareas realizadas:</label>
                                <textarea rows="2" class="form-control" id="form-experience-tasks"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="form-experience-date-start" class="form-label">Fecha de inicio (elige mes y año)</label>
                                <input id="form-experience-date-start" class="form-control" type="date" max="<?php echo date('Y-m-d') ?>" />
                            </div>

                            <label for="form-experience-date-finish" class="form-label">Fecha de finalización (elige mes y año)</label>
                            <input id="form-experience-date-finish" class="form-control" type="date" />
                            <div class="form-check mt-3 mb-3">
                                <input class="form-check-input" type="checkbox" id="form-experience-date-finish-present">
                                <label class="form-check-label" for="form-experience-date-finish-present">Trabajo vigente</label>
                            </div>

                            <button type="button" id="create-new-experience" class="w-100 btn btn-lg btn-primary mb-3">Añadir experiencia</button>
                        </div>
                        <div id="experience-table-div" class="form-control mt-3 d-none">
                            <h5 class="text-center w-100 pt-3 mb-3">Lista de experiencia</h5>
                            <table id="experience-table" class="table table-stripped table-hover pb-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre de la empresa</th>
                                        <th>Cargo ocupado</th>
                                        <th>Algunas tareas realizadas</th>
                                        <th>Fecha de inicio</th>
                                        <th>Fecha de finalización</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="experience-table-body" class="table-group-divider">
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div id="page-5">
                        <h1 class="h3 mb-3 fw-normal text-center">Idiomas</h1>

                        <div class="row row-cols-3 g-3 align-items-center mb-3">
                            <div class="col-6">
                                <input type="text" id="form-language-name" class="form-control" placeholder="Idioma">
                            </div>
                            <div class="col-2">
                                <input type="number" class="form-control" id="form-language-percentage-number" max="100" onkeyup="changePercentage(this.value)">
                            </div>
                            <div class="col">
                                <input type="range" class="form-range" id="form-language-percentage-range" onchange="changePercentage(this.value)">
                            </div>
                        </div>
                        <button type="button" class="btn btn-lg btn-primary w-100" onclick="addLanguage()">Añadir idioma</button>

                        <div id="language-table-div" class="form-control mt-3 d-none">
                            <h5 class="text-center w-100 mb-3 pt-3">Lista de idiomas</h5>
                            <table id="language-table" class="table table-stripped table-hover pb-3">
                                <thead>
                                    <tr>
                                        <th>Idioma</th>
                                        <th>Porcentaje</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="language-table-body" class="table-group-divider">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between pb-3">
                    <a id="previousPage" class="btn btn-lg link-secondary p-0 m-0" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                        <span class="text-decoration-underline">Atrás</span>
                    </a>
                    <a id="nextPage" class="btn btn-lg link-primary p-0 m-0" role="button">
                        <span class="text-decoration-underline">Siguiente</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </a>
                    <button id="sendForm" class="btn btn-lg btn-primary" style="display: none;">Crear CV</button>
                </div>
            </form>
        </div>
    </main>

    <script src="/view/js/script.js"></script>
    <script src="/view/js/newCV/newCvVariables.js"></script>
    <script src="/view/js/newCV/newCurriculum.js"></script>
    <script src="/view/js/newCV/editCurriculum.js"></script>
    <script src="/view/js/newCV/newCvFormationSection.js"></script>
    <script src="/view/js/newCV/newCvExperienceSection.js"></script>
    <script src="/view/js/newCV/newCvLanguagesSection.js"></script>

</body>

</html>