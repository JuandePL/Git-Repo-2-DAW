<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>

<body>
    <h1>Ejercicio 20</h1>
    <p>20. Modifique el mensaje de error mediante set_error_handler y invoque la función anterior pasandole un dividendo
        igual a 0.</p>

    <?php
    function divide($dividend, $divisor) {
        if ($divisor == 0) {
            throw new Exception("ERROR: El divisor no puede ser 0");
        }
        return $dividend / $divisor;
    }

    function customError($code, $mess, $file, $line) {
        echo "<h3>Ocurrió un error en la línea $line</h3>";
        echo "$mess. [$code]";
    }

    set_error_handler("customError");

    try {
        echo divide(5, 0);
    } catch (\Throwable $th) {
        trigger_error("Error: no puedes dividir entre 0 <b>zopenco</b>");
    }
    ?>
</body>

</html>