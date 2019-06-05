<?php

namespace App\requete;

use App\requete\abstractrepository;

class utilisateurrepository extends abstractrepository
{

    public function __construct()
    {
        parent::__construct();
        $this->setTable('utilisateur');
    }

    public function identification()
    {
        if (isset($_POST['nom_compte']) && isset($_POST['mdp'])) {
            $query = "SELECT nom_compte, mot_de_passe FROM utilisateur WHERE nom_compte = ? AND mot_de_passe = ?";
            $result = $this->connexion->prepare($query);
            $result->execute([$_POST['nom_compte'], $_POST['mdp']]);
            $user = $result->fetchAll();
            header('location: ../index.php');
        }else{
            echo 'identifiants incorrect';
        }
    }
}