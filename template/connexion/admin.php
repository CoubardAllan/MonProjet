<?php
require "../../vendor/autoload.php";

use App\requete\articlerepesitory;

require_once '../../src/requete/articlerepesitory.php';

use App\Session\session;

$session = session::getSession();
if($session->existe('utilisateur') === null){
    header('Location: login.php');
}
use App\authentification;
$admin = new authentification();
$admin->administrateur();
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
<div class="container container-admin">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-dark">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">nom du compte</th>
                    <th scope="col">role</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php $admin = new articlerepesitory(); ?>
                <?php foreach ($admin->findUtilisateur() as $row) : ?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>
                    <td><?php echo $row->nom; ?></td>
                    <td><?php echo $row->prenom; ?></td>
                    <td><?php echo $row->nom_compte; ?></td>
                    <td><?php echo $row->role; ?></td>
                    <td><div class="ban"><i class="fas fa-ban"></i></div></td>
                </tr>

                 <?php endforeach; ?>
                </tbody>
            </table>
            <form action="ajoutUtilisateur.php">
                <div class="form-group col-md-12 text-right">
                    <input type="submit" class="btn btn-primary" value="ajouter un utilisateur" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once '../script.html'; ?>
</body>
</html>