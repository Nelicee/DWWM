<?php
abstract class Animal implements SeDeplacer {
    protected $couleur;
    protected $nombrePate;

    public function __construct($couleur, $nombrePate) {
        $this->couleur = $couleur;
        $this->nombrePate = $nombrePate;
    }

    abstract public function crier();
}
?>