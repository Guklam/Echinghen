<?php

/**
 * Connexion à la base de données
 *
 * @return void
 */
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
 * Getter pour le head HTML
 *
 * @param [string] $titre
 * @return void
 */
function getHead($titre)
{
    class Head {
    
        protected $titre;
    
        /**
         * Constructeur pour le titre
         *
         * @param [string] $unTitre
         */
        function __construct($unTitre) {
            $this->titre = $unTitre;
        }
    }
    $title = new Head($titre);
    require_once('Head.php');
}

/**
 * Récupérer le menu latéral
 *
 * @return void
 */
function getSidebar() {
    require_once('Sidebar.php');
}

/**
 * Récupérer le menu principal
 *
 * @return void
 */
function getNav() {
    require_once('Nav.php');
}   