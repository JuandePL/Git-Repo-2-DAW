<!-- Realice una función que haga las operaciones básicas de una calculadore (sumar, restar, multiplicar y dividir).
El primer numero se guardará en la variable “num1”, el segundo en “num2” y el operador en “signoOperador”.
Esta función tendrá que ser invocada tras su creación y devolverá el mensaje “La operación de tipo de
operación realizada da como resultado x”.

Además, se tendrá que controlar que no se divida números entre 0, que las variables “num1” y “num2” sean
números y que “signoOperador” sea un string. Así mismo se deberá modificar el mensaje de error por defecto
por “Ocurrió un error en la calculadora. Código: número de error”. (4 puntos) -->

<?php
function customError($code, $mess, $file, $line) {
    echo "<h3>Ocurrión un error en la calculadora. Código: $code</h3>";
}
set_error_handler("customError");

function suma($num1, $num2) {
    return $num1 + $num2;
}
function resta($num1, $num2) {
    return $num1 - $num2;
}
function multiplicacion($num1, $num2) {
    return $num1 * $num2;
}
function division($num1, $num2) {
    try {
        return $num1 / $num2;
    } catch (DivisionByZeroError $ex) {
        echo "<b>ERROR</b>: No se puede dividir entre cero";
        // throw new Exception("ERROR: No se puede dividir entre cero");
        // trigger_error("Trigger para activar el customError()");
    } catch (\Throwable $th) {
        echo "<b>ERROR</b>: Ocurrió un error en la división";
        // throw new Exception("ERROR: Ocurrió un error en la división");
        // trigger_error("Trigger para activar el customError()");
    }
}

function imprimirResultado($operacion, $resultado) {
    echo "<p>La operación de tipo <b>$operacion</b> realizada da como resultado <b>$resultado</b></p>";
}


$num1 = rand(0, 10);
$num2 = rand(0, 10);
$operadores = ['+', '-', '*', '/'];
$signoOperador = $operadores[rand(0, count($operadores) - 1)];

echo "Numero 1: $num1<br>";
echo "Numero 2: $num2<br>";
echo "Signo operador: $signoOperador<br>";

// Comprobar que los tipos de variables son correctos
if (is_numeric($num1) && is_numeric($num2) && is_string($signoOperador)) {
    switch ($signoOperador) {
        case '+':
            imprimirResultado("suma", suma($num1, $num2));
            break;
        case '-':
            imprimirResultado("resta", resta($num1, $num2));
            break;
        case '*':
            imprimirResultado("multiplicacion", multiplicacion($num1, $num2));
            break;
        case '/':
            imprimirResultado("division", division($num1, $num2));
            break;
        default:
            echo "Operación no soportada";
            break;
    }
} else {
    echo "<h3>Los valores no son del tipo correcto.</h3>";
}
?>