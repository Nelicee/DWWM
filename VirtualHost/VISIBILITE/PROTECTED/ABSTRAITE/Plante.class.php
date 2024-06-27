<?php

abstract class Plante {
    protected $nom;
    protected $type;
    protected $hauteur;
    protected $dureeDeVie;
    protected $famille;

    public function __construct($nom, $type, $hauteur, $dureeDeVie, $famille) {
        $this->nom = $nom;
        $this->type = $type;
        $this->hauteur = $hauteur;
        $this->dureeDeVie = $dureeDeVie;
        $this->famille = $famille;
    }

    public function setHauteur($hauteur) {
        echo "*******************************************<br>";
        $this->hauteur = $hauteur;
    }

    abstract public function afficher();
     
}
