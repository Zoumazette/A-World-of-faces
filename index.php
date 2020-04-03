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
<!-- La barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Navigation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="accueil.php">Accueil/Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="achat.php">Achat/Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://arnaudbeinat.wordpress.com/presentation-darnaud-beinat/">Book/About</a>
            </li>
        </ul>
    </nav>

<!-- Le container texte et carousel-->
<section class="row animated fadeInLeft" id="corps">
    <div class="container jumbotron">
    <h1 class="display-3">Hello, world!</h1>
    <p class="lead">L'aventure c'est le trésor que l'on découvre chaque matin / Adventure is the treasure that we discover every morning<cite>- "Jacques Brel" -</cite></p>
    <hr class="my-4">

        <div class="carousel">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="enfantsteepe.jpg" class="d-block mx-auto" alt="L'enfant des steppes">
            </div>
            <div class="carousel-item">
            <img src="epicier.jpg" class="d-block mx-auto" alt="L'épicier">
            </div>
            <div class="carousel-item">
            <img src="femmessurle peron.jpg" class="d-block mx-auto" alt="La femme sur le péron">
            </div>
            <div class="carousel-item">
            <img src="femmevoilee.jpg" class="d-block mx-auto" alt="La visiteuse">
            </div>
            <div class="carousel-item">
            <img src="girls.jpg" class="d-block mx-auto" alt="Les jeunes filles">
            </div>
            <div class="carousel-item">
            <img src="pecheur.jpg" class="d-block mx-auto" alt="Le pécheur">
            </div>
        </div>
        </div>
        </div>
    </div>
</section>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
