<?php
$title = "Ejercicio 25";
$description = "25. Genere un array de tamaño 5x5 con números aleatorios, posteriormente devuelva la
    suma de las columnas y de las filas.";

$code = function () {
    include("ej23_1.php");

    $array = generateArray(5, 5);
    $sumaFilas = $sumaColumnas = 0;
    
    for ($i = 0; $i < count($array); $i++) {
        $sumaFilas += $array[$i][0];
        for ($j = 0; $j < count($array[$i]); $j++) {
            $sumaColumnas += $array[$i][$j];
        }
    }

    echo "<br>Suma de las columnas: $sumaColumnas<br>";
    echo "Suma de las filas: $sumaFilas<br>";
};

include("template.php");
