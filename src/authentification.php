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
        if ($_SESSION['utilisateur']){
            foreach ($_SESSION['utilisateur'] as $row => $clef){
                if ($clef === 'administrateur'){
                    echo 'vous etes un admin';
                }else{
                    header('location: ../index.php');
                }
            }
        }
    }

    public function redacteur(){
        if ($_SESSION['utilisateur']){
            foreach ($_SESSION['utilisateur'] as $row => $clef){
                if ($clef === 'redacteur'){
                    echo 'vous etes un redacteur';
                }else{
                    header('location: ../index.php');
                }
            }
        }
    }
}