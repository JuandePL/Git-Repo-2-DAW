<?php require_once __DIR__ . '../../../app/SessionController.php' ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?> - Tatoos</title>
  <link rel="stylesheet" href="/style.css">
</head>

<header>
  <?php if (isset($user)) { ?>
    <!-- <a href="/view/profile.php">
      <div id="userBox">
        <p id="username"><?php echo $user->getName() ?></p>
        <img id="imgUser" src=<?php echo 'imagen' ?> alt="">
      </div>
    </a> -->
  <?php } ?>

  <div class="bg-header"><span class='whitebold'><a href="/">Tatoos</a></span></div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <nav>
    <?php
    /**
     * Añadir rutas al navegador y comprobar si esta activo o no
     */
    function addToNav($name, $path) {
      if ($path == $_SERVER['REQUEST_URI']) {
        echo "<a href='#' class='active'>$name</a>";
      } else {
        echo "<a href='$path'>$name</a>";
      }
    }

    addToNav('Inicio', '/index.php');

    if ($user) {
      addToNav('Cerrar sesión', '/src/app/SessionController.php?isLogout=true');
    } else {
      addToNav('Login', '/src/view/login.php');
    }
    ?>
  </nav>
</header>

<div class="bg-img"></div>