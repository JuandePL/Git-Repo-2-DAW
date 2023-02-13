<!DOCTYPE html>
<html lang="es">

<?php
$title = "Inicio";
require_once './src/view/modules/header.php'
?>

<body>
  <main>
    <h1>Bienvenido</h1>
    <?php
    echo PersonRoles::Client->name;
    ?>
  </main>
</body>

</html>