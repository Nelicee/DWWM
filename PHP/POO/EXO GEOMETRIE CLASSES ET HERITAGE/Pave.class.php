<?php

require_once "Rectangle.class.php";

class Pave extends Rectangle{

// attributs protégés
protected $hauteur;

// contructeur
public function __construct(float $longueur,float $largeur,float $hauteur){
    parent::__construct($longueur, $largeur);
    $this->hauteur = $hauteur;
}

//assesseurs

public function getHauteur(){return $this->hauteur;}
public function setHauteur($hauteur){$this->hauteur = $hauteur;}

// Méthodes

Public function perimetre(){
   return 4 * ($this->longueur + $this->largeur + $this->hauteur);
}

Public function volume(){
 return $this->longueur * $this->largeur * $this->hauteur;
}



Public function afficherPave(){
    echo "Concernant le pavé, voici ses infos: <br>";
    echo "Périmètre: ". $this->perimetre() . "cm <br>";
    echo "Volume: " . $this->volume() . " cm3 <br><br>";
}
}


