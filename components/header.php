<?php
$siteRootPath = '/Php-e-commerce/';
?>
<!-- Ici je ne met que le menu -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">E-Commerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>">Accueil</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>">Produits</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>pages/article/create.php">Nouveau produit</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>pages/article/create-book.php">Nouveau Livre</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>pages/blog/index.php">Blog</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>pages/connexion.php">Connexion</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>pages/inscription.php">Inscription</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>pages/contact/index.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>