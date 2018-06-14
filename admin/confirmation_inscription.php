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
if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['email'])) {
    $bdd = dbConnect();
    $req = $bdd->prepare('SELECT COUNT(*) FROM admin WHERE user = ?');
    $req->execute(array(strtolower($_POST['user'])));
    if ($req->fetchColumn() != 0) {
    }
    else {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $pass_hache = password_hash($pass, PASSWORD_DEFAULT);

        // Insertion
        $req = $bdd->prepare('INSERT INTO admin(user, pass, email, date_inscription) VALUES(:user, :pass, :email, CURDATE())');
        $req->execute(array(
        'user' => $user,
        'pass' => $pass_hache,
        'email' => $email));
        $resultat = $req->fetch();
        echo '<div class="alert alert-success">L\'utilisateur à bien été enregistré!</div>';
        echo '<div class="alert alert-info">Vous allez être rédirigé vers la page d\'accueil</div>';
        header('Refresh : 2; inscription.php');
    }
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