<?php
require "../../vendor/autoload.php";

?>
<!DOCTYPE html>
<html>
<?php
require '../header.php';
use App\authentification;
use App\requete\articlerepesitory;
$redacteur = new authentification();
$redacteur->redacteur();

$affichageArticle =  new articlerepesitory();
$article = $affichageArticle->Jointure();
?>
<body>
<?php require '../include/nav-redacteur.php'; ?>

<div class="container container-redac">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-dark">
                <thead>
                <tr>
                    <th scope="col">titre</th>
                    <th scope="col">date de publication</th>
                    <th scope="col">categorie</th>
                    <th scope="col">top article</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($article as $articles) : ?>
                <tr>
                    <th scope="row"><?php echo $articles->titre ; ?></th>
                    <td><?php echo $articles->date_publication ;?></td>
                    <td><?php echo $articles->nom ;?></td>
                    <td><?php if ($articles->is_top_article == 0 ) {echo 'non';}else{ echo 'oui';} ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <form action="ajoutArticle.php">
                <div class="form-group col-md-12 text-right">
                    <input type="submit" class="btn btn-primary" value="ajouter un article" />
                </div>
            </form>
            <form action="ajoutCategorie.php">
                <div class="form-group col-md-12 text-right">
                    <input type="submit" class="btn btn-primary" value="ajouter une categorie" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once '../script.html'; ?>
</body>
</html>
