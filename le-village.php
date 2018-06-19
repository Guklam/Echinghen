<?php 
session_start();
require 'includes/helpers.php'; 
getHead("Le village"); 
?>
<div class="container">
    <?= getMenu(); ?>
<div class="page-template">
<div class="fil-ariane">
        <?php include_once 'includes/ariane.php'; ?>
    </div>
        <div class="main-image" style="background: url(images/slider/mairie.jpg); background-size: cover;">
            <div class="text-main-image">Le village</div>
        </div>

        <div class="container-template">
            <?php 
            $folder = "images/le-village";
            $items = array(
                array("se-loger-a-echinghen", "$folder/se-loger.jpg", "Se loger à Echinghen"),
                array("patrimoine-historique", "$folder/patrimoine.jpg", "Patrimoine historique"),
                array("sentier-de-randonnee", "$folder/sentier.jpg", "Sentier de randonnée")
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