<?php
use App\requete\utilisateurrepository;

require "../../vendor/autoload.php";
require '../header.php';
if ($_POST) {
    $login = new utilisateurrepository();
    $login->identification();
}
?>
<!DOCTYPE html>
<html>
<<<<<<< HEAD
=======
<<<<<<< HEAD:template/connexion/login.php
<?php require '../header.php'; ?>
=======
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css.css">
>>>>>>> c5cfdec46f1b0cac88a3bd5bb76c0298e4bf975d:template/connexion/login.php

>>>>>>> master
<body>
<div class="container connexion-container">
    <div class="row">
        <div class="col-md-4 connexion-form mx-auto">
<<<<<<< HEAD
            <form method="post" action="login.php">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" placeholder="nom du compte" name="nom_compte" />
                    </div>
                    <div class="form-group col-md-12 text-center">
                        <input type="password" class="form-control" placeholder="mot de passe" name="mdp" />
                    </div>
                    <div class="form-group col-md-12">
                        <input type="submit" class="btnSubmit" value="connexion" />
                    </div>
                    <div class="col-md-12">
                        <a href="../index.php">retour</a>
                    </div>
=======
            <div class="row">
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" placeholder="nom du compte" value="" />
                </div>
                <div class="form-group col-md-12 text-center">
                    <input type="password" class="form-control" placeholder="mot de passe" value="" />
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">redacteur</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">administrateur</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">utilisateur</label>
                </div>
                <div class="form-group col-md-12">
                    <input type="submit" class="btnSubmit" value="connexion" />
<<<<<<< HEAD:template/connexion/login.php
=======
                </div>
                <div class="col-md-12">
                    <a href="inscription.php">pas de compte ?</a>
>>>>>>> c5cfdec46f1b0cac88a3bd5bb76c0298e4bf975d:template/connexion/login.php
                </div>
                <div class="col-md-12">
                    <a href="../index.php">retour</a>
>>>>>>> master
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>