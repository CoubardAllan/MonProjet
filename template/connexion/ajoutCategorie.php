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
<div class="container connexion-container">
    <div class="row">
        <div class="col-md-4 connexion-form mx-auto">
            <form method="post">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control text" placeholder="Libellé" name="categorie" />
                    </div>
                    <div class="form-group col-md-12">
                        <input type="submit" class="btn btn-primary" value="Sauvegarder" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
use App\requete\categoriesRepository;
if (!empty($_POST['categorie'])){
    $test = new categoriesRepository();
    $test->insert($_POST);
}else{
    echo 'champ nécessaire';
}
?>
</body>
</html>