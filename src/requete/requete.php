<?php

namespace App\requete;


use App\requete\connexion;

class requete{

    /**
     * @var string ici c'est mon attribut privé que je nomme requete
     */
    private $requete;

    /**
     * @var PDO
     */
    private $connexion;

    /**
     * @var PDO ici c'est mon constructeur qui me sert a me connecter a ma bdd
     */

    public function __construct()
    {
        $this->connexion = connexion::getConnexion();
    }

    /**
     * @return requete
     * @var PDO ici c'est la fonction que j'appelle select qui me sert a faire des requetes en bdd
     */

    public function select($get){
        $this->requete =  'SELECT '.$get;
        return $this;
    }

    /**
     * @return $this
     *
     */

    public function from($table){
        $this->requete =  $this->requete . ' FROM ' . $table;
        return $this;
    }

    public function where($id){
        $this->requete = $this->requete . ' WHERE id = '. $id;
        return $this;
    }

    public function execute(){
        $query = $this->connexion->prepare($this->requete);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_CLASS);
    }
}