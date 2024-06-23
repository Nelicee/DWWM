<?php

class Bonjour{

    const MA_CONSTANTE = 'Bonjour,Hello';
    
    public function afficherMaConstante(){
        echo self::MA_CONSTANTE;
    }
}

$instance = new Bonjour();
$instance->afficherMaConstante();

?>