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
    <script src="/view/js/myCurriculums.js"></script>
</body>

</html>