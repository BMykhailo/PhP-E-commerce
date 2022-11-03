<?php
// On veux récupérer la fonction d'enregistrement en session
include_once __DIR__ . "/../utils/functions.php";

// On verrifie si ce que l'on a envoyé en POST correspond a un utilisateur que l'on as en session
$isLogged = login($_POST['email'], $_POST['password']);
// Si on a bien cet utilisateur
if ($isLogged) {
  // alors on indique que c'est bon
  echo "Vous etes connecté avec succes";
  // Sinon
} else {
  // On met un message d'erreur
  echo "Problème de connexion, veuillez verifier votre email / Mot de passe";
}
