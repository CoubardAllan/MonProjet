<?php

namespace App;

use App\Session\session;

use App\requete\connexion;

class authentification{
    private $session;
    private $connexion;
    public function __construct()
    {
        $this->connexion = connexion::getConnexion();
        $this->session = session::getSession();
    }

    public function administrateur(){
        if (isset($_SESSION['utilisateur'])){
            foreach ($_SESSION['utilisateur'] as $row => $clef){
                if ($clef === 'administrateur'){
                    echo '';
                }
            }
        }
        else{
            header('location: ../index.php');
        }
    }

    public function redacteur(){
         // Si il n'y à pas d'utilisateur en session ou que l'utilisateur n'est pas a redacteur alors je redirige
        if (!$_SESSION['utilisateur'] || $_SESSION['utilisateur']['role'] !== 'redacteur'){
            header('location: ../index.php');
        }
    }

    public function isLogged()
    {

    }
}