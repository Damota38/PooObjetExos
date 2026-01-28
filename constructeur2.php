<?php

//Exo 2 : Constructeur_____________________________________________________________________
class Personne {
public $nom;
public $prenom;
public $age;

public function __construct($nom, $prenom, $age){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->age = $age;
   }

   public function sePresenter() {
    return "Je suis " . $this->prenom . " " . $this->nom . " et j'ai " . $this->age . " ans";
   }
}

$personne1 = new Personne("Doe", "John", 30);
$personne2 = new Personne("Doe", "Jane", 30);

echo $personne1->sePresenter() . "\n";
echo $personne2->sePresenter();

//___________________________________________________________________________________________

?>