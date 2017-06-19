<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Cookie</title>
  <link href="style.css" rel="stylesheet" type="text/CSS">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Muli" rel="stylesheet">
</head>
</body>

<form method="post" action="cookie.php">
   <h2>Modifier les cookies</h2>
   <label><u>Login :</u></label></br>
   <input class="box" type="text" name="login">
   </br>
   <label><u>Mot de passe :</u></label></br>
   <input class="box" type="password" name="pwd"></br>
   <input class="btn" type="submit" value="Start cookie">
   </form>


<?php
echo $_COOKIE['login_name'];
echo '<br>';
echo $_COOKIE['password'];
?>



</body>
</html>
