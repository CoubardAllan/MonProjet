<?php
require "../../vendor/autoload.php";

use App\authentification;
use App\requete\articlerepesitory;

require_once '../../src/requete/articlerepesitory.php';

use App\Session\session;


    $admin = new authentification();
    $admin->administrateur();


?>
<!DOCTYPE html>
<html>
<?php require '../header.php'; ?>
<body>
<?php require '../include/nav-admin.php'; ?>
<div class="container container-admin">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-dark">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">nom du compte</th>
                    <th scope="col">role</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php $admin = new articlerepesitory(); ?>
                <?php foreach ($admin->findUtilisateur() as $row) : ?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>
                    <td><?php echo $row->nom; ?></td>
                    <td><?php echo $row->prenom; ?></td>
                    <td><?php echo $row->nom_compte; ?></td>
                    <td><?php echo $row->role; ?></td>
                    <td><div class="ban"><i class="fas fa-ban"></i></div></td>
                </tr>

                 <?php endforeach; ?>
                </tbody>
            </table>
            <form action="ajoutUtilisateur.php">
                <div class="form-group col-md-12 text-right">
                    <input type="submit" class="btn btn-primary" value="ajouter un utilisateur" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once '../script.html'; ?>
</body>
</html>