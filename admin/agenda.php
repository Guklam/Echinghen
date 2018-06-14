<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php 
require_once 'includes/helpers.php'; 
getHead("Agenda");

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
						<form action="traitement_agenda.php" method="post" enctype="multipart/form-data">
							<div class="input-group">
								<input class="form-control" type="text" placeholder="Titre" name="titre">
							</div>
							<div class="input-group">
								<textarea class="form-control" name="contenu" cols="30" rows="10" placeholder="Contenu"></textarea>
							</div>
							<div class="form-group">
								<input type="file" class="form-control-file" name="image">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Publier</button>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="twelve columns block">
						<table>
							<tr>
								<th>Identifiant</th>
								<th>Titre</th>
								<th>Contenu</th>
								<th>Image</th>
								<th>Date de publication</th>
							</tr>
							<?php 

                $bdd = dbConnect();
                $req = $bdd->query('SELECT * FROM agenda');
                while($donnees = $req->fetch()) {
                ?>
							<tr>
								<td>
									<?php echo $donnees['id']; ?>
								</td>
								<td>
									<?php echo $donnees['titre_agenda']; ?>
								</td>
								<td>
									<?php echo $donnees['contenu_agenda']; ?>
								</td>
								<td>
									<?php echo $donnees['image_agenda']; ?>
								</td>
								<td>
									<?php echo $donnees['date_publication']; ?>
								</td>
							</tr>
							<?php
                }
                ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</body>

</html>