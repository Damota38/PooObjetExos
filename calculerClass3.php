<?php

//Exo 3 : Calculer avec une classe__________________
class CompteBancaire {
    public $solde;

    public function deposer($montant){
        $this->solde = $this->solde + $montant;
        //version courte : $this->solde += $montant;
    }

    public function retirer($montant){
        $this->solde = $this->solde - $montant;
    }

    public function afficherSolde(){
        return "Vous avez " . $this->solde . "€";
    }
}

$compte = new CompteBancaire();
$compte->solde = 100;

echo "Solde initial : " . $compte->solde . "€\n";

$compte->deposer(50);
echo "Après depot : " . $compte->solde . "€\n";

$compte->retirer(30);
echo "Après retrait : " . $compte->solde . "€\n";
//_________________________________________________

?>