<?php

//Exo 10 : Design Pattern Singleton

class Configuration {
    private static $instance;
    private $parametres = []; //Propriétés normales de la classe

    //Constructeur en privé qui empeche new Configuration())
    private function __construct() {
        echo "Instance de Config créée\n";
    }

    //Empeche le clonage
    private function __clone() {
        //Méthode vide et privée = inclonable
    }

    public static function getInstance() {
        //Crée une instance si elle n'existe pas
        if (self::$instance === null) {
            self::$instance = new self(); //self() = new Configuration()
        }

        return self::$instance;
    }

    //Méthodes pour gérer les paramètres
    public function set($cle, $valeur) {
        $this->parametres[$cle] = $valeur;
        echo "Paramètre '{$cle}' défini à '{$valeur}'\n";
    }

    public function get($cle) {
        return $this->parametres[$cle] ?? null;
    }

    public function getAll() {
        return $this->parametres;
    }
}

$config1 = Configuration::getInstance();
$config1->set('app_name', 'Mon Application');
$config1->set('version', '1.0');

echo "\n Deuxième appel : \n";
$config2 = Configuration::getInstance();

//Les deux variables pointent vers le meme objet
echo "app_name depuis config1 : " . $config1->get('app_name') . "\n";
echo "app_name depuis config2 : " . $config2->get('app_name') . "\n";

//Modification via config2
$config2->set('debug', true);

echo "debug depuis config1 : " . ($config1->get('debug') ? 'true' : 'false') . "\n";

//Vérifie que c'est la meme instance
if ($config1 === $config2) {
    echo "\n config1 et config2 sont la meme instance \n";
}

?>
