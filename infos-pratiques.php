<?php 
session_start();
require 'includes/helpers.php'; 
getHead("Infos pratiques"); 
?>
<div class="container">
    <?= getMenu(); ?>
        <section class="section">
            <div class="grid">
                <div class="item home item--medium">
                    <div class="item__details">
                        Mairie
                    </div>
                </div>
                <div class="item home item--medium">
                    <div class="item__details">
                        Salle municipale
                    </div>
                </div>
                <div class="item home item--medium">
                    <div class="item__details">
                        Église
                    </div>
                </div>
            </div>
        </section>
</div>
<?= getScripts(); ?>