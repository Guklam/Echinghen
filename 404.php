<?php 
session_start();
require 'includes/helpers.php'; 
getHead("Erreur 404");
?>
<div class="container-404">
    <div class="error-404">
        <div class="main-error">404</div>
        <div class="text-error">
            <p>La page que vous rechercher à été déplacé ou n'existe plus.</p>
            <a href="./">Retour à la page d'accueil</a>
        </div>
    </div>
    <div class="arrow-back">
        <i onclick="window.history.back()" class="fas fa-arrow-left"></i>
    </div>
</div>
</body>

</html>