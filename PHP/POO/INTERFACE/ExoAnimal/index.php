php
<?php
require_once 'Lapin.php';
require_once 'Chasseur.php';

$lapin = new Lapin("blanc", 4);
$chasseur = new Chasseur("Paul", "fusil");

echo $lapin->seNourrir() . "\n";
echo "Le chasseur {$chasseur->nom} a été créé avec un {$chasseur->arme}\n";

while ($lapin->estVivant()) {
    echo $chasseur->seDeplacer() . "\n";
    echo $lapin->crier() . "\n";
    echo $chasseur->chasser($lapin) . "\n";
    
    if ($lapin->estVivant()) {
        echo $lapin->fuir() . "\n";
    } else {
        echo "Le pauvre petit lapin blanc est malheureusement mort\n";
        break;
    }
}
?>