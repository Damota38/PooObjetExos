<?php

//Exo 1 : Class_______________________________________________________________________
class Personne {
public $nom;
public $prenom;
public $age;

public function sePresenter() {
    return "Je suis " .$this->prenom . " " . $this->nom . "et j'ai " . $this->age ."ans";
}
}

$personne1 = new Personne();
$personne1->nom = "Doe";
$personne1->prenom = "John";
$Personne1->age = 30;

$personne2 = new Personne();
$personne2->nom = "Doe";
$personne2->prenom = "Jane";
$personne2->age = 30;

echo $personne1->sePresenter() . "\n";
echo $personne2->sePresenter();
//_____________________________________________________________________________________

?>