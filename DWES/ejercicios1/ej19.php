<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>

<body>
    <h1>Ejercicio 19</h1>
    <p>19. Crea una función que divida dos numeros dados (debe lanzar una excepción si el divisor es 0 o menor),
        posteriormente utilice esta función para dividir dos números cualquiera (debe utilizar try-catch).</p>

    <?php
    function divideNumbers($num1, $num2) {
        if ($num2 <= 0) {
            throw new Exception("ERROR: No puedes dividir entre 0 o menos.");
        }
        return $num1 / $num2;
    }

    try {
        $a = 5;
        $b = -1;

        echo "$a / $b = ". divideNumbers($a, $b);
    } catch (Exception $e) {
        echo "ERROR: No se pudo dividir.";
    }
    ?>
</body>

</html>