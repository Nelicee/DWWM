<?php
class Stagiaire
{
    private $nom;
    public $notes;



    // . Constructeur avec 2 paramètres
    public function __construct(string $nom, array $notes)
    {
        $this->nom = $nom;
        $this->notes = $notes;
    }


    // . Getters  les attributs
    private function getNom(): string
    {
        return $this->nom;
    }


    public function getNotes(): array
    {
        return $this->notes;
    }

    // Setters

    private function setNom(string $nom): void
    {
        $this->nom = $nom;
    }


    public function setNotes(array $notes): void
    {
        $this->notes = $notes;
    }


    //Méthode  calculerMoyenne () 

    public function calculerMoyenne(): float
    {
        if (count($this->notes) == 0) {
            return 0; // Pour éviter la division par zéro
        }
        $somme = array_sum($this->notes);
        return $somme / count($this->notes);
    }
    // Méthode trouver Max
    public function trouverMax(): float
    {
        if (count($this->notes) == 0) {
            return 0; // Pour le cas où il n'y a pas de notes
        }
        return max($this->notes);
    }

    // Méthode trouver min
    public function trouverMin(): float
    {
        if (count($this->notes) == 0) {
            return 0; // Pour le cas où il n'y a pas de notes
        }
        return min($this->notes);
    }

    public function afficher(): void {
        echo "Nom: " . $this->nom . "\n";
        echo "Notes: " . implode(", ", $this->notes) . "\n";
        echo "Moyenne: " . $this->calculerMoyenne() . "\n";
        echo "Note Max: " . $this->trouverMax() . "\n";
        echo "Note Min: " . $this->trouverMin() . "\n";
    }






}
