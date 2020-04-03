<!--accessible uniquement aux loggés (vérification  pseudo/mot de passe-->
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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<form>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Pseudo/Login</label>
        <input type="text" class="form-control" id="user_name">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Mot de passe/Password</label>
        <input type="password" class="form-control" id="user_password">
        </div>
    </div>
    
    <div class="form-group">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="keypass">
        <label class="form-check-label" for="gridCheck">
            Se souvenir de moi/Check me out
        </label>
        </div>
    </div>
    
    <button type="POST" class="btn btn-primary">Envoyer/Sign in</button>
</form>
