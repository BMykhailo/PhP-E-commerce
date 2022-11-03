<?php
// On veux récupérer la fonction d'enregistrement en session
include_once __DIR__ . "/../utils/functions.php";

if ($_POST['confirm'] === $_POST['password']) {
  $isRegister = register($_POST['lastname'], $_POST['firstname'], $_POST['email'], $_POST['password']);
  if ($isRegister) {
    echo "l'enregistrement s'est bien passé, vous pouvez maintenant vous connecter";
  }
} else {
  echo "Erreur, veuillez verifier votre mot de passe";
}
