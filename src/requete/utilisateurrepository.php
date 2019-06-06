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
            $user = $result->fetchAll();
            foreach ($user as $row => $clef) {
                if ($clef[2] === 'administrateur') {
                    $this->session->set('utilisateur', $user);
                    header('Location: admin.php');
                } elseif ($clef[2] === 'redacteur') {
                    $this->session->set('utilisateur', $user);
                    header('Location: redacteur.php');
                } elseif ($clef[2] === 'visiteur') {
                    $this->session->set('utilisateur', $user);
                    header('Location: ../index.php');
                }
            }
            return false;
        }
        return false;
    }
}