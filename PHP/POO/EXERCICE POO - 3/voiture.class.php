<?php
class Voiture
{
    private $marque;
    private $modele;
    private $annee;
    private $couleur;


// Propriété publique avec une valeur par défaut
public $vitesseActuelle = 0;




// Constructeur
public function __construct($marque, $modele,$annee,$couleur) {
    $this->marque = $marque;
    $this->modele = $modele;
    $this->annee = $annee;
    $this->couleur = $couleur;
    // $this->vitesseActuelle = $vitesseActuelle;
}


   //getter
   public function getMarque(){return $this->marque;}
   public function getModele(){return $this->modele;}
   public function getAnnee(){return $this->annee;}
   public function getCouleur(){return $this->couleur;}
   public function vitesseActuelle(){return $this->vitesseActuelle;}

   //setter
public function setMarque($marque){
   $this->marque = $marque;
}
   public function setModele($modele){
   $this->modele = $modele;
} 
public function setAnnee($annee){
   $this->annee = $annee;
} 
public function setCouleur($couleur){
   $this->couleur = $couleur;
} 
public function SetVitesseActuelle($vitesseActuelle){
    $this->vitesseActuelle = $vitesseActuelle;
 } 


// Méthode pour afficher les informations de la voiture
public function afficher() {
    echo "Marque:  $this->marque\n" . "<br>";
    echo "Modèle:  $this->modele\n" . "<br>";
    echo "Année:  $this->annee\n" . "<br>";
    echo "Couleur:  $this->couleur\n" . "<br>";
    echo "VitesseActuelle:  $this->vitesseActuelle\n" . "<br>";
    echo "************************************************<br>";
}

 // Méthode pour accélérer
 public function accelerer($valeur) {
    $this->vitesseActuelle += $valeur;
    return;
}

}