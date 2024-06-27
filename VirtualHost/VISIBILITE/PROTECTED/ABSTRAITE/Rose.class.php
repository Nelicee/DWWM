<?php

require_once "Plante.class.php";

class Rose extends Plante {
    protected $couleur;
    protected $epines;

    public function __construct($nom, $type, $hauteur, $dureeDeVie, $famille, $couleur, $epines) {
        parent::__construct($nom, $type, $hauteur, $dureeDeVie, $famille);
        $this->couleur = $couleur;
        $this->epines = $epines;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function getEpines() {
        return $this->epines;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function setEpines($epines) {
        $this->epines = $epines;
    }

    public function afficher(){
       
        echo "Nom : $this->nom " . "<br>";
        echo "Type : $this->type " . "<br>";
        echo "Hauteur : $this->hauteur " . "<br>";
        echo "Durée de vie : $this->dureeDeVie " . "<br>";
        echo "Famille : $this->famille " . "<br>";
        echo "Couleur : $this->couleur <br>";
        echo "Epines : $this->epines <br>";
    }
}
?>
