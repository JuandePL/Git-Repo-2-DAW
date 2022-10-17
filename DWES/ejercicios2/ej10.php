<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <h1>Ejercicio 10</h1>
    <p>10. Realiza la multiplicación de $a por $b mediante las técnicas de las sumas multiples.</p>

    <?php
    $a = 2;
    $b = 17;
    echo "Variable A: $a <br>";
    echo "Variable B: $b <br>";

    $multiplo = $a;
    $result = 0;
    while ($result < $a * $b) {
        $multiplo += $a;
        $result++;
    }

    echo "<br>$a * $b = $result";
    ?>
</body>

</html>