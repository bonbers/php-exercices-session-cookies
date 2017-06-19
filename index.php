<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Php Variable superglobales, sessions et cookies</title>
  <link href="style.css" rel="stylesheet" type="text/CSS">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Muli" rel="stylesheet">
</head>
<body>

<h1><u>Exercice 1 :</u></h1>

<ul>Faire une page HTML permettant de donner à l'utilisateur :
  <li>son User Agent</li>
  <li>son adresse ip</li>
  <li>le nom du serveur</li>
</ul>

<p><u>Affichage :</u></p>

<p class="donnee">
<?php

echo 'User agent : '.$_SERVER['HTTP_USER_AGENT'].'.';
echo'</br>';
echo 'Adresse IP : '.$_SERVER['REMOTE_ADDR'].'.';
echo'</br>';
echo 'Nom du serveur : '.$_SERVER['HTTP_HOST'].'.';

 ?>
</p>
<h1><u>Exercice 2 :</u></h1>

<p>Sur la page index, faire un liens vers une autre page.</br>
Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions.
Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page.<p>

<?php


$_SESSION["nom"] = "toto";
$_SESSION["prenom"] = "arthur";
$_SESSION["age"] = 25;

echo '<a class="session" href="page2.php">--->Affichage sessions<---</a>';

 ?>

<h1><u>Exercice 3 :</u></h1>

<p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.</br>
A la validation du formulaire, stocker les informations dans un cookie.</p>

<form action="login.php" method="post">
<label><u>Login :</u></label></br>
<input class="box" type="text" name="login">
</br>
<label><u>Mot de passe :</u></label></br>
<input class="box" type="password" name="pwd"></br>
<input class="btn" type="submit" value="Start cookie">
</form>
<a href="edit_cookie.php">
<input class="btn" value="Modifier valeurs cookie"></a>
  <h2><u>Affichage des cookies :</u></h2>

<p>
<?php
echo $_COOKIE['login_name'];
echo '<br>';
echo $_COOKIE['password'];
?>
</p>

<h1><u>Exercice 4 :</u></h1>

<p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.<p>

<p><em><u> Exercice validé avec exercice 3</u></em></p>

<h1><u>Exercice 5 :</u></h1>

<p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>

<p><em><u>Exercice validé avec exercice 3</u></em></p>


</body>
</html>
