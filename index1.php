<?php

// Démarrage de la session
session_start();

// Variables pour afficher un message d'erreur
$msg = '';

// Vérification de la soumission du formulaire
if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Vérification des données avec vos informations d'identification
  if($username == 'admin' && $password == 'password') {
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = 'admin';
    header('Location: protected_page.php');

  } else {

    $msg =  'Utilisateur ou mot de passe incorrect.';

  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Connexion</title>
  </head>
  <body>
    <form action="..." method="post">
      <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
      <input type="text" name="username" placeholder="username" required />
      <input type="password" name="password" placeholder="password" required />
      <button type="submit" name="login">Login</button>
    </form>
  </body>
</html>