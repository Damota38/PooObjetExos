<?php

//Exo 7 : Classes abstraites______________________________________________________________

abstract class Forme {
    protected $couleur;

    public function __construct($couleur) {
        $this->couleur = $couleur;
    }

    abstract public function calculerSurface();
    abstract public function calculerPerimetre();

    public function afficherInfo() {
        echo "Couleur : " . $this->couleur . "\n";
        echo "Surface : " . $this->calculerSurface() . "m2\n";
        echo "Perimètre : " . $this->calculerPerimetre() . "m\n\n";
    }
}

//Classe fille Rectangle
class Rectangle extends Forme {
    private $longueur;
    private $largeur;

    public function __construct($couleur, $longueur, $largeur) {
        parent::__construct($couleur);
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerSurface() {
        return $this->longueur * $this->largeur;
    }

    public function calculerPerimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }
}

//Classe fille Cercle
class Cercle extends Forme {
    private $rayon;

    public function __construct($couleur, $rayon) {
    parent::__construct($couleur);
    $this->rayon = $rayon;
    }

    public function calculerSurface() {
        return M_PI * $this->rayon * $this->rayon; //M_PI est une constante PHP = 3.14159...
    }

    public function calculerPerimetre() {
        return 2 * M_PI * $this->rayon;
    }
}

//Classe fille Triangle
class Triangle extends Forme {
    private $base;
    private $hauteur;
    private $cote1;
    private $cote2;

    public function __construct($couleur, $base, $hauteur, $cote1, $cote2) {
        parent::__construct($couleur);
        $this->base = $base;
        $this->hauteur = $hauteur;
        $this->cote1 = $cote1;
        $this->cote2 = $cote2;
    }

    public function calculerSurface() {
        return ($this->base * $this->hauteur) / 2;
    }

    public function calculerPerimetre() {
        return $this->base + $this->cote1 + $this->cote2;
    }
}

$rectangle = new Rectangle("bleu", 10, 5);
$rectangle->afficherInfo();

$cercle = new cercle("rouge", 7);
$cercle->afficherInfo();

$triangle = new Triangle("vert", 6, 4, 5, 5);
$triangle->afficherInfo();
//____________________________________________________________________________________________

?>