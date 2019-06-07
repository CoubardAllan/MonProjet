<?php
require "../../vendor/autoload.php";

?>
<!DOCTYPE html>
<html>
<?php
require '../header.php';
use App\authentification;
$redacteur = new authentification();
$redacteur->redacteur();
?>
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
                echo  '<a class="nav-link" href="login.php">connexion</a>';
                echo '</li>';
            } ?>
            <?php

            if (isset($_SESSION['utilisateur'])) {
                echo ' <li class="nav-item">';
                echo  '<a class="nav-link" href="login.php">deconnexion</a>';
                echo '</li>';
            }

            ?>
        </ul>
    </div>
</nav>

<div class="container container-redac">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-dark">
                <thead>
                <tr>
                    <th scope="col">titre</th>
                    <th scope="col">date de publication</th>
                    <th scope="col">categorie</th>
                    <th scope="col">publié</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Napoleon</th>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
                <tr>
                    <th scope="row">test</th>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
                <tr>
                    <th scope="row">test</th>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
                </tbody>
            </table>
            <form action="ajoutArticle.php">
                <div class="form-group col-md-12 text-right">
                    <input type="submit" class="btn btn-primary" value="ajouter un article" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once '../script.html'; ?>
</body>
</html>
