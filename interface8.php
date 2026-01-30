<?php

//Exo 8 : Interfaces________________________________________________________________________

interface Stockable
{
    public function sauvegarder();
    public function charger();
}

interface Exportable
{
    public function exporterJSON();
    public function exporterCSV();
}

class Article implements Stockable, Exportable {
    private $id;
    private $titre;
    private $contenu;
    private $auteur;

    public function __construct($id, $titre, $contenu, $auteur) {
        $this->id = $id;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->auteur = $auteur;
    }

    //Méthodes de Stockables
    public function sauvegarder() {
        echo "Sauvegarde de l'article '{$this->titre}' dans la base de données...\n";
        //Emplacement pour un vrai SELECT SQL
        return true;
    }

    public function charger() {
        echo "Chargement de l'article ID {$this->id} depuis la base...\n";
        //Emplacement pour un vrai SELECT SQL
        return true;
    }

    //Méthodes d'Exportable
    public function exporterJSON() {
        $data = [
            'id' => $this->id,
            'titre' => $this->titre,
            'contenu' => $this->contenu,
            'auteur' => $this->auteur
        ];
        return json_encode($data, JSON_PRETTY_PRINT);
    }

    public function exporterCSV() {
        return "{$this->id};{$this->titre};{$this->contenu};{$this->auteur}";
    }

    //Getters
    public function getTitre() {
        return $this->titre;
    }
}

//Function qui exporte les deux formats
function exporterDansTousLesFormats(Exportable $objet) {
    echo "\n Export complet \n";
    
    echo "Format JSON :\n";
    echo $objet->exporterJSON() . "\n\n";
    
    echo "Format CSV :\n";
    echo $objet->exporterCSV() . "\n";
}

$article = new Article(
    1,
    "Intro à la POO",
    "La POO est un paradigme de programmation...",
    "John Doe"
);

echo "Test Stockable\n";
$article->sauvegarder();
$article->charger();

echo "\nTest Exportable\n";
echo "JSON :\n";
echo $article->exporterJSON() . "\n\n";

echo "CSV :\n";
echo $article->exporterCSV() . "\n";

exporterDansTousLesFormats($article);
//__________________________________________________________________________________________

?>