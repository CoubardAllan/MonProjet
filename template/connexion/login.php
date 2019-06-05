<?php
use App\requete\articlerepesitory;

require "../../vendor/autoload.php";
?>
<?php
require '../header.php';

if(!empty($_POST['nom_compte']) && !empty($_POST['mdp']) && !empty($_POST['role'])) {
    $login = new articlerepesitory();
    $login->identification();
    if ($_POST['role'] === 'administrateur'){
        header('location: admin.php');
    }elseif ($_POST['role'] === 'redacteur'){
        header('location: redacteur.php');
    }elseif ($_POST['role'] === 'visiteur' ){
        header('location ../index.php');
    }
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
                    <div class="form-group col-md-12 text-center">
                        <input type="text" class="form-control" placeholder="role" name="role" />
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