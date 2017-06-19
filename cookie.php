<?php

$arthur = $_POST['login1'];
$test = $_POST['pwd1'];

setcookie("login_name", $arthur);
setcookie("password", $test);  // on l'envoi

header("location: index.php");
?>
