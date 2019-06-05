<?php
?>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css.css">

</head>
<body>
<div class="container connexion-container">
    <div class="row">
        <div class="col-md-4 connexion-form mx-auto">
            <div class="row">
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" placeholder="nom du compte" value="" />
                </div>
                <div class="form-group col-md-12 text-center">
                    <input type="password" class="form-control" placeholder="mot de passe" value="" />
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">redacteur</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">administrateur</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">utilisateur</label>
                </div>
                <div class="form-group col-md-12">
                    <input type="submit" class="btnSubmit" value="connexion" />
                </div>
                <div class="col-md-12">
                    <a href="inscription.php">pas de compte ?</a>
                </div>
                <div class="col-md-12">
                    <a href="../index.php">retour</a>
                </div>
                <p><a href="admin.php">admin</a></p>
                <a href="redacteur.php">redac</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>