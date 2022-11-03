<?php
// setcookie("language", "", time() - 360);
setcookie("language", $_POST["language"], time() + 3600);

header("Location: index.php");
?>