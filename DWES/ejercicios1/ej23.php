<?php
$title = "Ejercicio 23";
$description = "23. En un primer archivo .php cree una función que genere números aleatorios entre 1 y 10,
    así como otra función que haciendo uso de un diccionario (array que asigna números a
    letras) genere una clave. Por último, invoque en un nuevo archivo .php a dicha función
    y representala por la pantalla.";

$code = function () {
    include("functions.php");

    function generateKey($size) {
        $key = "";
        for ($i = 0; $i < $size; $i++) {
            $key = $key . numberToLetter(random());
        }
        return $key;
    }

    echo "Clave generada: " . generateKey(10);
};

include("template.php");
