<?php
use App\requete\articlerepesitory;

require '../../vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./index.php">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/template/categorie/index.php">Histoire <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/template/categorie/index.php">Informatique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/template/categorie/index.php">Jeux-vidéo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/template/categorie/index.php">Actualité</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../connexion/login.php">Connexion</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="article-histoire">
                <div class="col-12">
                    <img class="napoleon" src="/image/napoleon.jpg" alt="">
                </div>
                <?php
                require_once '../../src/requete/articlerepesitory.php';
                $contenu = new articlerepesitory(); ?>

                    <p><?php $contenu->findBy(); ?></p>
                <?php foreach ($contenu->findBy() as $contenu) : ?>

                    <p class="text"><?php echo $contenu->contenu; ?></p>

                <?php endforeach; ?>

                <div> <a href="https://www.tvlibertes.com/la-petite-histoire-napoleon-etait-il-un-sale-con-reponse-a-topito">lien vers la vidéo</a></div>

                <div class="date">article publié le 28 mai</div>

                <div class="col-12 divider"></div>

                <div class="card"

                <div class="col-12 divider"></div>

                <h3 class="comment">Laisser un commentaire</h3>
                <p class="comment-area">
                    <label for="interieur"></label>
                    <textarea id="interieur" name="interieur" cols="80" rows="8" maxlength="100000"></textarea>
                </p>
                <p class="submit">
                    <input name="submit" type="submit" value="laisser un commentaire">
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="sidebar col-md-12 text-center">
                    <h3>les autres articles</h3>
                </div>

                <div class="col-12 divider"></div>

                <div class="inner col-md-12">
                    <div class="box-widget">
                        <div class="dernier-article">
                            <a href="" ><img alt="" src="/image/tele.jpg"></a>
                        </div>
                        <div class="texte">
                            <h5>
                                <a href=""> voici ici le dernier article publié sur le site</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 divider"></div>

                <div class="inner col-md-12">
                    <div class="box-widget">
                        <div class="dernier-article">
                            <a href="" ><img alt="" src="/image/tele.jpg"></a>
                        </div>
                        <div class="texte">
                            <h5>
                                <a href=""> voici ici le dernier article publié sur le site</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 divider"></div>

                <div class="inner col-md-12">
                    <div class="box-widget">
                        <div class="dernier-article">
                            <a href="" ><img alt="" src="/image/tele.jpg"></a>
                        </div>
                        <div class="texte">
                            <h5>
                                <a href=""> voici ici le dernier article publié sur le site</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 divider"></div>

                <div class="inner col-md-12">
                    <div class="box-widget">
                        <div class="dernier-article">
                            <a href="" ><img alt="" src="/image/tele.jpg"></a>
                        </div>
                        <div class="texte">
                            <h5>
                                <a href=""> voici ici le dernier article publié sur le site</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 divider"></div>

                <div class="inner col-md-12">
                    <div class="box-widget">
                        <div class="dernier-article">
                            <a href="" ><img alt="" src="/image/tele.jpg"></a>
                        </div>
                        <div class="texte">
                            <h5>
                                <a href=""> voici ici le dernier article publié sur le site</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 divider"></div>

                <div class="inner col-md-12">
                    <div class="box-widget">
                        <div class="dernier-article">
                            <a href="" ><img alt="" src="/image/tele.jpg"></a>
                        </div>
                        <div class="texte">
                            <h5>
                                <a href=""> voici ici le dernier article publié sur le site</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 divider"></div>

                <div class="inner col-md-12">
                    <div class="box-widget">
                        <div class="dernier-article">
                            <a href="" ><img alt="" src="/image/tele.jpg"></a>
                        </div>
                        <div class="texte">
                            <h5>
                                <a href=""> voici ici le dernier article publié sur le site</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 divider"></div>

                <div class="inner col-md-12">
                    <div class="box-widget">
                        <div class="dernier-article">
                            <a href="" ><img alt="" src="/image/tele.jpg"></a>
                        </div>
                        <div class="texte">
                            <h5>
                                <a href=""> voici ici le dernier article publié sur le site</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 divider"></div>

                <div class="inner col-md-12">
                    <div class="box-widget">
                        <div class="dernier-article">
                            <a href="" ><img alt="" src="/image/tele.jpg"></a>
                        </div>
                        <div class="texte">
                            <h5>
                                <a href=""> voici ici le dernier article publié sur le site</a>
                            </h5>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</body>
</html>
