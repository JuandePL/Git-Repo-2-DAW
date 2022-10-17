<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <h1>Ejercicio 7</h1>
    <p>7. Cuenta el numero de multiplos de 2, 3 y 5 entre 1-50.</p>

    <?php

    echo "Múltiplos de 2: <br>";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            echo "$i, ";
        }
    }

    echo "<br><br>  Múltiplos de 3: <br>";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0) {
            echo "$i, ";
        }
    }

    echo "<br> <br> Múltiplos de 5: <br>";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 5 == 0) {
            echo "$i, ";
        }
    }
    ?>
</body>

</html>