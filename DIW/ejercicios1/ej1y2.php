<html>

<head>
    <title>Ejercicio 1</title>
</head>

<body>
    <h1>Ejercicio 1 y 2</h1>
    <p>1. Mostrar que a es mayor que b si la variable $a es mayor que $b.</p>
    <p>2. Indicar si el valor a es mayor, igual o menor que b (crea las variables $a y $b)</p>
    <br>
    <?php
    $a = rand(0, 100);
    $b = rand(0, 100);
    echo "Variable a: $a <br>";
    echo "Variable b: $b <br>";

    if ($a > $b)
        echo "$a es mayor que $b";
    elseif ($b > $a)
        echo "$b es mayor que $a";
    else
        echo "Las variables son iguales";
    ?>
</body>

</html>