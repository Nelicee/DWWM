<?php

$chomage = array(
'Autriche' => 4.9,
'Allemagne' => 9.3 ,
'Danemark' => 4.8 ,
'Espagne' => 9.4 ,
'France' => 9.7
);

$nomPays = "";
$valuePays = NULL;

foreach ($chomage as $key => $value) {
if ($valuePays == NULL || $valuePays > $value){
$nomPays = $key;
$valuePays = $value;

}

}
echo "Le pays ayant le taux de chomage le plus bas est : $nomPays avec un taux de $valuePays%";


