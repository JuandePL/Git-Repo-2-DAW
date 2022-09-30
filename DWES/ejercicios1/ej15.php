<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>

<body>
    <h1>Ejercicio 15</h1>
    <p>15. Guarde en una variable la cadena "Cadenas-en-PHP-es-facil", posteriormente cree un array con cada una de las palabras,
        por ultimo muestralas en distintas lineas (las palabras en las posiciones pares del array en mayusculas y las de las posiciones pares en minusculas)
        junto al numero de caracteres.</p>

    <?php
    $string = "Cadenas-en-PHP-es-facil";

    $array = explode('-', $string);

    for ($i=0; $i < count($array); $i++) { 
        if ($i % 2 == 0) {
            echo "<br>". strtoupper($array[$i]);
        } else {
            echo "<br>". strtolower($array[$i]);
        }
    }
    ?>
</body>

</html>