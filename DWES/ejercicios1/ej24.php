<?php
$title = "Ejercicio 24";
$description = "24. Genere un array de 20 números aleatorios y determine cuales de ellos son primos (son
    primos si solo se pueden dividir por 1 y por ellos mismos), si no existe ninguno deberá
    mostrar “No hay números primos”.";

$code = function () {
    function isPrime($number) {
        if ($number == 1) return true;

        for ($i = 2; $i <= $number / 2; $i++) {
            if ($number % $i == 0) return false;
        }

        return true;
    }

    $array = array();

    for ($i = 0; $i < 20; $i++) {
        $array[$i] = rand(0, 40);
    }
    echo "Array: [" . implode(", ", $array) . "]<br><br>";

    $primeExists = false;
    for ($i = 0; $i < 20; $i++) {
        if (isPrime($array[$i])) {
            echo "El número " . $array[$i] . " es primo.<br>";
            $primeExists = true;
        }
    }

    if ($primeExists == false) echo "No hay números primos.";
};

include("template.php");
