<?php
?>
<html>
<?php require '../header.php'; ?>

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