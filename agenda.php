<?php 
require 'includes/helpers.php'; 
session_start();
getHead("Agenda");
?>
<div class="container">
<?= getMenu(); ?>
    <section class="section">
        <div class="grid">
        <?php 
        $bdd = dbConnect();
        $req = $bdd->query('SELECT titre_agenda, contenu_agenda, image_agenda, date_publication FROM agenda ORDER BY id DESC LIMIT 0,3');
        while ($donnees = $req->fetch()) {
        ?>
        <div class="item item--medium" style="background: url(<?php echo $donnees['image_agenda']; ?>); background-size: cover;">
            <div class="item__details">
                <?php echo $donnees['titre_agenda']; ?>
            </div>
        </div>
        <?php
        }
        ?>
        </div>
    </section>
</div>
<?= getScripts(); ?>