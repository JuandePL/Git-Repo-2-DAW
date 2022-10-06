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

function generateArray($x, $y) {
    $matrix = array();

    for ($i = 0; $i < $x; $i++) {
        for ($j = 0; $j < $y; $j++) {
            $matrix[$i][$j] = random();
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
