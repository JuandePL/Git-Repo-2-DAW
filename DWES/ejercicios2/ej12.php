<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>

<body>
    <h1>Ejercicio 12</h1>
    <p>12. Calcule la letra del DNI (se debe dividir el numero entre 23 y con el resto ver la letra que le corresponde).
        El DNI se guardará en la variable $a y las letras con su correspondencia en un array llamado $letras.</p>

    <?php
    $dni_letters = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
    $dni = 48123931;

    echo "DNI sin letra: $dni<br>";
    echo "Número del DNI: " . $dni_letters[$dni % count($dni_letters)];
    ?>
</body>

</html>