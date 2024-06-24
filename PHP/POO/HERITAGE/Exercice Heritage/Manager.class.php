<?php

require_once "Employe.class.php";

class Manager extends Employe
{
    // Attributs protégés
    protected $employesGeres = [];


    // Constructeur
    public function __construct($nom, $salaire, $employesGeres = [])
    {
        parent::__construct($nom, $salaire);
        $this->employesGeres = $employesGeres;
    }

    // Méthode pour ajouter un employé à la liste des employés gérés
    public function ajouterEmploye(Employe $employe)
    {
        $this->employesGeres[] = $employe;
    }

   
    // Méthode pour afficher les détails du manager et des employés gérés
    public function afficherDetails()
    {
        echo "Nom: " . $this->nom . "\n";
        echo "Salaire: " . $this->salaire . "\n";
        echo "Employés gérés:\n";
        foreach ($this->employesGeres as $employe) {
            $employe->afficherDetails();
            echo "---\n";
        }
    }
}
