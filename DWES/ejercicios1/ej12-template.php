<?php
$title = "Ejercicio 12";
$description = "12. Calcule la letra del DNI (se debe dividir el numero entre 23 y con el resto ver la letra que le corresponde).
El DNI se guardará en la variable \$a y las letras con su correspondencia en un array llamado \$letras.";

$code = function () {
    $dni_letters = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
    $dni = 48123931;

    echo "DNI sin letra: $dni<br>";
    echo "Número del DNI: " . $dni_letters[$dni % count($dni_letters)];
};

include("../template.php");
