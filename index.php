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
            <iframe style="border:0" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyAEJnOsWjp22krFh2m4foTBEV3BlEcNF2Y&q=echinghen"></iframe>
        </div>

        <!-- Se restaurer à Echinghen -->
        <div id="restaurant">
            <h2 class="title"><span>Se restaurer à Echinghen</span></h2>
            <div class="grid-restaurant">
                <div class="image-restaurant"></div>
                <div class="desc-restaurant">
                    <h2>Aux Amis de Steph</h2>
                    <p>Adipisicing ad proident ea minim duis culpa aliqua proident velit. Excepteur proident qui sit excepteur aliqua officia esse cillum. Exercitation cupidatat deserunt laborum incididunt id exercitation ea. Nisi deserunt cillum proident cillum proident nulla mollit mollit veniam aliquip.</p>
                    <p>Dolore sint eiusmod do do mollit labore sunt cupidatat eu esse sit id. Do nostrud eu tempor ut quis. Duis nostrud do exercitation commodo nostrud nisi pariatur cupidatat nulla duis exercitation quis.</p>
                    <div class="links-social left">
                        <a target="_blank" href="https://www.facebook.com/Aux-Amis-De-Stef-619366901533983/"><i class="fab fa-facebook"></i></a>
                        <a target="_blank" href="https://www.tripadvisor.fr/Restaurant_Review-g2337126-d2330032-Reviews-Aux_Amis_de_Stef-Echinghen_Pas_de_Calais_Hauts_de_France.html"><i class="fab fa-tripadvisor"></i></a>
                    </div>
                </div>
                </div>
            </div>
        <!-- Footer -->
        <?= getFooter(); ?>
</div><!-- Fin du .container -->
<?= getScripts(); ?>
