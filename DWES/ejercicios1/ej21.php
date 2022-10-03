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
    function random() {
        return rand(0, 20);
    }

    function generateArray($x, $y) {
        $matrix = array();

        for ($i = 0; $i < $x; $i++) {
            for ($j = 0; $j < $y; $j++) {
                $matrix[$i][$j] = random();
            }
        }

        return $matrix;
    }

    $matrix = generateArray(3, 3);
    echo print_r($matrix);
    ?>
</body>

</html>