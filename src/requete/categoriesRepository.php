<?php
namespace App\requete;
use App\requete\abstractrepository;

class categoriesRepository extends abstractrepository{
    private $requete;
    private $connexion;
    public function __construct()
    {
        parent::__construct();
        $this->setTable('categories');
        $this->requete = new requete();
        $this->connexion = connexion::getConnexion();
    }
    public function insert($data){
        $this->requete = 'INSERT INTO categories(nom) VALUES (?)';
        $insert = $this->connexion->prepare($this->requete);
        $insert->execute([$data['categorie']]);
    }
}