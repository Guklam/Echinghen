<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php 
require_once 'includes/helpers.php'; 
getHead("Actualiser les articles");
if(isset($_SESSION['id'])) {

}
else {
	header('Location: connexion.php');
}
?>

<body>
    <div class="main" id="main">

        <?php getSidebar(); ?>

        <!-- Content -->
        <div class="content">
            <?php getNav(); ?>

            <!-- Main content -->
            <div class="main-content">
                <h2>Actualisation des articles</h2>
                <div class="row">
                    <?php

// Fichier nécessaire à la manipulation du DOM
require_once 'includes/Manip_dom.php';

// Récupère les actualités directement depuis lasemainedansleboulonnais
$news = file_get_html('http://www.lasemainedansleboulonnais.fr/recherche/echinghen/echinghen?solrsort=created%20desc');

//On mets tout les liens de la page sous forme de tableau pour pouvoir les traiter ensuite
$i = 0;

foreach($news->find('a.entry-title') as $link) {
    $links[] = $link->href;
}

//Récupération des grandes images d'articles sur chaque page
$counter = 0;
foreach($links as $items) {

    $links_container[$counter] = file_get_html($items);

    foreach ($links_container as $test) {

        foreach($test->find('img.imagecache-vdn_photo_principale_article') as $photo) {

            foreach($test->find('h1.entry-title ') as $titre) {
            }

            foreach($test->find('div.entry-content') as $text) {
            }

            foreach($test->find('span.dtstamp') as $span) {
                foreach($span->find('span') as $date) {
                }
            }
            $bdd = dbConnect();
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            // Insertion du message à l'aide d'une requête préparée
            $req = $bdd->prepare('SELECT COUNT(*) FROM news_echinghen WHERE titre_article = ?', $pdo_options);
            $req->execute(array(trim($titre->plaintext)));
            if ($req->fetchColumn() != 0) {
                echo "<div class=\"alert alert-warning\"><a class=\"alert-link\" href=\"$items\">$titre->plaintext</a> est déjà présent</div>";
                $i++;
            }
            else {
                $result= $req->fetchAll();
                $date=$date->plaintext;
                $date = explode("/", $date);
                $newsdate=$date[2].'-'.$date[1].'-'.$date[0];
                $req = $bdd->prepare('INSERT INTO news_echinghen(image_article, titre_article, texte_article, lien_article, date_article) VALUES(?, ?, ?, ?, ?)', $pdo_options);
                $req->execute(array($photo->src, trim($titre->plaintext), trim($text->plaintext), $items, str_replace(' ','',$newsdate)));
                echo "<div class=\"alert alert-success\"><a class=\"alert-link\" href=\"$items\">$titre->plaintext</a> à été ajouté</div>";
                $i++;
            }

        }
    }
}
$time = (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']);
echo '<br>Les <span class="bold">'.$i.'</span> articles ont été traités en <span class="bold">' . number_format($time) . '</span> secondes.';
?>
                </div>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</body>

</html>