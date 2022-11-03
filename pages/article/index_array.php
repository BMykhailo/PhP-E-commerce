<?php

$articles_table = [
  //// proposition

  "Addidas" => [
    "nom" => "Addidas",
    "categorie" => "Sport",
    "prix" => 57,
    "image" => "https://assets.adidas.com/images/w_600,f_auto,q_auto/8c687d94b5654d4bb435a97f00d5a475_9366/Chaussure_Grand_Court_Blanc_F36392_01_standard.jpg"

  ],
  "Nike" => [
    "nom" => "Nike",
    "categorie" => "Tous",
    "prix" => 69,
    "image" => "https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/ebad848a-13b1-46d5-a85e-49b4b6a4953c/chaussure-air-force-1-le-pour-plus-age-r2kdvj.png"
  ],
  "Puma" => [
    "nom" => "Puma",
    "categorie" => "Sport",
    "prix" => 250,
    "image" => "https://sf2.lechasseurfrancais.com/wp-content/uploads/2021/10/puma-puma-concolor_04.jpg"

  ],
  "Asics" => [
    "nom" => "Asics",
    "categorie" => "Sport",
    "prix" => 3,
    "image" => "https://images.asics.com/is/image/asics/1011A824_006_SB_FL_GLB"

  ]
];
// Si la recherche exist
// identique a !empty($_GET["search"]);x
$search = "";
if (isset($_GET["search"]) && $_GET["search"] !== "") {
  $search = $_GET["search"];
  // ici on vas filtrer le tableau a l'aide d'une fonction anonyme
  $articles_filtre = array_filter($articles, function ($article, $cle) {
    //ici on met la conditions de filtre des article, soit la clé doit etre egale a notre get search
    return strcasecmp($cle, $_GET["search"]) == 0;
  }, ARRAY_FILTER_USE_BOTH);
  $articles = $articles_filtre;
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
  <h1>Bienvenue sur mon E-commerce de folie</h1>
  <section class="section-products">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8 col-lg-6">
          <div class="header">
            <h3>Meilleurs produits</h3>
          </div>
        </div>
        <div class="search-container">
          <form action="" method="GET">
            <input id="ceQueTuVeuxDedans" type="text" placeholder="search" name="search" value="<?php echo $search; ?>" />
            <button type="submit">Rechercher</button>
          </form>
        </div>
      </div>
      <div class="row">
        <?php
        // Identique au foreach mais pour ce cas d'utilisation. Vaux mieux privilégier un foreach
        // for ($i=0;$i<= sizeof($article);$i++) { 
        // $article = $articles[$i];
        ?>
        <!--Démarrage boucle de produit -->
        <?php foreach ($articles_table as $article) { ?>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div id="product-3" class="single-product">
              <div class="part-1">
                <img src="<?php echo $article["image"]; ?>" width="300" />
                <ul>
                  <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                  <li><a href="#"><i class="fas fa-heart"></i></a></li>
                  <li><a href="#"><i class="fas fa-plus"></i></a></li>
                  <li><a href="#"><i class="fas fa-expand"></i></a></li>
                </ul>
              </div>
              <div class="part-2">
                <h3 class="product-title"><?php echo $article["nom"]; ?></h3>
                <h4 class="product-price"><?php echo $article["prix"]; ?>€</h4>
              </div>
            </div>
          </div>
        <?php } ?>
        <!--Fin boucle de produit -->
      </div>
    </div>
  </section>
  <?php include __DIR__ . '/../../pages/article/index.php'; ?>
  <?php include __DIR__ . '/../../components/footer.php'; ?>
</body>

</html>