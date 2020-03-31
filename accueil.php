// Barre de navigation vers INSCRIPTION, CONNECTION et BLOG
<?php
//var_dump(_POST);
$name =  $_POST['username'];
$keypass = $_POST['password'];

//Se connecter à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=AWOF','stagiaire','stagiaire');
} catch (PDOException $e) {
    echo 'connexion échouée';
}

//Insérer la ligne utilisateur en bdd
$sql = "INSERT INTO user (name_user, password_user) VALUES (?,?)";
$preparation = $pdo->prepare($sql);
$preparation->bindParam(1,$name);
$preparation->bindParam(2,$keypass);
$preparation->execute();