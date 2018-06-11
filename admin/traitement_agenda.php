<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php
require_once 'includes/helpers.php';
getHead("Date ajouté!");

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
					<h2>Ajouter une date à l'agenda</h2>
					<div class="row">
						<div class="twelve columns block" id="input-form">
							<?php
							if(!empty($_POST['titre']) && !empty($_POST['contenu']) && !empty($_FILES['image'])) {
    						$bdd = dbConnect();

    						$titre = $_POST['titre'];
    						$contenu = $_POST['contenu'];

    						if(isset($_FILES['image'])) {
     							$dossier = '../images/agenda/';
     							$fichier = basename($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) {
									
								}
     							else {
          							echo 'Echec de l\'upload !';
     							}
							}
    						$req = $bdd->prepare('INSERT INTO agenda(titre_agenda, contenu_agenda, image_agenda, date_publication) 
						  						  VALUES(:titre, :contenu, :image, CURDATE())');
    						$req->execute(array(
    						'titre' => $titre,
    						'contenu' => $contenu,
    						'image' => "images/agenda/" . $_FILES['image']['name']));
    						echo '<div class="alert alert-success">L\'évenement à été ajouté avec succès</div>';
    						echo '<div class="alert alert-info">Vous allez être rédirigé vers la page d\'accueil</div>';
    						header('Refresh : 2; agenda.php');
							}
							else {
    							echo '<div class="alert alert-warning">Les champs doivent être remplies</div>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	</body>

</html>