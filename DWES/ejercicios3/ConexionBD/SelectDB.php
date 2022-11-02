<?php
include("ConectarDB.php");
$sql = "SELECT * FROM usuario";
$usuarios = $bd->query($sql);
$usuariosArray = $usuarios->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (key_exists('delete', $_GET)) {
        echo $_GET['delete'] ? "Usuario eliminado correctamente.<br><br>"
            : "Error al intentar eliminar al usuario.<br><br>";
    }
}

foreach ($usuariosArray as $user) {
    echo $user['id'] . ' - ' . $user['username'] . '<br>';
    echo $user['nombre'] . ' ' . $user['apellidos'] . '<br>';
    echo $user['password'] . "<br>";
    echo "<a href=UpdateDB.php?id=" . $user['id'] .
        ">Actualizar</a>";
    echo "<a style='margin-left:5px;' href=DeleteDB.php?id=" . $user['id'] .
        ">Eliminar</a><br>";
}

echo "<br><a href='./'>Atrás</a>";
