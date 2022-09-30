<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <h1>Ejercicio 6</h1>
    <p>6. Muestre todos los valores pares comprendidos entre 0 y 50.</p>

    <?php
    for ($i = 0; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
    }
    ?>
</body>

</html>