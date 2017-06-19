<?php
// On démarre la session
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

  // Test des variables si enregistrés
  echo '<html>';
  echo '<head>';
  echo '<title>Session</title>';
  echo '</head>';
  echo '<body>';
  echo 'Votre Login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.';
  echo '<br />';

  // Lien pour fermer la session
  echo '<a href="./logout.php">Déconnection</a>';
}
else {
  echo 'Les variables ne sont pas déclarées.';
}
?>
