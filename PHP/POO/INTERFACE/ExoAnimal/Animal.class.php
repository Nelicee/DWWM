
<?php
require_once 'SeDeplacer.php';

abstract class Animal implements SeDeplacer {
    protected $nom;
    protected $nbPattes;

    public function __construct($nom, $nbPattes) {
        $this->nom = $nom;
        $this->nbPattes = $nbPattes;
    }

    abstract public function crier();
}
?>