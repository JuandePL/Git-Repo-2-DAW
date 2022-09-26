<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <h1>Ejercicio 9</h1>
    <p>9. Realiza la división de $a entre $b mediante las técnicas de las restas multiples.</p>

    <?php
    $a = 50;
    $b = 2;
    echo "Variable A: $a <br>";
    echo "Variable B: $b <br>";

    $dividendo = $a;
    $result = 0;
    while ($dividendo >= $b) {
        $dividendo -= $b;
        $result++;
    }

    echo "<br>$a / $b = $result";
    if ($dividendo > 0) echo "<br> El resto es $dividendo";
    ?>
</body>

</html>