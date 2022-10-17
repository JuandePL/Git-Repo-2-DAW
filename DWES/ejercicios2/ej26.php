<?php
$title = "Ejercicio 26";
$description = "26. Diseña una función que determine la cantidad total a pagar por una llamada telefónica
    de acuerdo con las siguientes premisas:
    
    <ul>
        <li>Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.</li>
        <li>Cada minuto adicional a partir de los 3 primeros cuesta 5 céntimos/minuto.</li>
    </ul>
    -------------------------------------------------------------------------------
    -------------------------------------------------------------------------------";

$code = function () {
    function callFee($callDuration) {
        if ($callDuration < 3) return 10;

        return 10 + (($callDuration - 3) * 5);
    }

    $minutos = 2;
    echo "La llamada ha durado <b>$minutos minutos</b> y ha costado <b>" . callFee($minutos) . " céntimos</b>";
};

include("../template.php");
