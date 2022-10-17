<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>

<body>
    <h1>Ejercicio 11</h1>
    <p>11. Cree un array con los siguientes valores (2, 20, 3, 9, 3333, 50, 200, 33, 9), si son multiplos de 2 multiplicar por 2 y por 3 si son multiplos de 3.</p>

    <?php
    include("../functions.php");

    function multiplyIfMultiple($value, $number) {
        if ($value % $number == 0) {
            $value *= $number;
        }
        return $value;
    }

    $array = array(2, 20, 3, 9, 3333, 50, 200, 33, 9);

    echo "Array inicial: " . printArray($array);

    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = multiplyIfMultiple($array[$i], 2);
        $array[$i] = multiplyIfMultiple($array[$i], 3);
    }

    echo "<br>Array final: " . printArray($array);
    ?>
</body>

</html>