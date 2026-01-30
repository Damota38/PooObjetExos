<?php

//Exo 9 : Les traits_____________________________________________________________________

trait Horodatable {
    private $dateCreation;
    private $dateModification;

    public function creer() {
        $this->dateCreation = date('Y-m-d H:i');
        echo "Crée le : {$this->dateCreation}\n";
    }

    public function modifier() {
        $this->dateModification = date('Y-m-d H:i');
        echo "Modifié le : {$this->dateModification}\n";
    }

    //Guetters
    public function getDateCreation() {
        return $this->dateCreation;
    }

    public function getDateModification() {
        return $this->dateModification;
    }
}

trait Archivable {
    private $archive = false;

    public function archiver() {
        $this->archive = true;
        echo "Document archivé\n";
    }

    public function restaurer() {
        $this->archive = false;
        echo "Document restauré\n";
    }

    public function estArchive() {
        return $this->archive;
    }

    public function getStatutArchive() {
        return $this->archive ? "Archivé" : "Actif";
    }
}

class Document {
    use Horodatable, Archivable;

    private $titre;
    private $contenu;

    public function __construct($titre, $contenu) {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->creer(); //Méthode du trait Horodatable
    }

    //Guetters
    public function getTitre() {
        return $this->titre;
    }

    public function getContenu() {
        return $this->contenu;
    }

    //Setters
    public function setTitre($titre) {
        $this->titre = $titre;
        $this->modifier();
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
        $this->modifier();
    }

    public function afficherInfo() {
        echo "\n Informations du document : \n";
        echo "Titre : {$this->titre}\n";
        echo "Contenu : {$this->contenu}\n";
        echo "Crée le : " . ($this->getDateCreation() ?? "Non défini") . "\n";
        echo "Modifié le :" . ($this->getDateModification() ?? "Non modifié") . "\n";
        echo "Statut : {$this->getStatutArchive()}\n";
    }
}

$doc = new Document ("Mon rapport", "Ceci est le contenu initial");
$doc->afficherInfo();

//Modifier le doc
echo "\n Modification \n";
sleep(2); //Attendre 2sec pour voir la différence de date
$doc->setTitre("Rapport mis à jour");
$doc->setContenu("Contenu modifié");
$doc->afficherInfo();

//Archiver le doc
echo "\n Archivage \n";
$doc->archiver();
echo "Est archivé ? " . ($doc->estArchive() ? "Oui" : "Non") . "\n";
$doc->afficherInfo();

//Restaurer le doc
echo "\n Restauration \n";
$doc->restaurer();
$doc->afficherInfo();
//_______________________________________________________________________________________

?>