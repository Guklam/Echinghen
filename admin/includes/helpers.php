<?php

/**
* Connexion à la base de données 
**/
function dbConnect() {
    require_once('../config/config.php');
    try {
        $bdd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8', USER, PASSWORD);
        return $bdd;
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
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
 * Menu sur le côté
 */
function getSidebar() {
    require_once('Sidebar.php');
}

/**
 * Menu en haut
 */
function getNav() {
    require_once('Nav.php');
}   