<?php
class Produit
{
    private $nom;
    private $prix;
    private $quantiteEnStock;




// Constructeur
public function __construct(string $nom, float $prix,int $quantiteEnStock) {
    $this->nom = $nom;
    $this->prix = $prix;
    $this->quantiteEnStock = $quantiteEnStock;
 

}

// Getters
public function getNom(): string {
    return $this->nom;
}

public function getPrix(): float {
    return $this->prix;
}

public function getQuantiteEnStock(): int {
    return $this->quantiteEnStock;
}

// setters

public function setNom(string $nom): void {
    $this->nom = $nom;
}

public function setPrix(float $prix): void {
    $this->prix = $prix;
}

public function setQuantiteEnStock(int $quantiteEnStock): void {
    $this->quantiteEnStock = $quantiteEnStock;
}

 public function afficherProduit(): void {
    echo "Produit : " . $this->nom . "\n";
    echo "Prix : " . $this->prix . " euros\n";
    echo "Quantité en stock : " . $this->quantiteEnStock. "\n";
}
// Méthode pour mettre à jour le prix du produit
public function mettreAJourPrix(float $nouveauPrix): void {
    $this->prix = $nouveauPrix;
}

// Méthode pour ajouter des unités au stock du produit
public function ajouterStock(int $quantiteAjoutee): void {
    $this->quantiteEnStock += $quantiteAjoutee;
}

// Méthode pour vendre des unités du produit
public function vendreProduit(int $quantiteVendue): void {
    if ($quantiteVendue <= $this->quantiteEnStock) {
        $this->quantiteEnStock -= $quantiteVendue;
        echo "Vendu: " . $quantiteVendue . " unités de " . $this->nom . "\n";
    } else {
        echo "Stock insuffisant pour vendre " . $quantiteVendue . " unités de " . $this->nom . "\n";
    }
}
}