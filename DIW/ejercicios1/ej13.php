<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>

<body>
    <h1>Ejercicio 13</h1>
    <p>13. Crea una calculadora que sume, reste, divida y multiplique (las operaciones deben realizarse en funciones distintas).</p>

    <?php
    function add($num1, $num2) { return $num1 + $num2; }
    function subtract($num1, $num2) { return $num1 - $num2; }
    function multiply($num1, $num2) { return $num1 * $num2; }
    function divide($num1, $num2) { return $num1 / $num2; }

    $a = rand(0, 15);
    $b = rand(0, 10);
    $array = array('+', '-', '*', '/');
    $c = $array[rand(0, count($array) - 1)];

    echo "Variable a: $a <br>";
    echo "Variable b: $b <br>";
    echo "Variable c: $c <br><br>";

    echo "$a $c $b = ";
    switch ('-') {
        case '+':
            echo add($a, $b);
            break;
        case '-':
            echo subtract($a, $b);
            break;
        case '*':
            echo multiply($a, $b);
            break;
        case '/':
            echo divide($a, $b);
            break;
        default:
            echo "No se reconoce el carácter solicitado";
            break;
    }
    ?>
</body>

</html>