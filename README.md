# Site de la mairie d'Echinghen

## Liste des pages à créer

Sitemap du site : <https://www.xml-sitemaps.com/download/www.echinghen.com-448b4582/sitemap.html?view=1>

## Modifier les images/backgrounds

* Fichier sass : **main.scss** (Composants dans le dossier components)
* Background : **main.scss** / main.css -> $background
* Couleurs: **_colors.scss** / main.css

## Base de données

Nom de la bdd : **echinghen**

* news
  * id
  * image_article
  * titre_article
  * texte_article
  * lien_article
  * date_article

Configuration à changer si besoin dans le dossier **config/Config.php**

## Helpers PHP

* includes
  * Connexion à la base de données ( `dbConnect()` )
  * Accesseur pour le head HTML ( `getHead()` )
  * Fonction qui retourne les news extraite de *lasemainedansleboulonnais* ( `getNews()` )
  * Fonction qui retourne les articles écrit ( `getArticles()` )
  * Fonction qui retourne le menu ( `getMenu()` )
  * Fonction qui retourne le menu pour mobile ( `getMenuMobile()` )
  * Fonction qui retourne la balise `<script>` ( `getScripts()` )
  * Fonction qui retourne le footer ( `getFooter()` )

* admin/includes
  * Connexion à la base de données ( `dbConnect()` )
  * Accesseur pour le head HTML ( `getHead()` )
  * Fonction qui retourne le menu latéral pour la dashboard ( `getSidebar()` )
  * Fonction qui retourne le menu du haut pour la dashboard ( `getNav()` )

## Interface d'administration

La partie pour se connecter à l'administration se trouve dans `admin/connexion.php`.

**Fonctionnalités** : 

* Dashboard
  * Vue générale de l'interface ( `dashboard.php` )
  * Gérér l'agenda ( `agenda.php` )
  * Recevoir les messages ( `message.php` )
  * Voir les personnes inscrites pour la newsletter ( `newsletter.php` )

* Actions
  * Écrire un article ( `article.php` )
  * Actualiser les articles qui récupère toutes les actualités recentes de la *Lasemainedansleboulonnais*, à faire une fois dans la semaine ( `news_update.php` )
  * Créer un nouveau administrateur ( `ìnscription.php` )
  * Exporter la BDD, réservé aux développeurs ( `dump_bdd.php` )
  * Sécurité ( `securite.php` )

## Ressources/langages utilisés

* Langages
  * HTML pour la mise en forme
  * Préprocesseur CSS (*SCSS*) pour le design
  * PHP pour la partie serveur
  * jQuery pour l'animation du menu pour mobile et de quelques éléments
  * **Aucun CMS/framework utilisé**

* Ressources
  * FontAwesome pour les icônes
  * Flickity pour le slider
  * Interface d'admistration basé sur un design de Dribbble (Ré-adapté en site web par moi)
  * Grid CSS pour les articles, catégories etc basé sur un CodePen
  * Boutons et input bootstrap
  * Grid CSS pour l'interface d'admistration basée sur Skeleton
  * Animation du menu au hover basé sur un CodePen
  * ChartJS pour les graphiques dans l'interface d'admistration