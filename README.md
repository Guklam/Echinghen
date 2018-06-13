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
