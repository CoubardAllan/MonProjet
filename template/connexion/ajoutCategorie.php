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
                    <input type="text" class="text" placeholder="ajout d'une categories" name="categorie" />
                </div>
                <div class="form-group col-md-12">
                    <input type="submit" class="btn btn-primary" value="ajouter d'une categorie" />
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