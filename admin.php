<?php
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
                <a class="nav-link" href="template/categorie/histoire.php">Histoire <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="template/categorie/informatique.php">Informatique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="template/categorie/jeux.php">Jeux-vidéo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="template/categorie/index.php">Actualité</a>
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
                    <th scope="col">Utilisateur</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">login</th>
                    <th scope="col">role</th>
                </tr>
                <tr class="col-12">
                    <th scope="row">utilisateur1</th>
                    <td>bonaparte</td>
                    <td>napoleon</td>
                    <td>napobona</td>
                    <td>redacteur</td>
                    <td><a href="/index.php"><i class="fas fa-ban" style="color: #ee4813"></i></a></td>
                </tr>
                <tr class="col-12">
                    <th scope="row">utilisateur2</th>
                    <td>utilisateur2</td>
                    <td>utilisateur2</td>
                    <td>utilisateur2</td>
                    <td>visiteur</td>
                    <td><a href="/index.php"><i class="fas fa-ban" style="color: #ee4813"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">utilisateur3</th>
                    <td>utilisateur3</td>
                    <td>utilisateur3</td>
                    <td>utilisateur3</td>
                    <td>visiteur</td>
                    <td><a href="/index.php"><i class="fas fa-ban" style="color: #ee4813"></i></a></td>
                </tr>
                <tr>
                    <th scope="row">utilisateur4</th>
                    <td>utilisateur4</td>
                    <td>utilisateur4 </td>
                    <td>utilisateur4</td>
                    <td>administrateur</td>
                    <td><a href="/index.php"><i class="fas fa-ban" style="color: #ee4813"></i></a></td>
                </tr>

            </table>
            <tr>
                <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="ajouter un utilisateur" />
                </div>
            </tr>
        </div>
    </div>
</div>
</body>
</html>