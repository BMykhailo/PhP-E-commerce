<?php
require_once 'Product.class.php';

// Je crée ma nouvel class Book qui herite de produit
class Book extends Product
{
  // Nom de l'auteur
  private string $auteur;

  // Format
  private string $format;

  // new Book("Harry Potter 1", "Fantastique", 9.99, 10000, "harryPotter.jpg", "Livre fantistique", "JK Rolling", "Poche")
  public function __construct($nom, $category, $prixHT, $stock, $image, $description, $auteur, $format)
  {
    parent::__construct($nom, $category, $prixHT, 5.5, $stock, $image, $description);
    $this->auteur = $auteur;
    $this->format = $format;
  }


  // ajoutez une méthode permettant d'afficher uniquement le titre, l'auteur et la description
  public function affichage()
  {
    echo '<p>' . $this->auteur . '</p>';
    echo '<p>' . $this->format . '</p>';
    echo '<p>' . $this->description . '</p>';
  }

  public function afficherToutesLesInformations()
  {
    parent::afficherToutesLesInformations();
    echo '<p>' . $this->auteur . '</p>';
    echo '<p>' . $this->format . '</p>';
  }


  // On récupère l'attribut auteur depuis un getter car la propriété est en privé 
  public function getAuteur()
  {
    return $this->auteur;
  }
  // On met à jour l'attribut auteur depuis un setter car la propriété est en privé 
  public function setAuteur($auteur)
  {
    if ($auteur != "") {
      $this->auteur = $auteur;
    }
  }

  // On récupère l'attribut format depuis un getter car la propriété est en privé
  public function getFormat()
  {
    return $this->format;
  }

  // On met à jour l'attribut format depuis un setter car la propriété est en privé 
  public function setFormat($format)
  {
    if ($format != "") {
      $this->format = $format;
    }
  }
}
