<?php 
session_start();
require 'includes/helpers.php'; 
getHead("Informations pratiques"); 
?>
<div class="container">
    <?= getMenu(); ?>
<div class="page-template">
        <div class="main-image" style="background: url(images/infos-pratiques/informations.jpg); background-size: cover;">
            <div class="text-main-image">Informations pratiques</div>
        </div>

        <div class="container-template">
            <?php 
            $items = array(
                array("ramassages-des-dechets", "images/infos-pratiques/trash.jpg", "Ramassage des déchets"),
                array("horaire-des-bus", "images/infos-pratiques/bus.jpg", "Horaire des bus"),
                array("animaux-errants", "images/infos-pratiques/animaux.jpg", "Animaux errants")
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