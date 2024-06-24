php
<?php
require_once 'Animal.php';

class Lapin extends Animal {
    private $estVivant = true;

    public function seDeplacer() {
        return "{$this->nom} s'enfuie sur ses {$this->nbPattes} pattes d'un seul bond !";
    }

    public function crier() {
        return "Le lapin glapie de peur";
    }

    public function estTouche() {
        $this->estVivant = false;
    }

    public function estVivant() {
        return $this->estVivant;
    }

    public function seNourrir() {
        return "Le lapin {$this->nom} à {$this->nbPattes} pattes a été créé";
    }

    public function fuir() {
        return $this->seDeplacer();
    }
}
?>

