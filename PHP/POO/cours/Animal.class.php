<?php

//Classe mère
class Animal{

    public $nom;
    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    //Méthode de la classe mère
    public function parlerl()
    {
        return "Cet animal ne fait pas de bruit spécifique.";
    }
}
