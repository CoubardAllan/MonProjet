<?php
require_once 'connexion.php';
class requete{
    private $requete;
    public function __construct()
    {
        $this->requete = new connexion();
    }
    public function select($table){
        $this->requete->getConnexion()->query('SELECT * FROM '.$table);
    }
}