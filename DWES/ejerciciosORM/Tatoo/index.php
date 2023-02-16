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
    echo $user ?? PersonRoles::Client->name;
    ?>

    <h3>Tatuador con mas ventas</h3>
    <?php
    $tatooer = $tatooerRepo->mostSellerTatooer();
    print_r($tatooer);
    ?>
  </main>
</body>

</html>