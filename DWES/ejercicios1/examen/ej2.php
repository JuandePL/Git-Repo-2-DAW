<!-- Utilizando arrays almacene los siguientes datos (respete el nombre de las claves), esto deberá realizarse en la
función “cargarCiudades”. (4 puntos) -->

<?php
function cargarCiudades() {
    return array(
        array(
            "Nombre" => "Madrid",
            "País" => "España",
            "Continente" => "Europa",
            "Población" => 3.22,
            "Altitud" => 657
        ),
        array(
            "Nombre" => "Londres",
            "País" => "Reino Unido",
            "Continente" => "Europa",
            "Población" => 8.982,
            "Altitud" => 15
        ),
        array(
            "Nombre" => "Pekín",
            "País" => "China",
            "Continente" => "Asia",
            "Población" => 21.54,
            "Altitud" => 43
        ),
        array(
            "Nombre" => "Chicago",
            "País" => "EE.UU.",
            "Continente" => "América",
            "Población" => 2.699,
            "Altitud" => 182
        ),
        array(
            "Nombre" => "La Habana",
            "País" => "Cuba",
            "Continente" => "América",
            "Población" => 2.13,
            "Altitud" => 59
        ),
        array(
            "Nombre" => "Singapur",
            "País" => "Singapur",
            "Continente" => "Asia",
            "Población" => 5.686,
            "Altitud" => 0
        ),
    );
}

function numeroCiudadesPorContinente() {
    $ciudades = cargarCiudades();
    $arrayContinentes = array();

    // Hacemos loop y añadimos los continentes al array
    for ($i = 0; $i < count($ciudades); $i++) {
        $continente = $ciudades[$i]["Continente"];

        // Si existe, sumamos 1. Sino existe lo inicializamos
        if (key_exists($continente, $arrayContinentes)) {
            $arrayContinentes[$continente] += 1;
        } else {
            $arrayContinentes[$continente] = 1;
        }
    }

    return $arrayContinentes;
}

function mediaPoblacionPorContinente() {
    $ciudades = cargarCiudades();
    $totalPoblacion = 0;

    // Añadimos población de ciudad al total
    for ($i = 0; $i < count($ciudades); $i++) {
        $totalPoblacion += $ciudades[$i]["Población"];
    }
    
    // Devolvemos la media
    return "<br>La población media es de " . round($totalPoblacion / count($ciudades), 3) . " millones";
}

function mediaAltitudPorContinente() {
    $ciudades = cargarCiudades();
    $totalAltitud = 0;
    
    // Añadimos altitud de ciudad al total
    for ($i = 0; $i < count($ciudades); $i++) {
        $totalAltitud += $ciudades[$i]["Altitud"];
    }
    
    // Devolvemos la media
    return "<br>La altitud media es de " . round($totalAltitud / count($ciudades), 2) . " metros";
}


print_r(numeroCiudadesPorContinente());
echo mediaPoblacionPorContinente();
echo mediaAltitudPorContinente();

?>