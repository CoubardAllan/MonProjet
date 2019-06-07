<?php
use App\requete\articlerepesitory;
require "../vendor/autoload.php";
?>

<!DOCTYPE html>
<html>

<?php require 'header.php'; ?>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="categorie/index.php">Histoire <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categorie/index.php">Informatique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categorie/index.php">Jeux-vidéo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categorie/index.php">Actualité</a>
            </li>
            <?php
            if (!isset($_SESSION['utilisateur'])) {
                echo ' <li class="nav-item">';
                echo  '<a class="nav-link" href="../template/connexion/login.php">connexion</a>';
                echo '</li>';
            } ?>
            <?php
            if (isset($_SESSION['utilisateur'])) {
                echo ' <li class="nav-item">';
                echo  '<a class="nav-link" href="../template/connexion/login.php">deconnexion</a>';
                echo '</li>';
            } ?>
        </ul>
    </div>
</nav>
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

                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="../image/chemin.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Article 1</h5>
                            <p class="card-text">debut de l'article un</p>
                            <a  class="btn btn-primary">aller vers l'article</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="../image/tele.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Article 2</h5>
                            <p class="card-text">debut de l'article 2.</p>
                            <a  class="btn btn-primary">aller vers l'article</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="../image/plage.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Article 3</h5>
                            <p class="card-text">debut de l'article 3</p>
                            <a class="btn btn-primary">aller vers l'article</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 divider"></div>

                <div class="col-12 text-center">
                    <h2><strong>Derniers Articles</strong></h2>
                </div>

                <div class="col-12 divider"></div>

                <?php require_once '../src/requete/articlerepesitory.php';
                $article = new articlerepesitory();
                ?>
                <?php foreach ( $article->findAll() as $article) : ?>
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="../image/nuit.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $article->titre ?></h5>
                            <p class="card-text"><?php echo substr($article->contenu,0, 50); ?></p>
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
