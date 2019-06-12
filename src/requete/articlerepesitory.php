<?php
namespace App\requete;
use App\requete\abstractrepository;
class articlerepesitory extends abstractrepository{
    private $connexion;
    private $requete;
    public function __construct()
    {
        parent::__construct();
        $this->setTable('articles');
        $this->connexion = connexion::getConnexion();
        $this->requete = new requete();
    }

    public function ajoutArticle($data){
        $test = $_POST['categorie'];
        $this->requete = 'INSERT INTO articles(titre , contenu , date_publication , category_id ) VALUES (?,?,?,?)';
        $ajout = $this->connexion->prepare($this->requete);
        $ajout->execute([$data['titre'], $data['contenu'], $data['date_publication'], $data['categorie']]);
        $id = $this->connexion->lastInsertId();
        $recup = 'SELECT * FROM articles WHERE id = ' . $id ;
        $recuperation = $this->connexion->prepare($recup);
        $recuperation->execute();
        dd($recuperation);
        $update = 'UPDATE articles SET WHERE id = ' . $id;

    }
}