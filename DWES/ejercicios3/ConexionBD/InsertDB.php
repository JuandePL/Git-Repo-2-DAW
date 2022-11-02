<?php
include("ConectarDB.php");

// Se comprueba que se realiza una petición post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $pass = $_POST["password"];

    $sql = "INSERT into usuario (username, nombre, apellidos, password)
        values ('$username', '$nombre', '$apellidos', '$pass')";

    $result = $bd->query($sql);

    echo ($result == FALSE) ? "Error"
        : "Se ha modificado las siguientes lineas: " . $result->rowCount();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>

<body>
    <form action="InsertDB.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" />

        <br><br>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" />

        <br><br>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" />

        <br><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" />

        <br><br>

        <input type="submit" value="Registro" />
    </form>
</body>

</html>