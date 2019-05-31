<?php
class connexion{
    private $connexion;
    public function __construct()
    {
        try{
        $this->connexion = new PDO('mysql:host=localhost;dbname=mp1','root','');
        }catch (PDOException $e){
            echo '<br>'.$e->getMessage();
        }
    }

    public function getConnexion()
    {
        return $this->connexion;
    }
}