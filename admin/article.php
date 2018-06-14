<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php 
require_once 'includes/helpers.php'; 
getHead("Article");

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
				<h2>Écrire un article</h2>
				<div class="row">
					<div class="twelve columns block" id="input-form">

						<?php 
if(!isset($_POST['titre']) && !isset($_POST['contenu']) && !isset($_POST['image'])) {
echo '<form action="agenda.php" method="post">
<div class="input-group">
<input class="form-control" type="text" placeholder="Titre" name="titre">
</div>
<div class="input-group">
	<textarea class="form-control" name="contenu" cols="30" rows="10" placeholder="Contenu"></textarea>
</div>
<div class="input-group">
	<input class="form-control" type="text" placeholder="Image" name="image">
</div>
<button type="submit" class="btn btn-primary btn-block">Publier</button>
</form>';
}
elseif(!empty($_POST['titre']) && !empty($_POST['contenu']) && !empty($_POST['image'])) {
	$bdd = dbConnect();

	$titre = $_POST['titre'];
	$contenu = $_POST['contenu'];
	$image = $_POST['image'];

	$req = $bdd->prepare('INSERT INTO articles(titre_article, contenu_article, image_article, date_publication) VALUES(:titre, :contenu, :image, CURDATE())');
	$req->execute(array(
	'titre' => $titre,
	'contenu' => $contenu,
	'image' => $image));
	echo '<form action="agenda.php" method="post">
	<div class="input-group">
	<input class="input-control" type="text" placeholder="Titre" name="titre">
	</div>
	<div class="input-group">
		<textarea class="input-control" name="contenu" cols="30" rows="10" placeholder="Contenu"></textarea>
	</div>
	<div class="input-group">
		<input class="input-control" type="text" placeholder="Image" name="image">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Publier</button>
	<div class="alert alert-success">L\'article à bien été ajouté</div>
	</form>';
}
else {
	echo '<form action="agenda.php" method="post">
	<div class="input-group">
	<input class="input-control" type="text" placeholder="Titre" name="titre">
	</div>
	<div class="input-group">
		<textarea class="input-control" name="contenu" cols="30" rows="10" placeholder="Contenu"></textarea>
	</div>
	<div class="input-group">
		<input class="input-control" type="text" placeholder="Image" name="image">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Publier</button>
	<div class="alert alert-warning">Les champs doivent être remplies</div>
	</form>';
}
?>
					</div>
				</div>
			</div>

		</div>
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<script>
		tinymce.init({
			selector: 'textarea'
		});
	</script>
</body>

</html>