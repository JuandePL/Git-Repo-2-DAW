<?php
$title = "Ejercicio 28";
$description = "28. Calcule el resultado de una ecuación de 2o grado, utilice la función del ejercicio 27.";

$code = function () {
    include("functions.php");

    function randomizer() { return rand(-6, 6); }
    $a = randomizer();
    $b = randomizer();
    $c = randomizer();
    echo $a . "x² + $b" . "x + $c<br>";

    $array = segundoGrado($a, $b, $c);
    echo "Solución 1: $array[0]<br>";
    echo "Solución 2: $array[1]";
};

include("template.php");
