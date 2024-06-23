

<?php
//Fonction pour demander un nombre à l'utilisateur
function demanderNombre($message){
    $nbreValide = false;
    while(!$nbreValide){
        echo $message;
        $saisie =readline();
        $nbreValide = verifierSaisie($saisie);
    }
    return $saisie;
}

function operation($choix,$nombre1,$nombre2){

switch($choix){
    case 1: 
        $resultat = $nombre1 + $nombre2;
        echo "Le résultat de l'adition est : $resultat\n";
        break;
    
    case 2: 
        $resultat = $nombre1 - $nombre2;
        echo "Le résultat de la soustraction est : $resultat\n";
        break;
    
    case 3:
        $resultat = $nombre1 * $nombre2;
        echo "Le résultat de la multiplication est : $resultat\n";
        break;
    
    case 4:

        //Vérification du deuxième nombre
        if($nombre2 != 0){
            $resultat = $nombre1 / $nombre2;
            echo "Le résultat de la division est : $resultat\n";
        }else{
            echo "erreur : division par zéro \n";
        }
        break;
    default:
    echo "Choix invalide\n";

}

}