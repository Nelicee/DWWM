
<?php 
require "fonctions.php";
$nombre1 = $nombre2 = $resultat ="";



ob_start(); 
?>

<div>
<?php if ($resultats) : ?>
            <p>Le résultat du calcul est : <?= $resultats; ?></p>
        <?php endif; ?>
    
</div>

       


<?php
$content = ob_get_clean();
$titre = "calculatrice";
require "template.php";

?>


