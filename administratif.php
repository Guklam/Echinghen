<?php 
session_start();
require 'includes/helpers.php'; 
getHead("Administratif"); 
?>
<div class="container">
    <?= getMenu(); ?>
<div class="page-template">
        <div class="main-image" style="background: url(images/administratif/administratif.jpg); background-size: cover;">
            <div class="text-main-image">Administratif</div>
        </div>

        <div class="container-template">
            <?php 
            $folder = "images/administratif";
            $items = array(
                array("urbanisme", "$folder/urbanisme.jpg", "Urbanisme"),
                array("la-municipalite", "$folder/municipalite.jpg", "La municipalité"),
                array("le-personnel-communal", "$folder/personnel.jpg", "Le personnel communal"),
                array("piece-identite", "$folder/identite.jpg", "Pièce d'identité"),
                array("sortie-de-territoire", "$folder/territoire.jpg", "Sortie de territoire"),
                array("vie-economiques-et-associatives", "$folder/economie.jpg", "Vie économiques et associatives"),
                array("manifestations-dans-notre-commune", "$folder/manifestations.jpg", "Manifestations dans notre commune"),
                array("bulletins-municipaux", "$folder/bulletins.jpg", "Bulletins municipaux"),
                array("formulaire-urbanisme", "$folder/formulaire.jpg", "Formulaire d'urbanisme"),
                array("piece-administratives", "$folder/piece.jpg", "Pièces admistratives"),
                array("ccas", "$folder/ccas.jpg", "CCAS"),
            );
            foreach ($items as $item) {
                echo '<article class="bloc">
                <a href="'.$item[0].'">
                    <div class="image-bloc" style="background: url('.$item[1].'); background-size: cover;"></div>
                    <div class="description-bloc">
                        '.$item[2].'
                    </div>
                </a>
            </article>';
            }
            ?>
        </div>
</div>  
</div>
<?= getScripts(); ?>