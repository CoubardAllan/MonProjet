<?php
namespace App\connexion;

require "../../vendor/autoload.php";
use App\requete\articlerepesitory;
require_once '../../src/requete/articlerepesitory.php';
use App\requete\categoriesRepository;


if (!empty($_POST['titre']) && !empty($_POST['contenu']) && !empty($_POST['date_publication'])){
    if(isset($_POST['submit'])){
        $articleRepository = new articlerepesitory();
        $article = $articleRepository->ajoutArticle($_POST);
        header('location: redacteur.php');
    }
}

$category = new categoriesRepository();
$categori = $category->findAll();
?>
<!DOCTYPE html>
<html>
<?php require '../header.php'; ?>
<body>
<?php require '../include/ajoutArticle.php'; ?>

<div class="container connexion-container">
    <div class="row">
        <div class="col-md-12 connexion-form mx-auto">
                <div class="row">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group col-md-12">
                            <label for="titre"></label>
                            <textarea id="titre" class="text" placeholder="titre" name="titre" cols="100%" rows="1"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="contenu"></label>
                            <textarea placeholder="entrez le contenu de votre article" id="contenu" name="contenu" rows="15" cols="150"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                           <SELECT name="categorie" size="1">
                                    <?php foreach ($categori as $categorie) : ?>
                                        <OPTION value="<?php echo $categorie->id ?>">
                                            <?php echo  $categorie->nom ?>
                                        </OPTION>
                                    <?php endforeach; ?>
                           </SELECT>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="file" name="fichier" id="fichieratel">
                        </div>
                        <div class="form-group col-md-12">
                            <input  type="text" class="date" placeholder="date AAAA/MM/JJ" name="date_publication">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="checkbox" id="TopArticle" name="toparticle" value="1" checked>
                            <label for="TopArticle">top article ?</label>
                        </div>
                        <div class="col-md-12">
                            <input name="submit" type="submit" class="btn btn-primary" value="ajouter un article" >
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

</body>
</html>
