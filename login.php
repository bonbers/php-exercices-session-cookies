<?php
$expire = 1*1*1;  // 1 an
setcookie("login_name", $_POST['login'], time()+$expire);
setcookie("password", $_POST['pwd'], time()+$expire);  // on l'envoi
?>
<?php
	session_start();
?>

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



  <p>
<?php
header("location: index.php");
?>

<?php
// $login="romain";
// $password="lateteatoto";

// // Verification si valeurs existent
// if (isset($_POST['login']) && isset($_POST['pwd'])) {
// // Vérification que les valeurs correspondent
//   if ($login == $_POST['login'] && $password == $_POST['pwd']) {
//Démarrage session

// Redirection vers l'affichage des données
    // header('location: membre.php');
// Si Erreur
  // }
//   else {
//     echo '<body onLoad="alert(\'Valeur non reconnu...\')">';
//     echo '<meta http-equiv="refresh" content="0;URL=index.php">';
//   }
// }
// else {
//   echo'Variable formulaire non déclarer';
// }
?>




</body>
</html>
