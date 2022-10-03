<?php
$title = "Ejercicio 23";
$description = "23. En un primer archivo .php cree una función que genere números aleatorios entre 1 y 10,
    así como otra función que haciendo uso de un diccionario (array que asigna números a
    letras) genere una clave. Por último, invoque en un nuevo archivo .php a dicha función
    y representala por la pantalla.";

$code = function () {
    include("ej23_1.php");

    $num = random();
    echo "El número $num equivale a la letra " . strtoupper(numberToLetter($num));
};

include("template.php");
