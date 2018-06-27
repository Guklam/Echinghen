<?php 
session_start();
require 'includes/helpers.php'; 
getHead("Locations de salles"); 
?>
<div class="container">
    <?= getMenu(); ?>
<div class="page-template">
        <div class="main-image" style="background: url(images/location-de-salles/locations-grande.jpg); background-size: cover;">
            <div class="text-main-image">Locations de salles</div>
        </div>

        <div class="container-template">
            <?php 
            $folder = "images/location-de-salles";
            $items = array(
                array("salle-des-fetes", "$folder/salle-des-fetes.jpg", "Salle des fêtes"),
                array("petite-salle-du-bas", "$folder/petite-salle-du-bas.jpg", "Petite salle du bas")
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
<?= getFooter(); ?>
</div>
<?= getScripts(); ?>