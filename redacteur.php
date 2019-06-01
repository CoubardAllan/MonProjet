<?php
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="categorie/histoire.php">Histoire <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categorie/informatique.php">Informatique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categorie/jeux.php">Jeux-vidéo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categorie/index.php">Actualité</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="connexion/login.php">Connexion</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container container-redacteur">
    <div class="row">
        <div class="col-12">
            <table class="table table-dark">
                <tr class="col-12">
                    <th scope="col">Titre</th>
                    <th scope="col">date de publication</th>
                    <th scope="col">categorie</th>
                    <th scope="col">publié</th>
                </tr>
                <tr class="col-12">
                    <th scope="row">Napoleon</th>
                    <td>2019-12-25</td>
                    <td>jeux-vidéo</td>
                    <td>oui</td>
                </tr>
                <tr class="col-12">
                    <th scope="row">article</th>
                    <td>articles</td>
                    <td>articles</td>
                    <td>articles</td>
                </tr>
                <tr>
                    <th scope="row">articles</th>
                    <td>articles</td>
                    <td>articles</td>
                    <td>articles</td>
                </tr>
                <tr>
                    <th scope="row">article</th>
                    <td>articles</td>
                    <td>articles </td>
                    <td>articles</td>
                </tr>
            </table>
            <div class="text-right">
                <input type="submit" class="btn btn-primary" value="ajouter un article">
            </div>
        </div>
    </div>
</div>
</body>
</html>
