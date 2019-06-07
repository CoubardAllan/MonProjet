<?php
require '../../vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
<?php

use App\requete\articlerepesitory;

require_once '../header.php'; ?>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Histoire <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Informatique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Jeux-vidéo</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Actualité</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../connexion/login.php">Connexion</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div id="carouselExampleControls" class="col-12 carousel slide carousel-fade my-carousel" data-ride="carousel">
                    <div class="carousel-item active ">
                        <img class="d-block w-100" style="height: 400px" src="/image/aurore.jpg" alt="premier slide ">
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" style="height: 400px" src="/image/chelou.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="height: 400px" src="/image/chemin.jpg" alt="Third slide">
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
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="row">
                <div class="top-articles sidebar col-md-12 ">
                    <h3>top articles</h3>
                </div>

                <div class="col-12 divider"></div>

                <div class="image-top-article">
                    <div class="box-widget">
                        <h6 class="widget-title">
                            <a href="../index.php" ><img alt="" src="../../image/tele.jpg"></a>
                        </h6>
                    </div>
                </div>
                <div class="texte-top-article">
                    <h5>
                        <a href="../index.php">Voici ici l'article favorite des utilisateur de la catagorie jeux-video</a>
                    </h5>
                </div>

                <div class="col-12 divider"></div>

                <div class="image-top-article">
                    <div class="box-widget">
                        <h6 class="widget-title">
                            <a href="../index.php" ><img alt="" src="../../image/tele.jpg"></a>
                        </h6>
                    </div>
                </div>
                <div class="texte-top-article">
                    <h5>
                        <a href="../index.php">Voici ici l'article favorite des utilisateur de la catagorie jeux-video</a>
                    </h5>
                </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-12 text-center">
                    <h2><strong>Articles sur l'actu</strong></h2>
                </div>
                 <?php
                    require_once '../../src/requete/articlerepesitory.php';
                    $article = new articlerepesitory();
                    ?>
                    <?php foreach ( $article->findBy(['category_id' => 4], 'titre, contenu, id') as $article) : ?>
                        <div class="col-6">
                            <div class="card">
                                <img class="card-img-top" src="../../image/chelou.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $article->titre ?></h5>
                                    <p class="card-text"><?php echo substr($article->contenu,0, 50); ?></p>
                                    <a class="btn btn-primary" href="../articles/index.php?id=<?php echo $article->id ?>" >aller vers l'article</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
            </div>
    </div>
</div>
<?php require_once '../script.html'; ?>

</body>
</html>