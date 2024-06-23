<?php ob_start(); ?>


<h2>Bonjour !</h2>
<p>fdhkghdfkghkdfhgkd</p>


<?php
    $content = ob_get_clean();
    $titre = "Ma page d'accueil";
    require "template.php";
?>
