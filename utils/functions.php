<!-- Ici je met une liste de fonctions que j'utiliserais sur tous le site -->

<?php
/**
 * Session = [
 *    users => [
 *      nom      => 
 *      prenom   =>
 *      email    => 
 *      password =>
 *  ],[
 *      nom      => 
 *      prenom   =>
 *      email    => 
 *      password =>
 *  ],[
 *      nom      => 
 *      prenom   =>
 *      email    => 
 *      password =>
 *  ],[
 *      nom      => 
 *      prenom   =>
 *      email    => 
 *      password =>
 *  ],
 * ]
 * 
 */
function register($nom, $prenom, $email, $password)
{
  //permettre de pouvoir utiliser les session sur votre site
  session_start();
  $newUser = [
    "nom" => $nom,
    "prenom" => $prenom,
    "email" => $email,
    "password" => $password
  ];
  // Si j'ai pas encore d'utilisateur en base, donc si la clé n'existe pas 
  if (!array_key_exists("users", $_SESSION)) {
    // Alors je crée un tableau users
    $_SESSION['users'] = array();
    //Sinon
  }
  array_push($_SESSION['users'], $newUser);
  var_dump($_SESSION);
  return true;
}

function login(string $email, string $password)
{
  //permettre de pouvoir utiliser les session sur votre site
  session_start();
  if (!empty($_SESSION['users'])) {
    foreach ($_SESSION['users'] as $user) {
      if ($user['email'] == $email && $user['password'] == $password) {
        return true;
      }
    }
  }
  return false;
}
