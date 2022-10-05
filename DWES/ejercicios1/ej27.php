<?php
$title = "Ejercicio 27";
$description = "Realice una función que al pasarle una ecuación de 2o grado determine el valor de a, b y c.";

$code = function () {
    function segundoGrado($a, $b, $c) {
        $suma = (-$b + sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
        $resta = (-$b - sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);

        echo "Solución 1: $suma<br>";
        echo "Solución 2: $resta";
    }

    $a = 1;
    $b = -4;
    $c = 4;
    echo "a: $a. b: $b. c: $c<br>";
    segundoGrado($a, $b, $c);
};

include("template.php");
