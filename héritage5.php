<?php

//Exo 5 : Héritage____________________________________________________________________________________________________

class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;

    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }

    public function demarrer() {
        return "Le véhicule démarre...";
    }

    public function getInfo() {
        return "Marque : " . $this->marque . " Modèle : " . $this->modele . " Année de sortie : " . $this->annee;
    }  
}

//Classe fille Voiture
class Voiture extends Vehicule {
    private $nombrePortes;

    public function __construct($marque, $modele, $annee, $nombrePortes) {
        //Appelle le construct parent
        parent::__construct($marque, $modele, $annee);
        $this->nombrePortes = $nombrePortes;
    }

    //Surcharge de la function demarrer()
    public function demarrer() {
        return "La voiture démarre...";
        //Pour ajouter quelque chose de spécifique return parent::demarrer() . "avec un vrombissement de moteur"; 
    }

    //Guetter
    public function getNombrePortes() {
        return $this->nombrePortes;
    }
}

//Classe fille Moto 
class Moto extends Vehicule {
    private $typeMoto;

    public function __construct($marque, $modele, $annee, $typeMoto) {
        parent::__construct($marque, $modele, $annee);
        $this->typeMoto = $typeMoto;
    }

    public function demarrer() {
    return "La moto démarre...";
    }

    public function getTypeMoto() {
        return $this->typeMoto;
    }
}

$voiture = new Voiture("Renault", "Clio", 2020, 5);
echo $voiture->getInfo() . "\n";
echo $voiture->demarrer() . "\n";
echo "Portes : " . $voiture->getNombrePortes() . "\n\n";

$moto = new Moto("Yamaha", "R1", 2022, "sportive");
echo $moto->getInfo() . "\n";
echo $moto->demarrer() . "\n";
echo "Type de moto : " . $moto->getTypeMoto() . "\n";
//_______________________________________________________________________________________________________________________

?>