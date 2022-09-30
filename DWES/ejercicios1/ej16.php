<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>

<body>
    <h1>Ejercicio 16</h1>
    <p>16. Cree un array con 7 valores aleatorios, posteriormente calcula la media de sus valores y el valor mayor y
        menor (recorriendolo).</p>

    <?php

    $array = array();
    for ($i = 0; $i < 7; $i++) {
        array_push($array, rand(0, 50));
    }
    echo "Array: [" . implode(", ", $array) . "]<br>";

    $higher = 0;
    $lower = 100;
    $total = 0;

    foreach ($array as $value) {
        if ($higher <= $value) $higher = $value;
        if ($lower >= $value) $lower = $value;
        $total += $value;
    }

    echo "Valor más alto: $higher<br>";
    echo "Valor más bajo: $lower<br>";
    echo "Media del array: ".$total / count($array);
    ?>
</body>

</html>