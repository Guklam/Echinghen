<!-- Sidebar -->
<div class="sidebar">
	<h2 class="name">
		Administration
	</h2>
	<div class="picture">
		<img src="../images/agenda/001.jpg" alt="image user">
		<span class="text-img">
			<?php if(date("h") < 18) { echo "Bonjour"; } else { echo "Bonsoir"; }?>,
			<br>
			<a href="#">
				<?php echo ucfirst(strtolower($_SESSION['user'])); ?>
			</a>
		</span>
	</div>
	<div class="section-sidebar">
		<h4 class="section-title">Dashboard</h4>
		<ul>
			<li>
				<a href="dashboard" class="test">
					<i class="far fa-chart-bar"></i>Vue générale</a>
			</li>
			<li>
				<a href="agenda">
					<i class="far fa-calendar-alt"></i>Agenda</a>
			</li>
			<li>
				<a href="messages">
					<i class="far fa-envelope"></i>Messages</a>
			</li>
			<li>
				<a href="newsletter">
					<i class="far fa-newspaper"></i>Newsletter</a>
			</li>
		</ul>
	</div>
	<div class="section-sidebar">
		<h4 class="section-title">Actions</h4>
		<ul>
			<li>
				<a href="article">
					<i class="fas fa-pencil-alt"></i> Écrire un article</a>
			</li>
			<li>
				<a class="tooltip" href="news_update">
					<i class="fas fa-sync"></i>Actualiser les articles
					<span class="tooltiptext">Assurez-vous d'avoir une bonne connexion</span>
				</a>
			</li>
			<li>
				<a href="inscription">
					<i class="fas fa-user-plus"></i> Créer un nouveau administrateur</a>
			</li>
			<li>
				<a href="dump_bdd">
					<i class="fas fa-database"></i>Exporter la BDD</a>
			</li>
			<li>
				<a href="#">
					<i class="fas fa-lock"></i>Sécurité</a>
			</li>
		</ul>
	</div>
</div>