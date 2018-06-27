<?php 
require 'includes/helpers.php'; 
session_start();
getHead("Agenda");
?>
<div class="container">
    <?= getMenu(); ?>
<div class="page-template">
        <div class="main-image" style="background: url(images/agenda/agenda.jpg); background-size: cover;">
            <div class="text-main-image">Agenda</div>
        </div>

        <div class="container-template">
                <?php 
        $bdd = dbConnect();
        $req = $bdd->query('SELECT titre_agenda, contenu_agenda, image_agenda, date_publication FROM agenda ORDER BY id DESC LIMIT 0,3');
        while ($donnees = $req->fetch()) {
        ?>
                <article class="bloc">
                    <div class="image-bloc" style="background: url(<?= $donnees['image_agenda']; ?>); background-size: cover;"></div>
                    <div class="description-bloc">
                        <?= $donnees['titre_agenda']; ?>
                    </div>
                </article>
                <?php
        }
        ?>
            </div>
</div>
<?= getFooter(); ?>
</div>
<?= getScripts(); ?>