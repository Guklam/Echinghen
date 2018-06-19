<?php

/**
* Connexion à la base de données 
**/
function dbConnect() {
    require_once('config/config.php');
    try {
        $bdd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8', USER, PASSWORD);
        return $bdd;
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

/**
 * Accesseur pour les news
 */
function getNews() {
    $bdd = dbConnect();
    $req = $bdd->query('SELECT * FROM news_echinghen');
    $req->fetchAll();
    if($req->rowCount() > 0) {
        $reponse = $bdd->query('SELECT * FROM news_echinghen WHERE date_article ORDER BY date_article DESC LIMIT 0,3');
        while ($donnees = $reponse->fetch()) {
            require('News.php');
        }
        $reponse->closeCursor();
    }
    else {
        echo '
        <div class="item item--full" style="background-size: cover;">
        <div class="item__details">
            Aucun article à afficher pour le moment
        </div>
        </div>';
    }
}

/**
 * Accesseur pour les articles
 */
function getArticles() {
    $bdd = dbConnect();
    $req = $database->query('SELECT * FROM articles WHERE date_publication ORDER BY date_publication DESC LIMIT 0,3');
    while ($datas = $req->fetch()) {
        require_once('Article.php');
    }
    $req->closeCursor();
}

/**
 * Accesseur pour le head HTML
 */
function getHead($titre)
{
    class Head {
    
        protected $titre;
    
        /*
        * Constructeur du head
        */ 
        function __construct($unTitre) {
            $this->titre = $unTitre;
        }
    }
    $title = new Head($titre);
    require_once('Head.php');
}

/**
 * Accesseur pour le head HTML pour les pages 
 */
function getHeadPage($titre)
{
    class Head {
    
        protected $titre;
    
        /*
        * Constructeur du head
        */ 
        function __construct($unTitre) {
            $this->titre = $unTitre;
        }
    }
    $title = new Head($titre);
    require_once('Head-page.php');
}

function getMenu() {
    require_once ('Menu.php');
}

function getMenuPage() {
    require_once ('Menu-page.php');
}

function getMenuMobile() {
    require_once('Menu_mobile.php');
}

function getScripts() {
    require_once('Scripts.php');
}

function getFooter() {
    require_once('Footer.php');
}