<?php

$blogs = [
  "Slytherin" => [
    "titre" => "Slytherin",
    "image" => '<img src="https://m.media-amazon.com/images/I/51T3hA0FXrL._AC_.jpg" />'
  ],
  "Griffindor" => [
    "titre" => "Griffindor",
    "image" => '<img src="https://www.nostalgift.com/wp-content/uploads/2021/03/harry-potter-maison.jpeg" />'
  ]
];
?>

<head>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="../../index.css">

</head>

<body>
  <?php include __DIR__ . '/../../components/header.php'; ?>
  <section class="section-products">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8 col-lg-6">
          <div class="header">
            <h3>Derniers articles</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <!--Démarrage boucle d'article de blog -->
        <?php foreach ($blogs as $key => $value) {
          echo $key;
          foreach ($value as $contenu) {
            echo $contenu;
          }
        } ?>
        <!--Fin boucle d'article de blog -->
      </div>
    </div>
  </section>
  <?php include __DIR__ . '/../../components/footer.php'; ?>
</body>