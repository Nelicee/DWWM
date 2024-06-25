<?php

class Rectangle
{
    protected $longueur;
    protected $largeur;



    public function __construct(float $longueur, float $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        // echo "Le rectangle  a une longueur de " . $this->longueur . "et une largeur de: " . $this->largeur;
    }

    public function getLongueur()
    {
        return $this->longueur;
    }
    public function setLongueur(float $longueur)
    {
        $this->longueur = $longueur;
    }


    public function getLargeur()
    {
        return $this->largeur;
    }
    public function setLargeur(float $largeur)
    {
        $this->largeur = $largeur;
    }

    public function perimetreRectangle()
    {
        // echo "Le périmètre du rectangle est de : " . ($this->longueur) * 2 + ($this->longueur) * 2 . "cm. <br>";
        return ($this->longueur) * 2 + ($this->largeur) * 2;
    }

    public function aire()
    {
        // echo "L'aire du rectangle est de : " . ($this->longueur) * ($this->longueur) . "m². <br>";
        return $this->longueur * $this->largeur;
    }
    public function estCarre()
    {
        if ($this->longueur === $this->largeur) {
            echo "Il s'agit d'un carré.";
        } else {
            echo "Il ne s'agit pas d'un carré.";
        }
    }
    public function afficherRectangle()
    {   
        echo "Voici les informations concernant le rectangle : <br>";
        echo "Longueur : " .  $this->longueur . "cm <br>";
        echo "Largeur : " .  $this->largeur . "cm <br>";
        echo "Périmètre : " .  $this->perimetreRectangle() . "cm <br>";
        echo "Aire : " .  $this->aire() . "cm² <br>";
        echo $this->estCarre()  . "<br> <br>";
    }
}
