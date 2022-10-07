<?php
function random() {
    return rand(0, 10);
}

function numberToLetter($num) {
    $dictionary = array(
        5 => "a",
        6 => "b",
        1 => "c",
        4 => "d",
        2 => "e",
        5 => "f",
        9 => "g",
        10 => "h",
        7 => "i",
        3 => "j",
        8 => "k",
        0 => "l"
    );
    return $dictionary[$num];
}

function generateArray($x, $y = 0) {
    $matrix = array();

    for ($i = 0; $i < $x; $i++) {
        if ($y == 0) {
            $matrix[$i] = random();
        } else {
            for ($j = 0; $j < $y; $j++) {
                $matrix[$i][$j] = random();
            }
        }
    }

    return $matrix;
}

function printArray($array) {
    return "[" . implode(", ", $array) . "]";
}

function printMatrix($matrix) {
    foreach ($matrix as $key => $value) {
        echo "<br> Elemento $key = { ";
        foreach ($value as $key2 => $value2) {
            //echo "\"$key2\" = \"$value2\", ";
            echo "$value2, ";
        }
        echo " }";
    }
}

function segundoGrado($a, $b, $c) {
    $suma = (-$b + sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
    $resta = (-$b - sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
    return array($suma, $resta);
}

function isPrime($number) {
    if ($number == 1) return true;

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) return false;
    }

    return true;
}

function generateDni() {
    return dniLetter(rand(10000000, 99999999));
}

/**
 * Devuelve el DNI completo si es correcto.
 */
function dniLetter($dni) {
    $dni_letters = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
    $completeDni = $dni . $dni_letters[$dni % count($dni_letters)];

    if (checkDni($completeDni)) {
        return $completeDni;
    }
}

/**
 * Comprueba si el DNI es correcto.
 */
function checkDni($numberDni) {
    $dni = (string)$numberDni;

    if (strlen((string)$dni) != 9) {
        echo "El DNI no tiene 8 números<br>";
        return;
    }

    if (is_numeric(substr($dni, -1))) {
        echo "El último carácter no es un número.<br>";
        return;
    }
    return $dni;
}
