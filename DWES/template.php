<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $description; ?></p>

    <!-- <p>------------------------------------------------------------------------------------------</p> -->
    <hr>

    <?php
    echo $code();
    ?>
</body>
</html>