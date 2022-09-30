<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <h1>Ejercicio 5</h1>
    <p>5. Genera un numero aleatorio entre 0-10 en función de éste muestre INSUFICIENTE si está entre 0 y 5, SUFICIENTE entre 5 y 7, NOTABLE entre 7-8 y SOBRASALIENTE entre 9-10.</p>

    <?php
    $num = rand(0, 10);

    echo "Tienes un $num <br>";

    if ($num < 5) echo "INSUFICIENTE";
    elseif ($num >= 5 && $num < 7) {
        echo "SUFICIENTE";
    } elseif ($num >= 7 && $num < 9) {
        echo "NOTABLE";
    } elseif ($num >= 9) {
        echo "SOBRESALIENTE";
    }
    ?>
</body>

</html>