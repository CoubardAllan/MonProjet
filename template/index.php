<?php
use App\requete\articlerepesitory;
require "../vendor/autoload.php";
?>

<!DOCTYPE html>
<html>
<?php
use App\Session\session;

$session = session::getSession();
if($session->existe('utilisateur') === true){
    unset($_SESSION['utilisateur']);
};
?>
<?php require 'header.php'; ?>

<body>
<?php require 'include/nav-visiteur.php'; ?>
<div class="container">

    <div class="row">

        <div class="col-sm-8 mx-auto">
            <div class="row">

                <div id="carouselExampleControls" class="col-12 carousel slide carousel-fade my-carousel" data-ride="carousel">
                    <div class="carousel-item active ">
                        <img class="d-block w-100" style="height: 250px" src="../image/aurore.jpg" alt="premier slide ">
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" style="height: 250px" src="../image/chelou.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="height: 250px" src="../image/chemin.jpg" alt="Third slide">
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


                <div class="col-12 text-center">
                        <h2><strong>TOP Articles</strong></h2>
                </div>

                <div class="col-12 divider"></div>
                <?php
                require_once '../src/requete/articlerepesitory.php';
                $topArticle = new articlerepesitory();
                ?>
                <?php foreach ( array_slice($topArticle->findBy(['is_top_article' => 1], 'titre, contenu, id, photo_url', 'articles'),0 , 3 ) as $topArticle) : ?>
                    <div class="col-sm-4 d-flex pb-3">
                    <div class="card">
                        <img class="card-img-top" src="../../image/<?php echo $topArticle->photo_url ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo substr($topArticle->titre,0, 50) ?></h5>
                            <a  class="btn btn-primary" href="articles/index.php?id=<?php echo $topArticle->id ?>" >aller vers l'article</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="col-12 divider"></div>

                <div class="col-12 text-center">
                    <h2><strong>Derniers Articles</strong></h2>
                </div>

                <div class="col-12 divider"></div>

                <?php require_once '../src/requete/articlerepesitory.php';
                $article = new articlerepesitory();
                ?>
                <?php foreach ( $article->findAll() as $article) : ?>
                <div class="col-sm-4 d-flex pb-3">
                    <div class="card ">
                        <img class="card-img-top" src="../image/<?php echo $article->photo_url ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo substr($article->titre,0, 50) ?></h5>
                            <a class="btn btn-primary" href="articles/index.php?id=<?php echo $article->id ?>" >aller vers l'article</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php
require_once dirname(__DIR__). DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'compteur.php';
ajouter_vue();
$vues = nombre_vue()
?>
il y a <?= nombre_vue() ?> visite<?php if ($vues > 1): ?>s<?php endif; ?> sur le site

<?php require_once 'script.html'; ?>
</body>

</html>
