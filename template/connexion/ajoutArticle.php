<?php
namespace App\connexion;

require "../../vendor/autoload.php";
use App\requete\articlerepesitory;
require_once '../../src/requete/articlerepesitory.php';



if (!empty($_POST['titre']) && !empty($_POST['contenu']) && !empty($_POST['date_publication'])){
    if(isset($_POST['submit'])){
        $test = new articlerepesitory();
        $test->ajoutArticle($_POST);
        $tmp_name = $_FILES['fichier']['tmp_name'];
        if(move_uploaded_file($tmp_name, '../../image/'. $_FILES['fichier']['name'])){

        }
        echo 'ajout fait';
        }
}else{
    echo 'champ nécessaire';
}
?>

<!DOCTYPE html>
<html>
<?php require '../header.php'; ?>
<body>
<?php require '../include/ajoutArticle.php'; ?>
<div class="container container-ajoutArt">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group col-md-12 ">
                    <input type="text" class="text" placeholder="titre" name="titre" />
                </div>
                <div class="form-group col-md-12 ">
                    <label for="contenu"></label>
                    <textarea placeholder="entrez le contenu de votre article" id="contenu" name="contenu" rows="15" cols="150"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <SELECT name="categorie" size="1">
                        <OPTION value="1">histoire</OPTION>
                        <OPTION value="2">informatique</OPTION>
                        <OPTION value="3">jeux-vidéo</OPTION>
                        <OPTION value="4">actualité</OPTION>
                    </SELECT>
                </div>
                <div>
                    <input type="file" name="fichier" id="fichieratel">
                </div>
                <div>
                    <input type="text" class="date" placeholder="date AAAA/MM/JJ" name="date_publication">
                </div>
                <div class="form-group col-md-12">
                    <input name="submit" type="submit" class="btn btn-primary" value="ajouter un article" />
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
