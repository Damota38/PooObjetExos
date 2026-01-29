<?php

//Exo 4 : Encapsulation_______________________________________________________

class Produit {
    private $nom;
    private $prix;
    private $quantite; 

    public function __construct($nom, $prix, $quantite){
        $this->nom = $nom;
        $this->prix = $prix;
        $this->quantite = $quantite;
        //Ou $this->setQuantite($quantite); utilise le setter pour valider
    }

    //Guetters
    public function getNom() {
        return $this->nom;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    //Setters
    public function setPrix($prix) {
        if ($prix > 0) {
            $this->prix = $prix;
        } else {
            throw new Exception("La quantité ne peut pas etre négative");
        }
    }

    public function setQuantite($quantite) {
    if ($quantite >= 0) {
        $this->quantite = $quantite;
    } else {
        throw new Exception("La quantité ne peut pas etre négative");
    }
}

    public function calculerValeurStock() {
        return $this->prix * $this->quantite;
    }
}

$produit = new Produit("Ordinateur", 1000, 5);

//Lecture avec les guetters
echo "Produit : " . $produit->getNom() . "\n";
echo "Prix : " . $produit->getPrix() . "€\n";
echo "Quantité : " . $produit->getQuantite() . "\n";
echo "Valeur du stock : " . $produit->calculerValeurStock() . "€\n";

//Modifi avec les setters
$produit->setPrix(900);
$produit->setQuantite(10);

echo "\nAprès modification :\n";
echo "Prix : " . $produit->getPrix() . " €\n";
echo "Quantité : " . $produit->getQuantite() . "\n";
echo "Valeur stock : " . $produit->calculerValeurStock() . "€\n";

try {
    $produit->setPrix(-50);
} catch (Exception $e) {
    echo "\nErreur : " . $e->getMessage() . "\n";
}
//___________________________________________________________________________

?>