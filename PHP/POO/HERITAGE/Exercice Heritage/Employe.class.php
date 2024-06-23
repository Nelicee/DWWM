<?php

class Employe
{
    // Attributs protégés
    protected $nom;
    protected $salaire;

    // Constructeur pour initialiser les attributs
    public function __construct($nom, $salaire)
    {
        $this->nom = $nom;
        $this->salaire = $salaire;
    }

    // Getters 
    public function getNom() {return $this->nom;}

   
    public function getSalaire() {return $this->salaire;}
    // setters

    public function setNom(string $nom): void {$this->nom = $nom;}
    public function setSalaire(float $salaire): void {$this->salaire = $salaire;}


    // Méthode pour afficher le nom et le salaire de l'employé
    public function afficherDetails()
    {
        echo "Nom : " . $this->nom . "\n";
        echo "Salaire : " . $this->salaire . "\n";
    }
}
