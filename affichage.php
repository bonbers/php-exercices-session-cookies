<?php
// On démarre la session
session_start ();

header ('location : index.php');
// On récupère nos variables de session
if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['age'])) {

  // Test des variables si enregistrés
  echo '<html>';
  echo '<head>';
  echo '<title>Session</title>';
  echo '</head>';
  echo '<body>';
  echo 'Votre nom est '.$_SESSION['nom'].' ,votre prenom est '.$_SESSION['prenom'].' et vous avez '.$_SESSION['age'].' ans .';
  echo '<br />';

  // Lien pour fermer la session
  echo '<a href="./logout.php">Déconnection</a>';
}
else {
  echo 'Les variables ne sont pas déclarées.';
}
?>
