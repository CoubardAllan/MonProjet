<?php
use App\requete\connexion;

if(!empty()){

}


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
                    <input type="text" name="email" class="form-control" placeholder="email" />
                </div>
                <div class="form-group col-md-12 text-center">
                    <input type="password" name="password" class="form-control" placeholder="mot de passe" />
                </div>
                <div class="form-group col-md-12 text-center">
                    <input type="password" name="cpassword" class="form-control" placeholder="confirmer votre mot de passe" />
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">redacteur</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">utilisateur</label>
                </div>

                <div class="form-group col-md-12">
                    <input type="submit" class="btnSubmit" value="inscription" />
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>