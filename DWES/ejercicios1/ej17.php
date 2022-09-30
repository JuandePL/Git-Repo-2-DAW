<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>

<body>
    <h1>Ejercicio 17</h1>
    <p>17. Crea un array con valores entre 1-10, posteriormente modifique los valores de este para poner las notas de
        forma textual (Suspenso, Aprobado, Notable, Sobresaliente).</p>

    <?php
    $array = array();
    for ($i = 0; $i < 7; $i++) {
        array_push($array, rand(0, 10));
    }
    echo "Array inicial: [" . implode(", ", $array) . "]<br>";

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < 5) $array[$i] = "INSUFICIENTE";
        elseif ($array[$i] >= 5 && $array[$i] < 7) {
            $array[$i] = "SUFICIENTE";
        } elseif ($array[$i] >= 7 && $array[$i] < 9) {
            $array[$i] = "NOTABLE";
        } elseif ($array[$i] >= 9) {
            $array[$i] = "SOBRESALIENTE";
        }
    }

    echo "Array resultante: [" . implode(", ", $array) . "]<br>";
    ?>
</body>

</html>