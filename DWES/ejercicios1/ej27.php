<?php
$title = "Ejercicio 27";
$description = "Realice una función que al pasarle una ecuación de 2o grado determine el valor de a, b y c.";

$code = function () {
    include("functions.php");

    $a = 1;
    $b = -4;
    $c = 4;
    echo $a . "x² + $b" . "x + $c<br>";

    $array = segundoGrado($a, $b, $c);
    echo "Solución 1: $array[0]<br>";
    echo "Solución 2: $array[1]";
};

include("template.php");
