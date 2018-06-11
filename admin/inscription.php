<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php 
require_once 'includes/helpers.php'; 
getHead("Inscription");

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
                <h2>Création d'un nouveau administrateur</h2>
                <div class="row">
                    <div class="twelve columns block" id="input-form">
                        <form action="confirmation_inscription.php" method="post">
                            <input type="email" name="email" placeholder="Adresse email">
                            <input type="text" name="user" placeholder="Nom d'utilisateur">
                            <input type="password" name="pass" placeholder="Mot de passe">
                            <button class="btn btn-primary btn-block" type="submit">Inscription</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                <div class="twelve columns block">
                <table>
                <tr>
                    <th>Identifiant</th>
                    <th>Utilisateur</th>
                    <th>Adresse email</th>
                    <th>Date d'inscription</th>
                </tr>
                <?php 

                $bdd = dbConnect();
                $req = $bdd->query('SELECT id, user, email, date_inscription FROM admin');
                while($donnees = $req->fetch()) {
                ?>
                    <tr>
                        <td><?php echo $donnees['id']; ?></td>
                        <td><?php echo $donnees['user']; ?></td>
                        <td><?php echo $donnees['email']; ?></td>
                        <td><?php echo $donnees['date_inscription']; ?></td>
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