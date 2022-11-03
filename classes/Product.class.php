<?php
class Product
{

  //compteur de produit
  public static int $counter = 0;

  // Nom du produit
  protected string $nom;

  // Categorie
  public string $category;

  // Prix hors taxe
  protected int $prixHT;

  // Tva appliqué
  public int $tva = 20;

  // Prix public
  protected int $prixTTC;

  //Stock en magasin
  public int $stock;

  // Description 
  public string $description;

  //Photo
  public string $image;

  public function __construct($nom, $category, $prixHT, $tva, $stock, $image, $description)
  {
    $this->nom = $nom;
    $this->category = $category;
    $this->prixHT = $prixHT;
    $this->tva = $tva;
    $this->prixTTC =
      $this->prixHT +  ($this->prixHT * ($this->tva / 100));
    $this->stock = $stock;
    $this->image = $image;
    $this->description = $description;
    // a chaque fois que j'ajoute un produit, je vais incrementer ma variable static counter
    self::$counter = self::$counter + 1;
  }

  public function getValorisationStock()
  {
    return $this->stock * $this->prixHT;
  }


  public function afficherToutesLesInformations()
  {
    echo "<p>" . $this->getNom() . "</p>";
    echo "<p>" . $this->category . "</p>";
    echo "<p>" . $this->getPrixHT() . "</p>";
    echo "<p>" . $this->tva . "</p>";
    echo "<p>" . $this->getPrixTTC() . "</p>";
    echo "<p>" . $this->stock . "</p>";
    echo "<p>" . $this->getValorisationStock() . "</p>";
    echo "<img src=\"" . $this->image . "\" >";
    echo "<p>" . $this->description . "</p>";
  }

  /*
   * Permet de cloner un produit avec un nouveau
   * 
   * $produitADupliquer : le produit existant que l'on vas dupliquer
   * $nouveauNom : Le nouveau nom de mon produit
   * 
   * 
   */
  public static function clone($produitADupliquer, $nouveauNom)
  {

    // créer une nouvelle instance de la classe produit
    return new Product(
      $nouveauNom,
      $produitADupliquer->category,
      $produitADupliquer->prixHT,
      $produitADupliquer->tva,
      $produitADupliquer->stock,
      $produitADupliquer->image,
      ""
    );
  }

  public function getNom()
  {
    return $this->nom;
  }

  public function setNom($nom)
  {
    if ($nom != "") {
      $this->nom = $nom;
    }
  }


  // on affiche le prix TTC
  public function getPrixTTC()
  {
    return $this->prixTTC . "€";
  }

  // Je veux mettre a jour le prix TTC de mon objet
  // @param $value : la nouvel valeur de mon instance doit etre un float
  public function setPrixTTC(float $value)
  {
    // Si ma valeur est superieur ou egale a 0
    if ($value >= 0) {
      // Je met a jour ma valeur
      $this->prixTTC = number_format($value, 2);
    }
  }

  // on affiche le prix HT
  public function getPrixHT()
  {
    return $this->prixHT . "€";
  }

  // Je veux mettre a jour le prix HT de mon objet
  // @param $value : la nouvel valeur de mon instance doit etre un float
  public function setPrixHT(float $value)
  {
    // Si ma valeur est superieur ou egale a 0
    if ($value >= 0) {
      // Je met a jour ma valeur
      $this->prixHT = number_format($value, 2);
    }
  }
}
