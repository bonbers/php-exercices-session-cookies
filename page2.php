<?php

session_start ();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Session</title>
  <link href="style.css" rel="stylesheet" type="text/CSS">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Muli" rel="stylesheet">
</head>
</body>

<h2><u>Affichage des données sessions :</u></h2>

<p>
<?php
// On récupère nos variables de session
if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['age'])) {

  // Test des variables si enregistrés

  echo 'Votre nom est '.$_SESSION['nom'].' ,votre prenom est '.$_SESSION['prenom'].' et vous avez '.$_SESSION['age'].' ans .';
  echo '<br />';
  echo '<br />';
  // Lien pour fermer la session
  echo '<a class="session" href="./logout.php">-->Déconnection<--</a>';
}
else {
  echo 'Les variables ne sont pas déclarées.';
}

 ?>
 </p>
 </body>
 </html>
