<?php

namespace App\requete;

use App\Session\session;
use App\requete\connexion;

class utilisateurrepository
{
    private $connexion;
    private $session;
    public function __construct()
    {
        $this->session = session::getSession();
        $this->connexion = connexion::getConnexion();
    }

    public function identification()
    {
        if (isset($_POST['nom_compte']) && isset($_POST['mdp'])) {
            $query = "SELECT nom_compte, mot_de_passe, role FROM utilisateur WHERE nom_compte = ? AND mot_de_passe = ?";
            $result = $this->connexion->prepare($query);
            $result->execute([$_POST['nom_compte'], $_POST['mdp']]);
            $user = $result->fetchAll(\PDO::FETCH_COLUMN, 2);
            $this->session->set('utilisateur', $user);
            if ($user[0] === 'administrateur'){
                header('location: admin.php');
            }elseif ($user[0] === 'redacteur'){
                header('location: redacteur.php');
            }else{
                echo 'champ incorrect';
            }
            return false;
        }
        return false;
    }
    public function deco(){
        if ($this->session->existe('utilisateur')) {
            unset($_SESSION['utilisateur']);
            header('Location: login.php');
            exit();
        }
    }
}