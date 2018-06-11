<?php
session_start();
require 'includes/helpers.php';
getHead("Accueil"); 
?>
<div class="container">

        <!-- Page principale -->
        <div class="header">
            <div class="header__menu">
                <ul class="main-menu">
                    <li class="items first title">
                        <a class="not" href="/">
                            <img src="images/logo-echinghen.png" alt="Logo">Echinghen</a>
                    </li>
                    <span class="push-left"></span>
                    <li class="items active">
                        <a href="#news">Actualités</a>
                    </li>
                    <li class="items">
                        <a href="agenda">Agenda</a>
                    </li>
                    <li class="items">
                        <a href="infos-pratiques">Infos pratiques</a>
                    </li>
                    <li class="items">
                        <a href="locations">Location de salles</a>
                    </li>
                    <li class="items">
                        <a href="administratif">Administratif</a>
                    </li>
                    <li class="items">
                        <a href="vie-sociale">Vie sociale</a>
                    </li>
                    <li class="items">
                        <a href="le-village">Le village</a>
                    </li>
                    <?php
                        if(isset($_SESSION['id'])) {
                            echo '<li class="items">
                            <a href="admin/dashboard.php">Administration</a>
                            </li>';
                        }
                        ?>
                </ul>
                <?= getMenuMobile(); ?>
            </div>
            <div class="header__title">
                <div class="welcome">
                    <h1>Bienvenue à Echinghen</h1>
                    <div id="weather"></div>
                </div>
            <div class="discover">
                    <a class="js-scrollTo" href="#news">Découvrir la commune<i class="fa fa-angle-down"></i></a>
            </div>
            </div>
        </div>

        <!-- Page des news -->
        <div id="news">
            <h2 class="title">
                <span>Actualités</span>
            </h2>
            <section class="section">
                <div class="grid">
                    <?php getNews(); ?>
                </div>
                <div class="btn-article">
                    <a class="btn btn-primary btn-lg" target="_blank" href="http://www.lasemainedansleboulonnais.fr/recherche/echinghen/echinghen?solrsort=created%20desc">Voir plus d'articles</a>
                </div>
            </section>
        </div>

        <!-- Présentation de la commune -->
        <div id="presentation">
            <h2 class="title">
                <span>Présentation</span>
            </h2>
            <div class="carousel">
                <?php
                $images=glob('images/slider/*.{jpg,png,gif}', GLOB_BRACE);
                foreach ($images as $image) {
                    echo '
                    <div class="carousel-cell">
                        <img src="'.$image.'" alt="'.$image.'">
                    </div>';
                }
                ?>
            </div>
        </div>

        <!-- Localisation -->
        <div id="localisation">
            <h2 class="title"><span>Localisation</span></h2>
            <iframe width="80%" height="80%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyB828p2bVQ6LOQCK2-YRZZFhlR_kR2ZlZM&q=echinghen"
                allowfullscreen> </iframe>
        </div>

        <!-- Footer -->
        <?= getFooter(); ?>

</div><!-- Fin du .container -->

<?= getScripts(); ?>