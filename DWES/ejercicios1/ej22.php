<?php
$title = "Ejercicio 22";
$description = "22. Queremos realizar una encuesta a 10 personas, en esta encuesta indicaremos el sexo
    (1=masculino, 2=femenino), si trabaja (1=si trabaja, 2= no trabaja) y su sueldo estará
    entre 0 y 2000. Los valores deben ser generados aleatoriamente.
    Calcula el porcentaje de hombres (tengan o no trabajo), porcentaje de mujeres (tengan
    o no trabajo), el sueldo promedio de los hombres que trabajan y el sueldo promedio de
    las mujeres que trabajan.";

$code = function () {
    function generatePerson() {
        return array(
            "sexo" => rand(1, 2),
            "trabaja" => rand(1, 2),
            "sueldo" => rand(0, 2000)
        );
    }

    function personWorks($value) {
        return $value == 1;
    }
    function percentage($value, $total) {
        return ($value / $total) * 100;
    }
    function salarioPromedio($sueldo, $trabajadores) {
        if ($trabajadores != 0) {
            return $sueldo / $trabajadores;
        } else return 0;
    }

    $limite = 10;
    $hombres = $mujeres = $trabajaHombres = $trabajaMujeres = $sueldoHombres = $sueldoMujeres = 0;

    for ($i = 0; $i < $limite; $i++) {
        $person = generatePerson();

        if ($person["sexo"] == 1) {
            $hombres++;
            if (personWorks($person["trabaja"])) {
                $trabajaHombres++;
                $sueldoHombres += $person["sueldo"];
            }
        } else {
            $mujeres++;
            if (personWorks($person["trabaja"])) {
                $trabajaMujeres++;
                $sueldoMujeres += $person["sueldo"];
            }
        }
    }

    echo "<br>Porcentaje de hombres: " . percentage($hombres, $limite) . "%<br>";
    echo "Porcentaje de mujeres: " . percentage($mujeres, $limite) . "%<br>";
    echo "Sueldo promedio de hombres: " . salarioPromedio($sueldoHombres, $trabajaHombres) . " €<br>";
    echo "Sueldo promedio de mujeres: " . salarioPromedio($sueldoMujeres, $trabajaMujeres) . " €<br>";
};

include("template.php");
