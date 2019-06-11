<?php
require "../../vendor/autoload.php";
use App\requete\articlerepesitory;
require_once '../../src/requete/articlerepesitory.php';
?>

<!DOCTYPE html>
<html>
<?php require '../header.php'; ?>
<body>
<?php require '../include/ajoutUtilisateur.php'; ?>
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
<?php
use App\requete\utilisateurrepository;
if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['nom_compte']) && !empty($_POST['mot_de_passe']) && !empty($_POST['role'])){
    $test = new utilisateurrepository();
    $test->insertion($_POST);
}else{
    echo 'champ nécessaire';
}
?>

</body>
</html>
