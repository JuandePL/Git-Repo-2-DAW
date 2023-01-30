<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de CVs - Curriculum</title>
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
        <!-- Success Box -->
        <?php
        // Comprobar si hay algun texto en el get
        $success = isset($_GET["success"]) ? $_GET["success"] : false;
        ?>
        <div id="successBox" class="alert alert-success text-center alert-dismissible fade show" role="alert" style="display: <?php echo $success ? 'block' : 'none' ?>">
            <span id="error"><?php echo $success ?? ''; ?></span>
            <button id="close-box" type="button" class="btn-close"></button>
        </div>

        <!-- Curriculums -->
        <h1 class="h3 mb-4 fw-normal text-center">Lista de curriculums</h1>
        <div id="curriculums" class="d-flex justify-content-evenly"></div>
    </main>

    <?php include "templates/footer.php" ?>

    <script src="/view/js/script.js"></script>
    <script>
        // Ocultar mensaje
        document.getElementById('close-box').onclick = () => document.getElementById('successBox').style.display = 'none'


        // Obtener info CVs
        const curriculumsDiv = document.getElementById('curriculums')
        curriculumsDiv.innerHTML = ''

        // Peticion AJAX para obtener info de CVs
        $.ajax({
            type: "GET",
            url: "/controller/CVController.php?getCVDescriptionsAndDates=true",
            success: dataArray => {
                // Parsear string JSON a objeto
                const dataJson = JSON.parse(dataArray)

                // Recorrer JSON
                dataJson.forEach(obj => {
                    let id, description, createdAt

                    // Por cada CV que haya, sacar sus datos
                    Object.entries(obj).forEach(([key, value]) => {
                        if (key == 'cv_id') id = value
                        if (key == 'description') description = value
                        if (key == 'created_at') createdAt = new Date(value)
                    });
                    curriculumsDiv.innerHTML += `
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">${description}</h5>
                            <p class="card-subtitle text-muted">
                                Creado el ${createdAt.toLocaleDateString(dateOptions)}
                                a las ${createdAt.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'})}
                            </p>
                            <a href="/view/curriculum.php/${id}" class="stretched-link"></a>
                        </div>
                    </div>`
                });
            }
        })
    </script>
</body>

</html>