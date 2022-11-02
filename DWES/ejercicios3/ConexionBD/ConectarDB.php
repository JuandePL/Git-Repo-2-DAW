<?php
$cadena_conexion = "mysql:dbname=mybd;host=127.0.0.1";
$usuario = "usuarioBD";
$pass = "1234";

try {
    $bd = new PDO($cadena_conexion, $usuario, $pass);
} catch (PDOException $e) {
    echo "Error en la conexion" . $e->getMessage();
}
