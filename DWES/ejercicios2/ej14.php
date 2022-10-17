<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>

<body>
    <h1>Ejercicio 14</h1>
    <p>14. Genere un array de tamaño 10 con valores aleatorios, posteriormente muestre los valores y sus claves.</p>

    <?php
    include("../functions.php");
    
    $array = array();

    for ($i = 0; $i < 10; $i++) {
        array_push($array, rand(0, 50));
    }

    echo "Array resultante: " . printArray($array);
    ?>
</body>

</html>