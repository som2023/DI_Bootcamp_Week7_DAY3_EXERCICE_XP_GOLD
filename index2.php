<?php

// Démarrage de la session
session_start();

// Vérification de la soumission du formulaire
if (isset($_POST['name']) && !empty($_POST['name'])) {
  // Récupération du nom d'utilisateur
  $name = $_POST['name'];

  // Définition de la variable de session
  $_SESSION['name'] = $name;

  // Affichage du message de bienvenue
  echo "Welcome, " . $name . "!";
} else {
  // Si la soumission du formulaire est vide, affichage d'un message d'erreur
  echo "Who are you? Please <a href='form.html'>login</a>.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_2_XPGOLD</title>
</head>
<body>
<form action="submit.php" method="post">
  <input type="text" name="name" placeholder="Enter your name">
  <input type="submit" value="Submit">
</form>
</body>
</html>