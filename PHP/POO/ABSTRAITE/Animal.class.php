<?php

abstract class Animal{
protected $nom;
protected $age;

public function _construct($nom, $age){
$this->nom = $nom;
$this->age = $age;

}

public function getNom(){return $this->nom;}
public function getAge(){return $this->age;}

public function setNom($nom){
    $this->nom =$nom;
}

public function setAge($age){
    $this->age =$age;
}

//Méthode abstraite
abstract public function faireDuBruit();

//Méthode concrète
public function bouger(){
    echo $this->nom . " bouger...<br>";
}
}

?>