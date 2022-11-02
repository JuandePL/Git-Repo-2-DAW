<?php
include('ConectarDB.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $delete = $bd->query("DELETE FROM usuario WHERE id='$id'");

    // Retornar resultado
    $deleteGet = $delete ? true : false;
    header("Location:SelectDB.php?delete='$deleteGet'");
}
