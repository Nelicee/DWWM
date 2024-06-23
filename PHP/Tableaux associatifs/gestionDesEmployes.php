<?php
require "fonctions.php";
ajouterEmploye($employes,1 ,"Pierre","Developpeur",50000);
ajouterEmploye($employes,2 ,"Paul","Designer",45000);
ajouterEmploye($employes,3,"Jack","Chef de projet",60000);


echo "Liste des employes: \n";
afficherEmployes($employes);

echo "\n";
echo "Salaire total: " . calculerSalairetotal($employes);