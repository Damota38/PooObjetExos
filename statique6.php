<?php

//Exo 6 : Méthodes et propriétés statiques_____________________________

class Compteur {
    private static $count = 0; //static = partagée par tous

    public static function incrementer() {
        self::$count++; //self:: pour accèder au static
    }

    public static function getCount() {
        return self::$count;
    }

    public static function reset() {
        self::$count = 0;
    }
}

echo "Valeur par défaut : " . Compteur::getCount() . "\n";

Compteur::incrementer();
echo "1 incrémentation : " . Compteur::getCount() . "\n";

Compteur::incrementer();
Compteur::incrementer();
echo "3 incrémentation : " . Compteur:: getCount() . "\n";

Compteur::reset();
echo "reset de la valeur : " . Compteur::getCount() . "\n";


class Utilisateur {
    private $nom;

    public function __construct($nom) {
        $this->nom = $nom;
        Compteur::incrementer();
    }

    public function getNom() {
        return $this->nom;
    }
}

Compteur::reset();
echo "Utilisateurs créés : " . Compteur::getCount() . "\n";

$user1 = new Utilisateur("John");
echo " Après création de John : " . Compteur::getCount() . "\n";

$user2 = new Utilisateur("Jane");
$user3 = new Utilisateur("Jake");
echo " Total d'utilisateurs créés : " . Compteur::getCount() . "\n";
//______________________________________________________________________

?>