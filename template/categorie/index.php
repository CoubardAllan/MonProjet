<?php
require '../../vendor/autoload.php';
use App\requete\articlerepesitory;
require_once '../../src/requete/articlerepesitory.php';
$articleRepository = new articlerepesitory();
$categorieRepository = new \App\requete\categoriesRepository();
$categorie = $categorieRepository->findBy(['id' => $_GET['id']], '*', 'categories');
dump($categorie[0]->nom);
?>
<!DOCTYPE html>
<html>
    <?php require_once '../header.php'; ?>
<body>
<?php require '../include/nav-visiteur.php'; ?>
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
                <?php foreach ( $articleRepository->findBy(['is_top_article' => 1], 'titre, contenu, id','articles') as $art) : ?>
                    <div class="image-top-article">
                        <div class="box-widget">
                            <h6 class="widget-title">
                                <a href="../index.php" ><img alt="" src="../../image/tele.jpg"></a>
                            </h6>
                        </div>
                    </div>
                    <div class="texte-top-article">
                        <h5>
                            <a href="../articles/index.php  "><?php echo substr($art->contenu,0,75); ?></a>
                        </h5>
                    </div>
                    <div class="col-12 divider"></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-12 text-center">
                    <h2><strong>Articles sur l'<?php echo $categorie[0]->nom ?></strong></h2>
                </div>
                    <?php foreach ( $articleRepository->findBy(['category_id' => $_GET['id']],'*','articles') as $article) : ?>
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