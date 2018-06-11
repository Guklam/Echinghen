<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php

require_once 'includes/helpers.php';
getHead("Connexion");
?>
<body>
<?php 
if(isset($_SESSION['id'])) {
    header('Location: dashboard.php');
}
?>
<a class="back" href="../"><i class="fas fa-arrow-left"></i> Retour à l'accueil</a>
<div class="login">
	<!-- Login -->
	<div class="login-title">
		<div class="login-box"><a>Connexion à l'administration</a></div>
	</div>
	<div class="form" id="login">
	<div class="login-form-co">
    <form action="connexion.php" method="post">
        <div class="input-group">
            <div class="input-icon">
                <span><i class="fas fa-user"></i></span>
            </div>
            <input class="form-control" type="text" name="user" placeholder="Nom d'utilisateur">
        </div>
        <div class="input-group">
            <div class="input-icon">
                <span><i class="fas fa-lock"></i></span>
            </div>
            <input class="form-control" type="password" name="pass" placeholder="Mot de passe" autocomplete="off">
        </div>
        <button class="btn btn-primary btn-block" type="submit">Connexion</button>
        <?php 
if(isset($_POST)) {
if(isset($_POST['user']) && isset($_POST['pass'])) {
    $bdd = dbConnect();
    $user = $_POST['user'];
    
    //  Récupération de l'utilisateur et de son pass hashé
    $req = $bdd->prepare('SELECT id, user, pass FROM admin WHERE user = :user');
    $req->execute(array('user' => $user));
    $resultat = $req->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

    if (!$resultat) {
        echo '<div class="alert alert-danger" role="alert">Identifiant ou mot de passe incorrect</div>';
    }
    
    else {

    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
    }
    
    else {
        echo '<div class="alert alert-danger" role="alert">Identifiant ou mot de passe incorrect!</div>';
    }
}
}
}
?>
    </form>
    </div>
</div>
</div>
</body>
</html>