<?php 
require 'includes/helpers.php'; 
session_start();
getHead("Agenda");
?>
<div class="container">
    <?= getMenu(); ?>
    <div class="content">
    <?php 
    include('includes/parse-markdown.php');
    $contents = file_get_contents('pages/manifestations-dans-notre-commune.md');
    $parse = new Parsedown();
    echo $parse->text($contents);
    ?>
    </div>
<?= getFooter(); ?>
</div>
<?= getScripts(); ?>