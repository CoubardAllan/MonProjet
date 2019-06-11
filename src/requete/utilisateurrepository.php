<?php

namespace App\requete;

use App\Session\session;
use App\requete\connexion;

class utilisateurrepository
{
    private $connexion;
    private $session;
    private $requete;
    public function __construct()
    {
        $this->requete = new requete();
        $this->session = session::getSession();
        $this->connexion = connexion::getConnexion();
    }

    public function identification()
    {
        if (isset($_POST['nom_compte']) && isset($_POST['mdp'])) {
            $query = "SELECT nom_compte, mot_de_passe, role FROM utilisateur WHERE nom_compte = ? AND mot_de_passe = ? LIMIT 1";
            $result = $this->connexion->prepare($query);
            $result->execute([$_POST['nom_compte'], $_POST['mdp']]);
            $user = $result->fetch(\PDO::FETCH_ASSOC);

            $this->session->set('utilisateur', $user);
            if ($user['role'] === 'administrateur'){
                header('location: admin.php');
            }elseif ($user['role'] === 'redacteur'){
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
    public function insertion($data){
        $this->requete = 'INSERT INTO utilisateur(nom, prenom, nom_compte, mot_de_passe, role) VALUES (?,?,?,?,?)';
        $test2 = $this->connexion->prepare($this->requete);
        $test2->execute([$data['nom'], $data['prenom'], $data['nom_compte'], $data['mot_de_passe'], $data['role']]);
    }
}