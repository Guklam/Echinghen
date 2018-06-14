<?php 
require 'includes/helpers.php'; 
session_start();
getHead("Agenda");
?>
<div class="container">
    <?= getMenu(); ?>
        <h1>Agenda</h1>
        <p>Pariatur enim ea mollit quis dolore consequat officia quis eu commodo anim consectetur. Labore aute amet sit aliquip
            adipisicing ipsum ex sint nostrud in consectetur ad. Nulla proident minim adipisicing eu cupidatat pariatur nulla
            officia.</p>
        <section class="section">
            <img src="https://picjumbo.com/wp-content/uploads/silver-pen-in-open-business-day-planner-diary_free_stock_photos_picjumbo_DSC03467-2210x1474.jpg">
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
        <div class="grid-items">
            <div class="items">Test</div>
            <div class="items">Test</div>
            <div class="items">Test</div>
            <div class="items">Test</div>
        </div>
</div>
<?= getScripts(); ?>