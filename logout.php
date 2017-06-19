<?php
// Démarrage session
session_start ();

// Destruction variables
session_unset ();

// Destruction session
session_destroy ();

// Redirection accueil
header ('location: index.php');
?>
