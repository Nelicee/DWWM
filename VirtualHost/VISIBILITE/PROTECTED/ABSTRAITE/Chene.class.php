<?php

require_once "Plante.class.php";

class Chene extends Plante {
    protected $couleurEcorce;

    public function __construct($nom, $type, $hauteur, $dureeDeVie, $famille, $couleurEcorce) {
        parent::__construct($nom, $type, $hauteur, $dureeDeVie, $famille);
        $this->couleurEcorce = $couleurEcorce;
    }

    public function getCouleurEcorce() {
        return $this->couleurEcorce;
    }

    public function setCouleurEcorce($couleurEcorce) {
        $this->couleurEcorce = $couleurEcorce;
    }

    public function afficher(){
        echo "Nom : $this->nom " . "<br>";
        echo "Type : $this->type " . "<br>";
        echo "Hauteur : $this->hauteur " . "<br>";
        echo "Durée de vie : $this->dureeDeVie " . "<br>";
        echo "Famille : $this->famille " . "<br>";
        echo "Couleur de l'écorce : $this->couleurEcorce <br>";
    }
}
?>
