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
<?php require '../include/ajoutArticle.php'; ?>
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
