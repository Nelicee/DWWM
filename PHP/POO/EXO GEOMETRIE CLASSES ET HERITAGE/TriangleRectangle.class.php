<?php

class TriangleRectangle
{

    protected $base;
    protected $hauteur;

    public function __construct(float $base, float $hauteur)
    {
        $this->base = $base;
        $this->hauteur = $hauteur;
    }

    public function getBase()
    {
        return $this->base;
    }
    public function setBase(float $base)
    {
        $this->base = $base;
    }

    public function getHauteur()
    {
        return $this->hauteur;
    }
    public function setHauteur(float $hauteur)
    {
        $this->hauteur = $hauteur;
    }


    public function perimetreTriangleRectangle()
    {
        $hypothenuse = sqrt((pow($this->base, 2) + pow($this->hauteur, 2)));
        return $this->base + $this->hauteur + $hypothenuse;
    }

    public function volumeTriangleRectangle(){
        return ($this->base * $this->hauteur)/2;
    }

    public function afficherTriangeRectangle(){
        echo "Périmètre du triangle rectangle: " . $this->perimetreTriangleRectangle() . "cm². <br>";
        echo "Volume du triangle rectangle: " . $this->volumeTriangleRectangle() . "cm3 <br>";
    }
}


