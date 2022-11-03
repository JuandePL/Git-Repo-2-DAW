<?php
include("ConectarDB.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Si el metodo es un GET, recoger datos del usuario solicitado
    // y mostrar sus datos en el formulario
    $id = $_GET["id"];
    $sql = "SELECT * from usuario where id='$id'";
    $select = $bd->query($sql);
    $usuario = $select->fetchAll(PDO::FETCH_ASSOC)[0];
} else {
    // Si es un metodo POST, actualizar el usuario
    $id = $_POST["id"];
    $username = $_POST["username"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $pass = $_POST["password"];

    $sqlUpdate = "UPDATE usuario set username='$username', nombre='$nombre', 
        apellidos='$apellidos', password='$pass' where id='$id'";

    $update = $bd->query($sqlUpdate);

    if ($update == FALSE) {
        echo "Error";
    } else {
        echo "Se ha modificado las siguientes lineas: " . $update->rowCount();
        header("Location:SelectDB.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>

<body>
    <form action="UpdateDB.php" method="post">
        <label for="id">Id</label>
        <input type="text" disabled name="id" id="id" 
            value="<?php echo $usuario['id'] ?>" />

        <br><br>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" 
            value="<?php echo $usuario['username'] ?>" />

        <br><br>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"
            value="<?php echo $usuario['nombre'] ?>" />

        <br><br>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" 
            value="<?php echo $usuario['apellidos'] ?>"/>

        <br><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" 
            value="<?php echo $usuario['password'] ?>"/>

        <br><br>

        <input type="submit" value="Registro" />
    </form>
</body>

</html>