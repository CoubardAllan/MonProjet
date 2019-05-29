<?php
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
    <a class="navbar-brand" href="/index.php">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/categorie/histoire.php">Histoire <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categorie/informatique.php">Informatique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categorie/jeux.php">Jeux-vidéo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categorie/actualite.php">Actualité</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/connexion/login.php">Connexion</a>
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
                <h1> Napoléon était-il un « sale con » ? </h1>

                <p> Dans une vidéo récente, le site Topito.com dresse la liste des « 5 trucs cool inventés par des sales cons ».
                    Dans cette liste on retrouve Hitler, Pétain, Saddam Hussein et… Napoléon !
                    Tantôt accusé d’être un « tyran colonialiste », sans pitié pour ses adversaires, tantôt jugé responsable de la mort de 2 millions de personnes, l’Empereur Napoléon se voit ainsi insulté par des gens qui, visiblement, n’ont pas cru bon d’ouvrir un livre d’histoire avant de réaliser leur vidéo.
                    Cette épisode de La Petite histoire est tout simplement une réponse à ces inepties grossières et pseudo-cool.
                </p>
                <div> <a href="https://www.tvlibertes.com/la-petite-histoire-napoleon-etait-il-un-sale-con-reponse-a-topito">lien vers la vidéo</a></div>

                <div class="date">article publié le 28 mai</div>
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


            </div>
        </div>
    </div>
</div>
</body>
</html>
