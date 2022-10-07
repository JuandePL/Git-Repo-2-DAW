<?php
$title = "Ejercicio 25";
$description = "25. Genere un array de tamaño 5x5 con números aleatorios, posteriormente devuelva la
    suma de las columnas y de las filas.";

$code = function () {
    include("functions.php");

    $arrayFilas = $arrayColumnas = array();
    $array = generateArray(5, 5);
    printMatrix($array);

    for ($fila = 0; $fila < count($array); $fila++) {
        $sumaColumna = $sumaFila = 0;
        for ($columna = 0; $columna < count($array[$fila]); $columna++) {
            $sumaColumna += $array[$columna][$fila];
            $sumaFila += $array[$fila][$columna];
        }

        array_push($arrayColumnas, $sumaColumna);
        array_push($arrayFilas, $sumaFila);
    }

    echo "<br><br>Suma de las columnas: " . printArray($arrayColumnas) . "<br>";
    echo "Suma de las Filas: " . printArray($arrayFilas);
};

include("../template.php");
