<?php
namespace App\connexion;


require "../../vendor/autoload.php";
use App\requete\articlerepesitory;
require_once '../../src/requete/articlerepesitory.php';
?>

<!DOCTYPE html>
<html>
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
                <a class="nav-link" href="../index.php">Histoire <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Informatique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Jeux-vidéo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Actualité</a>
            </li>
            <?php
            if (!isset($_SESSION['utilisateur'])) {
                echo ' <li class="nav-item">';
                echo  '<a class="nav-link" href="../connexion/login.php">connexion</a>';
                echo '</li>';
            } ?>
            <?php
            if (isset($_SESSION['utilisateur'])) {
                echo ' <li class="nav-item">';
                echo  '<a class="nav-link" href="../connexion/login.php">deconnexion</a>';
                echo '</li>';
            } ?>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="">
                <div class="form-group col-md-12 ">
                    <input type="text" class="text" placeholder="titre" name="titre" />
                </div>
                <div class="form-group col-md-12 ">
                    <label for="contenu"></label>
                    <textarea id="contenu" name="contenu" rows="15" cols="150"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <input type="text" class="text" name="categorie" >
                </div>
                <div class="form-group col-md-12">
                    <input type="submit" class="btn btn-primary" value="ajouter un article" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php

if (!empty($_POST['titre']) && !empty($_POST['contenu'])){
    $test = new articlerepesitory();
    $test->ajoutArticle($_POST);
}else{
    echo 'champ nécessaire';
}
?>

</body>
</html>
