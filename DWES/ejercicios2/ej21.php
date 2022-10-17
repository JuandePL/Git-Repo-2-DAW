<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>

<body>
    <h1>Ejercicio 21</h1>
    <p>21. Cree una matriz con numeros aleatorios de tamaño 3x3, posteriormente representala por pantalla.</p>

    <?php
    include("../functions.php");
    
    $matrix = generateArray(3, 3);
    echo print_r($matrix);
    ?>
</body>

</html>