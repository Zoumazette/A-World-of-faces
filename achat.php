<!--accessible uniquement aux loggés (vérification  pseudo/mot de passe-->
<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>A world of Faces</title>
</head>

<body>
<!-- barre de navigation vers ACCUEIL, ACHAT et BLOG -->
<div class="bs-component">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"></a>
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="accueil.php">Inscription / Entry<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="achat.php">Achats / Shopping</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://arnaudbeinat.wordpress.com/presentation-darnaud-beinat/">Mon parcours / My journey</a>

            </li>
        </ul>
    </nav>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<form>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Pseudo/Log in</label>
        <input type="text" class="form-control" id="user_name">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Mot de passe/Password</label>
        <input type="password" class="form-control" id="user_password">
        </div>
    </div>
    
    <style>
  form {
/*centrer le formulaire */
margin: 0 auto;
width: 400px;
/* encadré pour voir les limites du formulaire*/
padding: 1em;
border: 1px solid #CCC;
border-radius: 1em;
  }
</style>

    <div class="form-group">
    <form method="link" action="http://www.google.com"><input type="submit" value="Photos / Pictures" class="modif"></form>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="keypass">
        <label class="form-check-label" for="gridCheck">Se souvenir de moi/Check me out</label><br>
        <br></div>
    </div>
    
    
</form>

<?php
//var_dump(_$POST);
$username =  $_POST['user_name'];
$keypass = $_POST['keypass'];

//Se connecter à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=AWOF','stagiaire','stagiaire');
} catch (PDOException $e) {
    echo 'connexion échouée';
}

//Insérer la ligne utilisateur en bdd
$sql = "INSERT INTO user (name_user, password_user) VALUES (?,?)";
$preparation = $pdo->prepare($sql);
$preparation->bindParam(1,$username);
$preparation->bindParam(2,$keypass);
$preparation->execute();
?>