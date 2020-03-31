// Barre de navigation vers INSCRIPTION, CONNECTION et BLOG
<?php
//var_dump(_POST);
$username =  $_POST['username'];
$email = $_POST['email'];
$keypass = $_POST['keypass'];

//Se connecter à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=AWOF','stagiaire','stagiaire');
} catch (PDOException $e) {
    echo 'connexion échouée';
}

//Insérer la ligne utilisateur en bdd
$sql = "INSERT INTO user (user_name, user_email, user_keypass) VALUES (?,?,?)";
$preparation = $pdo->prepare($sql);
$preparation->bindParam(1,$username);
$preparation->bindParam(2,$email);
$preparation->bindParam(3,$keypass);
$preparation->execute();