<?php

require_once "TriangleRectangle.php";

class PyramideBaseTriangle extends TriangleRectangle{

//attributs protégés
protected $hauteurPyramide;


//constructeur
public function __construct(float $longueur,float $largeur,float $hauteur)
{
    parent::__construct($longueur,$largeur,$hauteur);
    $this->hauteur = $hauteur;
}

//assesseurs
public function getHauteurPyramide(){return $this->hauteur;}
public function setHauteurPyrammide()($hauteur)

}