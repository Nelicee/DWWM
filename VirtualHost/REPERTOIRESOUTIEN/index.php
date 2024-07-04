<?php
ob_start();

if(session_status() == PHP_SESSION_NONE){
    session_start();
}


?>
<div class="welcome-text">

<h2>Bienvenue sur la page d'accueil du CRUD utilisateurs</h2>
<p>Utilisez le menu ci-dessus pour naviguer entres les différentes actions du CRUD</p>
</div>














<?php
$content = ob_get_clean();
$titre = "Accueil";
require "template.php"
?>