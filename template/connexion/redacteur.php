<?php
require "../../vendor/autoload.php";

?>
<!DOCTYPE html>
<html>
<?php
require '../header.php';
use App\authentification;
$redacteur = new authentification();
$redacteur->redacteur();
?>
<body>
<?php require '../include/nav-redacteur.php'; ?>

<div class="container container-redac">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-dark">
                <thead>
                <tr>
                    <th scope="col">titre</th>
                    <th scope="col">date de publication</th>
                    <th scope="col">categorie</th>
                    <th scope="col">publié</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Napoleon</th>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
                <tr>
                    <th scope="row">test</th>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
                <tr>
                    <th scope="row">test</th>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
                </tbody>
            </table>
            <form action="ajoutArticle.php">
                <div class="form-group col-md-12 text-right">
                    <input type="submit" class="btn btn-primary" value="ajouter un article" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once '../script.html'; ?>
</body>
</html>
