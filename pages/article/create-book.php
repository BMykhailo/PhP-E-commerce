<?php

//On inclut notre classe produit
require '../../classes/Book.class.php';

//On verifie que la requete envoyé est en POST (donc que ca provient bien de l'appel du formulaire)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // On verifie qu'on as bien mis le nom dans le formulaire
  if ($_POST["nom"] != null) {
    // On INSTANCIE notre nouveau produit, en récupérant ce qu'on as mis dans le formulaire a l'aide de POST
    $produit = new Book(
      $_POST["nom"],
      $_POST["category"],
      $_POST["prixHT"],
      $_POST["tva"],
      $_POST["stock"],
      $_POST["image"],
      $_POST["description"],
      $_POST["auteur"],
      $_POST["format"],
    );


    var_dump($produit);

    // ON affiche le prix quand la variable est public
    // $produit->prixTTC;

    // On appelle une methode pour affiche le prix en ttc
    // Cet methode ajoute € a la fin
    $produit->afficherToutesLesInformations();


    echo $produit->getValorisationStock();

    // j'appelle directement ma fonction de clonage du produit que j'ai crée
    // et je lui donne comme nom "mon nouveau nom"
    $nouveauProduit = Product::clone($produit, "mon nouveau nom");

    //J'affiche le nouveau produit
    var_dump($nouveauProduit);
  }
}

?>

<!DOCTYPE html>
<html>

<head>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="../../index.css">

</head>

<body>
  <?php include __DIR__ . '/../../components/header.php'; ?>
  <h1>Créer un nouveau produit</h1>
  <section class="section-products">
    <div class="container">
      <div class="row justify-content-center text-center">
        <form action="" method="POST">
          <input type="text" name="nom" placeholder="Nom" required />
          <input type="text" name="category" placeholder="Catégorie" required />
          <input type="text" name="prixHT" placeholder="Prix hors taxe" required />
          <input type="text" name="tva" placeholder="Tva" required />
          <input type="text" name="stock" placeholder="Stock" required />
          <input type="text" name="image" placeholder="url de l'image" required />
          <input type="text" name="auteur" placeholder="Auteur" required />
          <input type="text" name="format" placeholder="Format" required />
          <textarea name="description"></textarea>
          <button type="submit">Valider</button>
        </form>
        <!--Fin boucle de produit -->
      </div>
    </div>
  </section>
  <?php include __DIR__ . '/../../components/footer.php'; ?>
</body>

</html>