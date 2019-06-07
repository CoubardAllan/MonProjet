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
        $this->requete = 'INSERT INTO articles(titre , contenu , category_id) VALUES (?,?,?)';
        $ajout = $this->connexion->prepare($this->requete);
        $ajout->execute([$data['titre'], $data['contenu'], $data['categorie']]);
    }
}