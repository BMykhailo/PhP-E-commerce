<?php

//je verifie si pour l'ensemble de mes champs requis, j'ai bien un contenu 
function checkIfAllRequiredKeysExist($contact, $requiredList = ['nom', 'prenom', 'email', 'description'])
{
  $missingField = [];
  foreach ($requiredList as $requiredKey) {
    if (!array_key_exists($requiredKey, $contact) || empty($contact[$requiredKey])) {
      array_push($missingField, $requiredKey);
    }
  }
  return $missingField;
}


function imATeapot($nom)
{
  if ($nom === "teapot") {
    return true;
  }
  return false;
}


$contact = $_POST;
$missingFields = checkIfAllRequiredKeysExist($contact);

if (empty($contact["nom"]) || empty($contact["prenom"]) || empty($contact["email"]) || empty($contact["description"])) {
  echo 'Certains champs sont manquants';
} else {
  if (imATeapot($contact['nom'])) {
    echo 'I\'m a teapot';
    http_response_code(418);
  } else {
    echo "<h1>Felicitation, votre message a bien été envoyé</h1>";
    echo "<p>Voici les informations que vous avez envoyé</p>";
    foreach ($contact as $key => $value) {
      echo "<p>$key: $value </p>";
    }
  }
}
