<?php
use App\requete\articlerepesitory;

require '../../vendor/autoload.php';
require_once '../../src/requete/articlerepesitory.php';
$repository = new articlerepesitory();
?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../header.php'; ?>
<body>
<?php
require '../include/nav-visiteur.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="article-histoire">
                <?php foreach ($repository->findBy( ['id' => $_GET['id']], 'contenu, titre', 'articles') as $row) : ?>
                    <div class="col-12 text-center titre-article">
                        <p class="text"><strong><?php echo $row->titre ?></strong></p>
                    </div>
                    <div class="col-12">
                        <img class="napoleon" src="/image/aurore.jpg" alt="">
                    </div>
                    <div class="col-12">
                        <p class="text"><?php echo $row->contenu ?></p>
                    </div>
                <?php endforeach; ?>
                <div>
                    <a href="https://www.tvlibertes.com/la-petite-histoire-napoleon-etait-il-un-sale-con-reponse-a-topito">lien vers la vidéo</a>
                </div>

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
                    <h3>Articles</h3>
                </div>

                <div class="col-12 divider"></div>
                <?php foreach (array_slice($repository->findAll(),0,10) as $row) : ?>
                    <div class="inner col-md-12">
                        <div class="box-widget">
                            <div class="dernier-article">
                                <a href="" ><img alt="" src="/image/tele.jpg"></a>
                            </div>
                            <div class="texte">
                                <h5>
                                    <a href="../articles/index.php?id=<?php echo $row->id; ?>"><?php echo substr($row->titre,0,45) ; ?></a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 divider"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
