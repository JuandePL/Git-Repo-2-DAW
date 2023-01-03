<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - Curriculum</title>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
</head>

<body>
    <?php
    include "templates/header.php";

    $errno = isset($_POST['errno']) ? $_POST['errno'] : false;
    $errstr = isset($_POST['errstr']) ? $_POST['errstr'] : false;
    ?>

    <div class="row">
        <div class="col-md-12 d-flex flex-column justify-content-center align-items-center text-white vh-100">
            <h1><?php echo $errno ?></h1>
            <h4><?php echo $errstr ?></h4>
            <p>Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>
            <a href="/">Volver al inicio</a>
        </div>
    </div>
</body>

</html>