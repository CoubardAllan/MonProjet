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
<body>
<div class="container connexion-container">
    <div class="row">
        <div class="col-md-4 connexion-form mx-auto">
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
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>