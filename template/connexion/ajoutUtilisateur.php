<?php
require "../../vendor/autoload.php";
use App\requete\articlerepesitory;
require_once '../../src/requete/articlerepesitory.php';
?>
<!DOCTYPE html>
<html>
<<<<<<< HEAD
<?php require '../header.php'; ?>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../categorie/categorie.php">Histoire <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../categorie/categorie.php">Informatique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../categorie/categorie.php">Jeux-vidéo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../categorie/categorie.php">Actualité</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Connexion</a>
                </li>
            </ul>
        </div>
    </nav>
<?php
use App\requete\abstractrepository;
if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['nom_compte']) && !empty($_POST['mot_de_passe']) && !empty($_POST['role'])){
    $test = new articlerepesitory();
    $test->insertion($_POST);
}else{
    echo 'champ nécessaire';
}
=======
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../categorie/categorie.php">Histoire <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../categorie/categorie.php">Informatique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../categorie/categorie.php">Jeux-vidéo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../categorie/categorie.php">Actualité</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Connexion</a>
            </li>
        </ul>
    </div>
</nav>

<?php
use App\requete\requete;
$test = new requete();
$test->insertion($_POST, utilisateur(nom, prenom, nom_compte, mot_de_passe, role));

>>>>>>> c5cfdec46f1b0cac88a3bd5bb76c0298e4bf975d
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="">
                <div class="form-group col-md-12 ">
                    <input type="text" class="text" placeholder="nom" name="nom" />
                </div>
                <div class="form-group col-md-12 ">
                    <input type="text" class="text" placeholder="prenom" name="prenom"/>
                </div>
                <div class="form-group col-md-12 ">
                    <input type="text" class="text" placeholder="nom du compte" name="nom_compte"/>
                </div>
                <div class="form-group col-md-12 ">
                    <input type="password" class="password" placeholder="mot de passe" name="mot_de_passe"/>
                </div>
                <div class="form-group col-md-12 ">
                    <input type="text" class="text" placeholder="role" name="role" />
                </div>
                <div class="form-group col-md-12">
                    <input type="submit" class="btn btn-primary" value="ajouter un utilisateur" />
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
